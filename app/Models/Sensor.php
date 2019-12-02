<?php

namespace App;

use App\Models\SensorData;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{ 
    public function sensorsData(){
        return $this->hasMany('App\Models\SensorData');
    }
}
