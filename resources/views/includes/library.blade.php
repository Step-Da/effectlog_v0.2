<div class="container">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 id="nameUnit" class="h2">Поставщики с инфлрмацией типа: JSON</h1>
  </div>
  <div class="row">
    @foreach ($data as $element)
    @if ($element->type == 'json')
      <div class="search">
        <div class="col">
          <a class="submit-card" href="{{ route('view-unit', $element->id) }}">
            <div class="library-card card-view">
              <h3 class="searchName">{{ $element->name }}</h3>
              <p>{{ $element->description }}</p>
              <small>{{ $element->created_at }}</small>
            </div>
          </a>
        </div>
      </div>
    @endif
    @endforeach
  </div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 id="nameUnit" class="h2">Поставщики с инфлрмацией типа: XML</h1>
  </div>
  <div class="row">
    @foreach ($data as $element)
    @if ($element->type == 'xml')
      <div class="search">
        <div class="col">
          <a class="submit-card" href="{{ route('view-unit', $element->id) }}">
            <div class="library-card card-view">
              <h3 class="searchName">{{ $element->name }}</h3>
              <p>{{ $element->description }}</p>
              <small>{{ $element->created_at }}</small>
            </div>
          </a>
        </div>
      </div>
    @endif
    @endforeach
  </div>
</div>