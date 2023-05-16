<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $property = new Service();
        $property->property_id=1;
        $property->numberWorkers=1;
        $property->price=200;
        $property->serviceType="Servicio de limpieza diario";
        $property->description="Servicio de limpieza  del edificio de lunes a viernes.Lunes y jueves limpieza de edicio entero. Martes,miercoles y viernes limpieza del portal. Desempolvado,limpieza de suelos...";
        $property->save();

        $property = new Service();
        $property->property_id=1;
        $property->numberWorkers=1;
        $property->price=50;
        $property->serviceType="Limpieza de cristales";
        $property->description = "Limpieza mensual de ventanas y cristales del portal";
        $property->save();

        $property = new Service();
        $property->property_id=2;
        $property->numberWorkers=1;
        $property->price=150;
        $property->serviceType="Servicio de limpiza semanal";
        $property->description = "Servicio de limpieza oficina, desempolvado limpiza de cristales,cambio de bolsa de papelera, limpieza de cuarto de baño";
        $property->save();

        $property = new Service();
        $property->property_id=3;
        $property->numberWorkers=1;
        $property->price=250;
        $property->serviceType="Servicio de limpieza de hogar";
        $property->description = "Limpieza dos veces en semana de toda la casa, incluye limpieza de alto una vez en semana de todos  los espacios de casa, ventanas,poyetes de las ventanas, retirada de moviliario";
        $property->save();

        $property = new Service();
        $property->property_id=4;
        $property->numberWorkers=2;
        $property->price=350;
        $property->serviceType="Servicio limpieza diario";
        $property->description = "Servicio de limpieza  del edificio de lunes a viernes.Lunes y jueves limpieza de edicio entero. Martes,miercoles y viernes limpieza del portal. Desempolvado,limpieza de suelos,Incluye en el servicio limpiza de azotea mensual y limpieza de ventanas mensual";
        $property->save();

        $property = new Service();
        $property->property_id=5;
        $property->numberWorkers=2;
        $property->price=350;
        $property->serviceType="Servicio de limpieza dos veces en semana";
        $property->description = "Servicio de limpieza  del edificio de lunes y juves.. Desempolvado,limpieza de suelos,Incluye en el servicio limpiza de azotea mensual y limpieza de ventanas mensual";
        $property->save();

        $property = new Service();
        $property->property_id=6;
        $property->numberWorkers=1;
        $property->price=350;
        $property->serviceType="Servicio de limpieza diario";
        $property->description = "Servicio de limpiza de lunes a viernes, limpieza de oficinas, limpieza de cuartos de baños, exteriores de la nave";
        $property->save();

    }
}
