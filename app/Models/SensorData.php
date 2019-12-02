<?php

namespace App;

use App\Models\Sensor;
use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    public function sensors(){
        return $this->belongsToMany('App\Models\Sensor');
    }
}
