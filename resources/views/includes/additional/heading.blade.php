{{-- Заголовок --}}
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 id="nameUnit" class="h2">{{ $data->name }}</h1>
    <div class="ff">
      <div class="counters-color counters-color--all">
        <span>Всего элементов:</span>
        <span class="counter">156</span>
      </div>
      <div class="counters-color counters-color--successful">
        <span>Успешные:</span>
        <span class="counter">156</span>
      </div>
      <div class="counters-color counters-color--unsuccessful">
        <span>Проваленные:</span>
        <span class="counter">156</span>
      </div>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <button type="button" class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#modal-description">Описание</button>
        <button type="button" class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#modal-conect-url">Подключение</button>
      </div>
    </div>
</div>

{{-- Модальное окно для описания поставщика --}}
<div class="modal fade" id="modal-description" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Описание поставщика:&nbsp;{{ $data->name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>{{ $data->description }}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
</div>

{{-- Модальное окно для опискания строки подключения --}}
<div class="modal fade" id="modal-conect-url" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Подключение&nbsp;{{ $data->name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>{{ $data->url }}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
</div>