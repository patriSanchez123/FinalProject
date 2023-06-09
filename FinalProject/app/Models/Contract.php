<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $table="contracts";

    protected $fillable=['employee_id','contract','date'];
}
