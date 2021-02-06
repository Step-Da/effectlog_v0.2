@foreach ($data as $element)
<div class="search">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <a class="submit-card" href="{{ route('view-unit', $element->id) }}">
          <div class="library-card card-view">
            <h3 class="searchName">{{ $element->name }}</h3>
            <p>{{ $element->description }}</p>
            <small>{{ $element->created_at }}</small> 
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
@endforeach