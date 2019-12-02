@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div id='app'>
            <example-component></example-component>
        
        </div>
    </div><!--row-->
@endsection
