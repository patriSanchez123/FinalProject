<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class CreateEmployee extends Component
{
    //
    public $employeeName;
    public $dni;
    public $phone;
    public $ss;
    public $privileges;
    public $email;
    public $state;

    //reglas de validación
    protected $rules = [
            'employeeName'=> 'required|max:100|min:3',
            'dni'=> 'required|regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKEtrwagmyfpdxbnjzsqvhlcke]$/|unique:employees',
            'phone'=> 'required|regex:/^[0-9]{9}$/',
            'ss'=> 'required|regex:/^[0-9]{12}$/|unique:employees',
            'email'=> 'required|email|unique:employees',
            'privileges'=>'required',
            'email'=>'required|email|unique:users',
            'state'=>'required'

    ];
    // protected $messages = [
    //     'employeeName.required'=>'El nombre es requerido',
    //     'employeeName.max:100'=>'Máximo 100 caracteres',
    //     'employeeName.min:3'=>'Minimo 3 caracteres',


    // ];

    /**
     *  Function to render the content
     *
     */
    public function render()
    {
        return view('livewire.create-employee');
    }

    /**
     * Function to render the content
     */
    public function resetModal(){
        $this->reset(['employeeName','dni','phone','ss','email','privileges']);
    }

    /**Activates validations every time it is modified */
    public function updated($propetyName){
        $this->validateOnly($propetyName);
    }

    /**
     * Method for save employee
     */
    public function save(){

         $this->validate();
        Employee::create([
            'employeeName'=>$this->employeeName,
            'dni'=>$this->dni,
            'phone'=>$this->phone,
            'ss'=>$this->ss,
            'email'=>$this->email,
            'privileges'=>$this->privileges,
            'state'=>$this->state
        ]);

        //reset form
        $this->resetModal();


        /**Emit event to communicate with the showEmployee controller, for one time
        *record the employee perform the asynchronous request */
        //Listen only to the show-employee component
        //Communication with the show-employee component
        $this->emitTo('show-employee','render');

        //close modal from event
        $this->emit('closeModal','createEmployeeModal');

        $this->emit('alert','El empleado se ha creado correctamente');



    }



    }
