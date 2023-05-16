<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
$company= new Company();
$company->cif = "123456789";
$company->companyName = "Servisur";
$company->phone = "654123789";
$company->email = "servisur@gmail.com";
$company->address ='Av de las ciencias Nº24 41016';
$company->save();
    }
}
