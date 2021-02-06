@extends('layouts.app')
@section('web-title', 'Обновление поставщика')

@section('content')
    <div class="container pt-4">
        <h2>Изменение постовщика (компании):&nbsp;{{ $data->name }}</h2>
        <form action="{{ route('watch-unit-update-submit', $data->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Наименование поставщика</label>
                <input id="name" class="form-control" type="text" name="name" placeholder="Введите наименование" value="{{ $data->name }}">
            </div>
            <div class="form-group">
                <label for="url">Строка подключения</label>
                <input id="url" class="form-control" type="url" name="url" placeholder="Введите строку подключения" value="{{ $data->url }}">
            </div>
            <div class="form-group">
                <label for="description">Описание поставшика</label>
                <textarea id="description" class="form-control" name="description" placeholder="Кратко опишите поставшика">{{ $data->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Изменить</button>
        </form>
        @include('includes.additional.message')
    </div>
@endsection