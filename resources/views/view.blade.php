@extends('layouts.app')
@section('web-title', 'Поставщик: '.$data->name)

@section('content')
    @include('includes.additional.heading')
    @include('includes.additional.chart')
    {{-- @include('includes.additional.table') --}}
@endsection