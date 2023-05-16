<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class ShowEmployee extends Component
{
    public $search;
    public $sort='id';
    public $direction="desc";
    //listener event, recibe el evento del componente createEmployee y renderiza la vista
    protected $listeners = ['render'=>'render'];

    public function render(){
        $employees = Employee::where('employeeName', 'like', '%' . $this->search . '%')
        ->orwhere('dni', 'like', '%' . $this->search . '%')
        ->orwhere('ss', 'like', '%' . $this->search . '%')
        ->orwhere('phone', 'like', '%' . $this->search . '%')
        ->orwhere('ss', 'like', '%' . $this->search . '%')
        ->orwhere('state', 'like', '%' . $this->search . '%')
        ->orderBy($this->sort,$this->direction)
        ->get();
    return view('livewire.show-employee', compact('employees'));

    }
    public function order($sort){
        if($this->sort == $sort){

        if($this->direction == 'desc'){
            $this->direction = 'asc';
        }else{
            $this->direction= "desc";
        }
    }else{
        $this->sort =$sort;

    }

    }
}
