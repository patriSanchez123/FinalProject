<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Function to register in the database and validate the form
     */
    public function register(Request $request)
    {
        $privileges = "";
        $alert = "false";

        // validation of form
        $request->validate([
            'name' => 'required|min:4|max:50',
            'email' => 'required|email|unique:users',
            'dni' => 'required|regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKEtrwagmyfpdxbnjzsqvhlcke]$/|unique:users',
            'password' => 'required|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-_]).{8,}$/|confirmed',
            'password_confirmation' => 'required'
        ]);
        $employee = Employee::where('dni', $request->dni)->count();
        $customer = Customer::where('dni', $request->dni)->count();

        /**
         * Check if there is an employee or client with the dni
         * of the form, if either of them exists, add the user and role in
         * the database and modify the activeUser
         */

        if ($employee > 0 || $customer > 0) {
            if ($employee > 0) {
                $employee = Employee::where('dni', $request->dni)->first();
                $privileges = $employee->privileges;
                $employee->activeUser = 'y';
                $employee->save();
            } else if ($customer > 0) {
                $customer = Customer::where('dni', $request->dni)->first();
                $privileges = $customer->privileges;
                $customer->activeUser = 'n';
                $employee->save();
            }

            $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'dni' => $request->dni,
                'password' => bcrypt($request->password),
            ]);
            $user->save();
            //Assign role
            $user->assignRole($privileges);

            // I authenticate the user
            Auth::login($user);
            //Dependiendo del rol entra en una ruta diferente
            if ($privileges == 'admin') {
                return redirect(route('adminHome'));
            } else if ($privileges == 'employee') {
                return redirect(route('employeeHome'));
            } else if ($privileges == 'customer') {
                return redirect(route('customerHome'));
            } else {
                return redirect(route('register'));
            }
        } else {
            $alert = true;
            return view('register', compact('alert', 'request'));;
        }
    }

/**
 * Fuction to login with the user
 */
    public function login(Request $request)
    {
        // Validación
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // Intenta autenticar al usuario
        $credentials = $request->only('email', 'password');
        $remember = ($request->has('remember') ? true : false);
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $user = User::where('email', $request->email)->first();
            //user role
            $privileges = $user->getRoleNames()->first();

            if ($privileges == 'admin') {
                return redirect()->intended(route('adminHome'));
            } else if ($privileges == 'employee') {
                return redirect()->intended(route('employeeHome'));
            } else if ($privileges == 'customer') {
                return redirect()->intended(route('customerHome'));
            } else {
                return redirect(route('register'));
            }
        }
        // if you did not authenticate successfully, return to the login form with an error message
        return back()->withErrors([
            'email' => 'Credenciales incorrectas',
        ]);
    }

    /**
     * Funtion to log out user
     */
    public function logout(Request $request)
    {
        //salir de la sesion
        Auth::logout();
        //Invalidar sesión
        $request->session()->invalidate();
        //Regenerar sesion
        $request->session()->regenerateToken();

        return redirect(route('home'));
    }
}
