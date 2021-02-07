<div class="container">
  <div class="row">
    @foreach ($data as $element)
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
    @endforeach
  </div>
</div>