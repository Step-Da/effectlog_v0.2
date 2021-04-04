@extends('layouts.app')

@section('web-title', 'Поставщик: '.$data->name)
@section('all-count-log', $statistics['all'])
@section('successful-count-log', $statistics['success'])
@section('unsuccessful-count-log', $statistics['error'])
    
@section('content')
    @include('includes.additional.heading')
    @include('includes.additional.chart')      
@endsection