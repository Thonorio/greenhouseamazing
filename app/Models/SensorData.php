<?php

namespace App;

use App\Sensor;
use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    public function store($data){

        $sensorData = new SensorData;

        $sensorData->value = $data->value;

        $sensorData->save();
        
        $sensorData->sensors()->save($sensorData);
    }

    public function sensors(){
        return $this->belongsToMany('App\Sensor');
    }
}
