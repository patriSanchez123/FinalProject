<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$customer->antiquity ='2019-06-19';
        $order = new Order();
        $order->dateOrder = '2023-05-01';
        $order->employee_id = 1;
        $order->service_id = 1;
        $order->save();

        $order = new Order();
        $order->dateOrder = '2023-05-05';
        $order->employee_id = 4;
        $order->service_id = 2;
        $order->save();

        $order = new Order();
        $order->dateOrder = '2023-05-06';
        $order->employee_id = 2;
        $order->service_id = 3;
        $order->save();

        $order = new Order();
        $order->dateOrder = '2023-05-01';
        $order->employee_id = 2;
        $order->service_id = 5;
        $order->save();

        $order = new Order();
        $order->dateOrder = '2023-05-10';
        $order->employee_id = 3;
        $order->service_id = 6;
        $order->save();

        $order = new Order();
        $order->dateOrder = '2023-05-02';
        $order->employee_id = 3;
        $order->service_id = 4;
        $order->save();
    }
}
