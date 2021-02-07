<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand brand-text col-md-3 col-lg-2 mr-0 px-3" href="{{ route('homePage') }}">Effect 24 Logistics</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  @if (Request::is('/'))
    <input id="filter" class="form-control form-control-dark w-100" type="text" placeholder="Поиск" aria-label="Search">
  @endif
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      @guest
        <a class="nav-link" href="{{ route('authorization') }}">Войти в систему</a>
      @else
        <a class="nav-link" href="{{ route('logout') }}" role="button" 
          onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">Выход&nbsp;({{ Auth::user()->name }})</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="exit-profile">
          @csrf
        </form>
      @endguest
    </li>
  </ul>
</nav>