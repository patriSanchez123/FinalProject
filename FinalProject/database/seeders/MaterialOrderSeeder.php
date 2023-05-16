<?php

namespace Database\Seeders;

use App\Models\Material_order;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //order1
        $materialOrder = new Material_order();
        $materialOrder->material_id = 1;
        $materialOrder->order_id = 1;
        $materialOrder->amount = 2;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 3;
        $materialOrder->order_id = 1;
        $materialOrder->amount = 2;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 7;
        $materialOrder->order_id = 1;
        $materialOrder->amount = 1;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 10;
        $materialOrder->order_id = 1;
        $materialOrder->amount = 1;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 12;
        $materialOrder->order_id = 1;
        $materialOrder->amount = 1;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 19;
        $materialOrder->order_id = 1;
        $materialOrder->amount = 1;
        $materialOrder->save();

        //order2
        $materialOrder = new Material_order();
        $materialOrder->material_id = 2;
        $materialOrder->order_id = 2;
        $materialOrder->amount = 1;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 4;
        $materialOrder->order_id = 2;
        $materialOrder->amount = 2;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 7;
        $materialOrder->order_id = 2;
        $materialOrder->amount = 1;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 11;
        $materialOrder->order_id = 2;
        $materialOrder->amount = 1;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 13;
        $materialOrder->order_id = 2;
        $materialOrder->amount = 1;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 20;
        $materialOrder->order_id = 2;
        $materialOrder->amount = 1;
        $materialOrder->save();

        //order3

        $materialOrder = new Material_order();
        $materialOrder->material_id = 5;
        $materialOrder->order_id = 3;
        $materialOrder->amount = 1;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 3;
        $materialOrder->order_id = 2;
        $materialOrder->amount = 1;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 11;
        $materialOrder->order_id = 3;
        $materialOrder->amount = 1;
        $materialOrder->save();
        //order4

        $materialOrder = new Material_order();
        $materialOrder->material_id = 5;
        $materialOrder->order_id = 4;
        $materialOrder->amount = 2;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 3;
        $materialOrder->order_id = 4;
        $materialOrder->amount = 1;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 11;
        $materialOrder->order_id = 4;
        $materialOrder->amount = 1;
        $materialOrder->save();
        //order5

        $materialOrder = new Material_order();
        $materialOrder->material_id = 3;
        $materialOrder->order_id = 5;
        $materialOrder->amount = 2;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 4;
        $materialOrder->order_id = 5;
        $materialOrder->amount = 1;
        $materialOrder->save();

        $materialOrder = new Material_order();
        $materialOrder->material_id = 1;
        $materialOrder->order_id = 5;
        $materialOrder->amount = 1;
        $materialOrder->save();

         //order6

         $materialOrder = new Material_order();
         $materialOrder->material_id = 10;
         $materialOrder->order_id = 6;
         $materialOrder->amount = 2;
         $materialOrder->save();

         $materialOrder = new Material_order();
         $materialOrder->material_id = 14;
         $materialOrder->order_id = 6;
         $materialOrder->amount = 1;
         $materialOrder->save();

         $materialOrder = new Material_order();
         $materialOrder->material_id = 13;
         $materialOrder->order_id = 6;
         $materialOrder->amount = 1;
         $materialOrder->save();

         $materialOrder = new Material_order();
         $materialOrder->material_id = 3;
         $materialOrder->order_id = 6;
         $materialOrder->amount = 2;
         $materialOrder->save();

         $materialOrder = new Material_order();
         $materialOrder->material_id = 1;
         $materialOrder->order_id = 6;
         $materialOrder->amount = 2;
         $materialOrder->save();
    }
}
