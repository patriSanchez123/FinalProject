<?php

namespace Database\Seeders;

use App\Models\Contract;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contract = new Contract();
        $contract->employee_id="1";
        $contract->date='2019-06-19';
        $contract->contract=asset('storage/contracts/contract35411236J-2019-06-19-1.pdf ');
        $contract->save();

        $contract = new Contract();
        $contract->employee_id="2";
        $contract->date='2020-07-20';
        $contract->contract=asset('storage/contracts/contract45789632Y-2020-07-20-1.pdf');
        $contract->save();

        $contract = new Contract();
        $contract->employee_id="3";
        $contract->date='2023-01-14';
        $contract->contract=asset('storage/contracts/contract78965412K-2023-01-14-1.pdf');
        $contract->save();

        $contract = new Contract();
        $contract->employee_id="4";
        $contract->date='2022-12-12';
        $contract->contract=asset('storage/contracts/contract45678912L-2022-12-12-1.pdf');
        $contract->save();

        $contract = new Contract();
        $contract->employee_id="5";
        $contract->date='2018-04-01-1';
        $contract->contract=asset('storage/contracts/contract14785298L-2018-04-01-1.pdf');
        $contract->save();

    }
}
