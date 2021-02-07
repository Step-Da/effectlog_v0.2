@include('includes.additional.message')
<div class="curl-container">
    <h2 class="curl-h2">Панель управления поставщиками&nbsp;<small>(Кол-во:{{ count($data) }})</small></h2>
    <ul class="responsive-table">
      <li class="table-header">
        <div class="col col-1">#</div>
        <div class="col col-2">Наименование</div>
        <div class="col col-3">Электронная почта</div>
        <div class="col col-4">Дата регистрации</div>
        <div class="col col-5"></div>
      </li>
      @foreach ($data as $item)
        <li class="table-row">
          <div class="col col-1" data-label="#">{{ $item->id }}</div>
          <div class="col col-2" data-label="Наименование">{{ $item->name }}</div>
          <div class="col col-3" data-label="Электронная почта">{{ $item->email }}</div>
          <div class="col col-4" data-label="Дата регистрации">{{ $item->created_at }}</div>
          <div class="col col-5" data-label="">
            <div class="crud-button">
                <i class="far fa-trash-alt crud-button--item crud-button--delete" onclick="location.href='{{ route('user-watch-delete', $item->id) }}';"></i>
            </div>
          </div>
        </li>
      @endforeach
    </ul>
</div>