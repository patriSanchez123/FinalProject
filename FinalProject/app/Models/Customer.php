<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table="customers";
    protected $fillable=['dni,address','phone','email','antiquity','customerName','state','activeUser','password','responsiblePhone'];

}
