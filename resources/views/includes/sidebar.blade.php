<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="sidebar-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <div class="line-item-sidebar">
          <a class="nav-link" href="{{ route('homePage') }}">
            <span><i class="fas fa-users sidebar-icon"></i>
            </span>Поставщики<span>
          </a>
          <span onclick="location.href='{{ route('watch-unit') }}';" ><i class="fas fa-plus-square sidebar-icon--additional-icon"></i></span>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user-watch') }}">
          <span><i class="fas fa-street-view sidebar-icon"></i></span>
          Пользователи
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('about-info') }}">
          <span><i class="far fa-question-circle sidebar-icon"></i></span>
          О программе
        </a>
      </li>
    </ul>
  </div>
</nav>