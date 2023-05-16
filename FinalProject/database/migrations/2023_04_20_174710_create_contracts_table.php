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
        Schema::create('contracts', function (Blueprint $table) {
        /**
         * Laravel no me permite poner un id incrementable y idEmployee ambas como claves primarias por eso utilizo la ruta
         * del contrato y el idEmployee que de esta manera me las deja poner como primarias
         */
            $table->id();
            $table->date('date');
            $table->text('contract');
            $table->foreignId('employee_id')->constrained('employees')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
