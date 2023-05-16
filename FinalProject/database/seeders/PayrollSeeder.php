<?php

namespace Database\Seeders;

use App\Models\Payroll;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PayrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contract = new Payroll();
        $contract->employee_id="1";
        $contract->date='2019-06-19';
        $contract->payroll=asset('storage/payrolls/payroll35411236J-2019-06-19-1.pdf ');
        $contract->save();

        $contract = new Payroll();
        $contract->employee_id="2";
        $contract->date='2020-07-20';
        $contract->payroll=asset('storage/payrolls/payroll45789632Y-2020-07-20-1.pdf');
        $contract->save();

        $contract = new Payroll();
        $contract->employee_id="3";
        $contract->date='2023-01-14';
        $contract->payroll=asset('storage/payrolls/payroll78965412K-2023-01-14-1.pdf');
        $contract->save();

        $contract = new Payroll();
        $contract->employee_id="4";
        $contract->date='2022-12-12';
        $contract->payroll=asset('storage/payrolls/payroll45678912L-2022-12-12-1.pdf');
        $contract->save();

        $contract = new Payroll();
        $contract->employee_id="5";
        $contract->date='2018-04-01-1';
        $contract->payroll=asset('storage/payrolls/payroll14785298L-2018-04-01-1.pdf');
        $contract->save();

    }
}
