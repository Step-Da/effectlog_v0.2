@extends('layouts.app')
@section('web-title', 'Компоненты обновления')

@section('content')
    <table class="table table-sm">
        <thead>
            <th>Наименование</th>
            <th>Артикул</th>
            <th>Код</th>
            <th>Статус</th>
        </thead>
        <tbody>
            @foreach ($_SESSION['list'] as $item)
                @if ($item[0] == 10) <tr class="table-row-color--false">    
                @else  <tr class="table-row-color--true"> @endif
                <td>{{ $item[1] }}</td>
                <td>{{ $item[2] }}</td>
                <td>{{ $item[3] }}</td>
                <td>{{ $item[0] }}</td>
                </tr> 
            @endforeach 
        </tbody>
    </table>
@endsection