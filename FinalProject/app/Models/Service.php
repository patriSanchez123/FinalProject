<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    public $timestamps=false;
    protected $fillable=['property_id','numWorkers','serviceType ','price','description'];

    public function employees(){

        return $this->belongsToMany(Employee::class);
    }
}
