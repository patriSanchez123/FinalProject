<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $material = new Material();
        $material->materialName = "Lejía estrella azul";
        $material->materialtype_id = 1;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Lejía estrella amarilla";
        $material->materialtype_id = "1";
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Fregasuelos floral";
        $material->materialtype_id = "2";
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Fregasuelos pino";
        $material->materialtype_id = 2;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Fregasuelos amoniacal";
        $material->materialtype_id = 2;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Amoniaco perfumado";
        $material->materialtype_id = 3;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Rollo papel";
        $material->materialtype_id = 4;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Cubos 30 litros";
        $material->materialtype_id = 5;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Exprimidor básico";
        $material->materialtype_id = 6;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Palo fregona alumino";
        $material->materialtype_id = 7;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Palo fregona hierro";
        $material->materialtype_id = 7;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Recambio de fregona microfibra";
        $material->materialtype_id = 7;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Recambio de fregona blanca";
        $material->materialtype_id = 7;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Estropajo aluminio";
        $material->materialtype_id = 8;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Estropajo verde";
        $material->materialtype_id = 8;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Jabón verde";
        $material->materialtype_id = 9;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Jabón de manos";
        $material->materialtype_id = 9;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Quitagrasas industrial";
        $material->materialtype_id = 10;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Bayeta microfibra";
        $material->materialtype_id = 11;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Bayeta amarilla";
        $material->materialtype_id = 11;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Gasas mopa pequeña";
        $material->materialtype_id = 12;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Gasas mopa Grande";
        $material->materialtype_id = 12;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();


        $material = new Material();
        $material->materialName = "Spray para mopas";
        $material->materialtype_id = 13;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Mopa";
        $material->materialtype_id = 14;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Limpia acero";
        $material->materialtype_id = 15;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();

        $material = new Material();
        $material->materialName = "Plumero chico";
        $material->materialtype_id = 16;
        $material->amount = 10;
        $material->company_id = 1;
        $material->save();
    }
}
