<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_service extends Model
{
    use HasFactory;
    protected $table = 'employee_service';
    public $timestamps=false;
    protected $fillable=['employee_id','service_id'];
}
