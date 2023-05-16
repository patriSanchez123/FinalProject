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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('propertyType');
            $table->text('description')->nullable();
            $table->string('responsiblePhone');
            $table->set('state',['low','high'])->default('high')->nullable();
            $table->foreignId('consumer_id')->constrained('customers')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');

    }
};
