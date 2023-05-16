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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->text('payroll');
            $table->foreignId('employee_id')->constrained('employees')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    //<a target="_blank" href="{{asset('files/nombreDeTuPdf.pdf')}}">PDF</a>

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
