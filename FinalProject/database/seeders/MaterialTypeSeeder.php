<?php

namespace Database\Seeders;

use App\Models\MaterialType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $table = new MaterialType();
        $table->typeName = "Lejías";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Fregasuelos";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Amoniacos";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Papeles";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Cubos";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Exprimidores";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Palos";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Fregonas";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Estropajos";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Jabones";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Plumeros";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Quitagrasas";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Bayetas";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Gasas";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Mopas";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Limpiadores materiales";
        $table->save();

        $table = new MaterialType();
        $table->typeName = "Plumeros";
        $table->save();

    }
}
