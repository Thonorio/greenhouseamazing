<?php

namespace App\Http\Controllers;

use App\SensorsSensorData; 
use Illuminate\Http\Request;

use App\Http\Resources\SensorsSensorDataResources;

class SensorsSensorDataController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\SensorsSensorData  $sensorsSensorData
     * @return \Illuminate\Http\Response
     */
    public function show(SensorsSensorData $sensorsSensorData)
    {
        $sensorsSensorData = SensorsSensorData::All() ;
        return SensorsSensorDataResources::collection($sensorsSensorData);
    }
}
