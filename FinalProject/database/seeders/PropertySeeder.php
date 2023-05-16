<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $property= new Property();
        $property->address="AV Los gavilanes nº7";
        $property->propertyType="Edificio";
        $property->description="Edificio de nueve plantas, dos ascensores, portal y garaje";
        $property->responsiblePhone="654741258";
        $property->consumer_id=1;
        $property->save();

        $property= new Property();
        $property->address="C/Ortega y Gasset Nº50";
        $property->propertyType="Oficina";
        $property->description="La oficina esta dividida en tres despachos, recepción y cuarto de baño";
        $property->responsiblePhone="651321254";
        $property->consumer_id=1;
        $property->save();

        $property= new Property();
        $property->address="C/Cuna Nº80";
        $property->propertyType="Casa";
        $property->description="Casa con tres habitaciones, aseo, cuarto de baño, cocina, salón y lavadero";
        $property->responsiblePhone="789456123";
        $property->consumer_id=2;
        $property->save();

        $property= new Property();
        $property->address="C/Asunción";
        $property->propertyType="Edificio";
        $property->description="Edificio de catorce plantas, dos ascensores,patio,azotea";
        $property->responsiblePhone="693582147";
        $property->consumer_id=3;
        $property->save();

        $property= new Property();
        $property->address="C/ Manuel del valle";
        $property->propertyType="Edificio";
        $property->description="Edificio de cuatro plantas, un ascensor,patio,azotea";
        $property->responsiblePhone="693582147";
        $property->consumer_id=4;
        $property->save();

        $property= new Property();
        $property->address="Poligono la red";
        $property->propertyType="Nave";
        $property->description="La nave está compuesta con dos oficionas, cuatro cuartos de baño, aparcamientos, recibidor y una sala de justas";
        $property->responsiblePhone="654369877";
        $property->consumer_id=5;
        $property->save();

    }
}
