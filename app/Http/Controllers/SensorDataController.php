<?php

namespace App\Http\Controllers;

use App\SensorData; 
use Illuminate\Http\Request;

use App\Http\Resources\SensorDataResources;

class SensorDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sensor = Sensor::paginate(5) ;
        return SensorResources::collection($sensor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SensorData  $sensorData
     * @return \Illuminate\Http\Response
     */
    public function show(SensorData $sensorData)
    {
        $sensorData = SensorData::All() ;
        return SensorDataResources::collection($sensorData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SensorData  $sensorData
     * @return \Illuminate\Http\Response
     */
    public function edit(SensorData $sensorData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SensorData  $sensorData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SensorData $sensorData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SensorData  $sensorData
     * @return \Illuminate\Http\Response
     */
    public function destroy(SensorData $sensorData)
    {
        //
    }

    public function storeData(Request $data)
    {
        $aux = new SensorData;

        $aux->store($data);
    }
}
