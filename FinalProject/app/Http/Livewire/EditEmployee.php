<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class EditEmployee extends Component
{

    public $employee;
    public $employeeName;
    public $dni;
    public $phone;
    public $ss;
    public $privileges;
    public $email;
    public $close;
    public $checked;

    //reglas de validación
    protected $rules = [
            'employee.employeeName'=> 'required|max:100|min:3',
            'employee.dni'=> 'required|regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKEtrwagmyfpdxbnjzsqvhlcke]$/|unique:employees',
            'employee.phone'=> 'required|regex:/^[0-9]{9}$/',
            'employee.ss'=> 'required|regex:/^[0-9]{12}$/|unique:employees',
            'employee.email'=> 'required|email|unique:employees',
            'employee.privileges'=>'required',
            'employee.email'=>'required|email|unique:users',
            'employee.state'=>'required'


    ];

    public function mount(Employee $employee){
        $this->checked=true;
        $this->employee = $employee;

    }

    public function save(){
        $this->employee->save();

        $this->emitTo('show-employee','render');

        //close modal from event
        $this->emit('closeModal','employeeEdit');

        $this->emit('alert','El empleado se modificado correctamente');
    }

    public function render()
    {
        return view('livewire.edit-employee');
    }

}
