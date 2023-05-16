<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employee = new Employee();
        $employee->employeeName="Sandra Cabeza López";
        $employee->dni="35411236J";
        $employee->ss="123456789789";
        $employee->phone="639852741";
        $employee->email="sandra@gmail.com";
        $employee->privileges="employee";
        $employee->activeUser="y";
        $employee->company_id=1;
        $employee->save();

        $employee = new Employee();
        $employee->employeeName="Ana Guzmán Fernández";
        $employee->dni="45789632Y";
        $employee->ss="123654789987";
        $employee->phone="612456789";
        $employee->email="anagf@gmail.com";
        $employee->privileges="employee";
        $employee->company_id=1;
        $employee->save();


        $employee = new Employee();
        $employee->employeeName="David Civera Trigo";
        $employee->dni="78965412K";
        $employee->ss="789456123123";
        $employee->phone="678945123";
        $employee->email="paulact@gmail.com";
        $employee->privileges="employee";
        $employee->company_id=1;
        $employee->save();

        $employee = new Employee();
        $employee->employeeName="Pedro Cobo Cruz";
        $employee->dni="45678912L";
        $employee->ss="147852369987";
        $employee->phone="614785231";
        $employee->email="pedrocz@gmail.com";
        $employee->privileges="employee";
        $employee->company_id=1;
        $employee->save();

        $employee = new Employee();
        $employee->employeeName="Mónica Pérez Moreno";
        $employee->dni="14785298L";
        $employee->ss="456789123321";
        $employee->phone="614785231";
        $employee->email="monicapm@gmail.com";
        $employee->privileges="employee";
        $employee->company_id=1;
        $employee->save();

        //administradores
        $employee = new Employee();
        $employee->employeeName="Rocio Salazar Clavería";
        $employee->dni="15234563L";
        $employee->ss="147852387";
        $employee->phone="654753159";
        $employee->email="rocio@gmail.com";
        $employee->privileges="admin";
        $employee->activeUser="y";
        $employee->company_id=1;
        $employee->save();

        $employee = new Employee();
        $employee->employeeName="Fernando Alonso Exposito";
        $employee->dni="22211125W";
        $employee->ss="741456987";
        $employee->phone="654753123";
        $employee->email="fernandoae@gmail.com";
        $employee->privileges="admin";
        $employee->activeUser="n";
        $employee->company_id=1;
        $employee->save();
    }
}



