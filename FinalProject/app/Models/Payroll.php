<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;
    protected $table='payrolls';
    public $timestamps=false;
    protected $fillable=['date','payroll','employee_id'];
}
