@extends('layouts.app')
@section('web-title', 'Формирвоание нового поставщика')

@section('content')
    <div class="container pt-4">
        <h2>Формирование новго постовщика (компании)</h2>
        <form action="{{ route('watch-unit-submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Наименование поставщика</label>
                <input id="name" class="form-control" type="text" name="name" placeholder="Введите наименование">
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="url">Строка подключения</label>
                    <input id="url" class="form-control" type="url" name="url" placeholder="Введите строку подключения">
                </div>
                <div class="col">
                    <label for="url">Тип данных</label>
                    <input id="type" class="form-control" type="text" name="type" placeholder="Тип данных">
                </div>
            </div>
            <div class="form-group">
                <label for="description">Описание поставшика</label>
                <textarea id="description" class="form-control" name="description" placeholder="Кратко опишите поставшика"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Сформировать</button>
        </form>
        @include('includes.additional.message')
    </div>
@endsection