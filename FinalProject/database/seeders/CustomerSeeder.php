<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer= new Customer();
        $customer ->dni= '14725836Y';
        $customer->customerName= "Alejandro Jimenénez Rodrígez";
        $customer->address ='C/Orquidea Nº16 40016 Sevilla';
        $customer->phone='654789123';
        $customer->antiquity ='2021-12-13';
        $customer->email= 'alejandrojr@gmail.com';
        $customer->company_id=1;
        $customer->activeUser="y";
        $customer->privileges='customer';
        $customer->save();

        $customer= new Customer();
        $customer ->dni= '35698745J';
        $customer->customerName= "África González Pérez";
        $customer->address ='C/Binefar Nº30 40006 Sevilla';
        $customer->phone='678945124';
        $customer->antiquity ='2022-01-20';
        $customer->email= 'africags@gmail.com';
        $customer->company_id=1;
        $customer->privileges='customer';
        $customer->save();

        $customer= new Customer();
        $customer ->dni= '17895645N';
        $customer->customerName= "Estefanía Serrano Martínez";
        $customer->address ='C/Afán de rivera Nº7 40006 Sevilla';
        $customer->phone='632145782';
        $customer->antiquity ='2019-06-19';
        $customer->email= 'estefaniasm@gmail.com';
        $customer->company_id=1;
        $customer->privileges='customer';
        $customer->save();

        $customer= new Customer();
        $customer ->dni= '25478963N';
        $customer->customerName= "Rafaela Prat Rivera";
        $customer->address ='Av de las ciencias 41016 Sevilla';
        $customer->phone='621354789';
        $customer->antiquity ='2019-06-19';
        $customer->email= 'rafaelapr@gmail.com';
        $customer->company_id=1;
        $customer->privileges='customer';
        $customer->save();

        $customer= new Customer();
        $customer ->dni= '30025478Y';
        $customer->customerName= "Carlos García Sánchez";
        $customer->address ='Av la raza Nº1 41004 Sevilla';
        $customer->phone='621354789';
        $customer->antiquity ='2019-06-19';
        $customer->email= 'carlorgs@gmail.com';
        $customer->company_id=1;
        $customer->privileges='customer';
        $customer->save();


    }
}
