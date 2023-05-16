<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='employees';
    protected $fillable=['employeeName','dni','ss','phone','email','state','activeUser','password','privileges','company_id'];

        /**
     * Function to relate to the many-to-many  pivot table
     */
    public function services(){

        return $this->belongsToMany(Service::class);
    }


}
//contract
