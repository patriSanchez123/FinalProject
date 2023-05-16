<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'materials';
    public $timestamps=false;
    protected $fillable=['materialName','materialtype_id','amount ','company_id'];

    public function orders(){

        return $this->belongsToMany(Order::class);
    }
}
