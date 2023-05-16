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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('dni');
            $table->string('address')->nullable();
            $table->string('phone');
            $table->date('antiquity');
            $table->string('customerName');
            $table->string('email')->nullable();
            $table->set('activeUser',['n','y'])->default('n')->nullable();
            $table->string('password')->nullable();
            $table->string('privileges');
            $table->foreignId('company_id')->constrained('companies')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
