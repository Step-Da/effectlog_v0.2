<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="sidebar-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <div class="line-item-sidebar">
          <a class="nav-link" href="{{ route('homePage') }}">
            <span><i class="fas fa-users sidebar-icon"></i></span>
            Поставщики<span>
          </a>
          <span onclick="location.href='{{ route('watch-unit') }}';" ><i class="fas fa-plus-square sidebar-icon--additional-icon"></i></span>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span><i class="far fa-folder-open sidebar-icon"></i></span>
          Отчеты
        </a>
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
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Быстрый доступ к отчётам</span>
      <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
        <span data-feather="plus-circle"></span>
      </a>
    </h6>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span><i class="fas fa-file-signature sidebar-icon"></i></span>
          Первый отчёт
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span><i class="fas fa-file-signature sidebar-icon"></i></span>
          Второй отчёт
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span><i class="fas fa-file-signature sidebar-icon"></i></span>
          Третий отчёт
        </a>
      </li>
    </ul>
  </div>
</nav>