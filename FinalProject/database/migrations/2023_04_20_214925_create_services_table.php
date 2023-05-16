<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('numberWorkers');
            $table->string('serviceType');
            $table->float('price');
            $table->text('description')->nullable();
            $table->set('state',['low','high'])->default('high')->nullable();
            $table->foreignId('property_id')->constrained('properties')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');


    }
};
