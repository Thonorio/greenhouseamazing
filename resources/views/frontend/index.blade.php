@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div>
        <v-app>
            <frontpage-carousel></frontpage-carousel>
            <frontpage-loader></frontpage-loader>
            <frontpage-info></frontpage-info>
        </v-app>
    </div>
@endsection
