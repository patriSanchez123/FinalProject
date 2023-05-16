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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employeeName');
            $table->string('dni');
            $table->string('ss');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->set('state',['low','high'])->default('high')->nullable();
            $table->set('activeUser',['n','y'])->default('n')->nullable();
            $table->string('password')->nullable();
            $table->string('privileges');
            $table->foreignId('company_id')->default(1)->constrained('companies')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
