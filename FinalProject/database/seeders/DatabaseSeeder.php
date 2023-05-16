<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CompanySeeder::class);
        $this->call(MaterialTypeSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(PropertySeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(ContractSeeder::class);
        $this->call(PayrollSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(EmployeeServiceSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(MaterialOrderSeeder::class);
        $this->call(UserSeeder::class);
    }
}
