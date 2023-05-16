<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Prueba;
use Illuminate\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
//Login
// Route::get('login', function () {
//     return view('login');
// });
// //Route register
// Route::get('register', function () {
//     return view('register');
// });
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//Route::view('privada','privada')->name('privada');


Route::post('employee/store',[EmployeeController::class,'store'])->name('employee.store');

//ROUTES PUBLIC REGISTER AND LOGION

Route::view('login',"login")->name('login');
Route::view('register','register')->name('register');
Route::view('register/alert/{request}','register',['alert' => true,'request'])->name('register.alert');
Route::view('home','home')->name('home');

Route::post('register',[LoginController::class,'register'])->name('validate.register');
Route::post('loginSession',[LoginController::class,'login'])->name('loginSession');
Route::get('logout',[LoginController::class,'logout'])->name('logout');


//ROUTES PROTECTED ADMIN
Route::group(['middleware'=>['role:admin']],function(){
    Route::view('adminHome','adminHome')->name('adminHome');
});

//ROUTES PROTECTED EMPLOYEE
route::group(['middleware'=>['role:employee']],function(){
    Route::view('employeeHome','employeeHome')->name('employeeHome');
});

//ROUTES PROTECTED CUSTOMER
route::group(['middleware'=>['role:customer']],function(){
    Route::view('customerHome','customerHome')->name('customerHome');
});



