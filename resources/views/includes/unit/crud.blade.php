@include('includes.additional.message')
<div class="curl-container">
    <h2 class="curl-h2">Панель управления поставщиками&nbsp;<small>(Кол-во:{{ count($data) }})</small></h2>
    <ul class="responsive-table">
      <li class="table-header">
        <div class="col col-1">#</div>
        <div class="col col-2">Наименование</div>
        <div class="col col-3">Дата регистрации</div>
        <div class="col col-4">
            <i onclick="location.href='{{ route('watch-unit-add') }}';" class="fas fa-plus-circle crud-button--item"></i>
        </div>
      </li>
      @foreach ($data as $item)
        <li class="table-row">
          <div class="col col-1" data-label="#">{{ $item->id }}</div>
          <div class="col col-2" data-label="Наименование">{{ $item->name }}</div>
          <div class="col col-3" data-label="Дата регистрации">{{ $item->created_at }}</div>
          <div class="col col-4" data-label="">
            <div class="crud-button">
                <i class="fas fa-pencil-alt crud-button--item crud-button--change" onclick="location.href='{{ route('watch-unit-update', $item->id) }}';"></i>
                <i class="far fa-trash-alt crud-button--item crud-button--delete" onclick="location.href='{{ route('watch-unit-delete', $item->id) }}';"></i>
            </div>
          </div>
        </li>
      @endforeach
    </ul>
</div>