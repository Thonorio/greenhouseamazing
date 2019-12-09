<?php

namespace App;

use App\Models\SensorData;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{ 
    protected $fillable = [
        'name', 'updated_at'
    ]; 

   public function sensorsData(){
        return $this->hasMany('App\SensorData');
    }
}
