@extends('layouts.app')
@section('web-title', 'Компоненты обновления')

@section('content')
    <div class="container">
        <table class="table table-sm">
            <thead>
                <th>#</th>
                <th>Наименование</th>
                <th>Цвет</th>
                <th>Артикл</th>
                <th>Модель</th>
            </thead>
            <tbody>
                @foreach ($offers as $offer)
                    @if($offer->active == false) <tr class="table-row-color--false">
                    @else <tr class="table-row-color--true"> @endif
                    <td>{{ $offer->id }}</td>        
                    <td>{{ $offer->name }}</td>        
                    <td>{{ $offer->color }}</td>        
                    <td>{{ $offer->article }}</td>        
                    <td>{{ $offer->model }}</td>
                    <td>
                        <span><i id="image-button" class="far fa-images image-button" title="{{ $offer->picture}}"></i></span>
                    </td>  
                    </tr>      
                @endforeach
            </tbody>
        </table>
        {{ $offers->links() }}
    </div>
    <button id='imag-modal-window' type="button" class="btn d-none" data-toggle="modal" data-target="#modal-conect-image">Тест</button>
@endsection


<div class="modal fade" id="modal-conect-image" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Изображение товара</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{-- <img id="mirror-imag-offer" class="offer-image" src=""> --}}
          <a id="mirror-image-link-offer" href="" class="mysuperimg" data-caption="Заголовок"><img id="mirror-imag-offer" class="offer-image" src=""/></a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
</div>