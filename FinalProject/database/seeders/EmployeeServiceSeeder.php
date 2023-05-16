<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class EmployeeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $table = 'employee_service';
    public function run(): void
    {
        $Employee1=Employee::find(1);
        $Employee1->services()->attach([1,5]);

        $Employee2=Employee::find(2);
        $Employee2->services()->attach([3,5]);

        $Employee3=Employee::find(3);
        $Employee3->services()->attach([5,6]);

        $Employee4=Employee::find(4);
        $Employee4->services()->attach([2]);

        $Employee5=Employee::find(5);
        $Employee5->services()->attach([4,6]);
    }
}
