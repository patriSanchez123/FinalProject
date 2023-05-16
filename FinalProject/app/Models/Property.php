<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table='properties';
    public $timestamps=false;
    protected $fillable=['consumer_id','address','propertyType','description','responsiblePhone'];
}
