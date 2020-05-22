<div class="sidebar" data-color="azure" data-background-color="white" data-image="{{ asset('material') }}/img/a.jpg">
  <div class="logo">
  <a>
      <img src="{{ asset('material') }}/img/Logo.png" height="80px" width="230px" class="brand-image">
  </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'mapel' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('mapel') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Kursus') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'tugas' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('tugas') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Tugas') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'nilai' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('nilai') }}">
          <i class="material-icons">school</i>
            <p>{{ __('Nilai') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'bayar' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">attach_money</i>
            <p>{{ __('Data Pembayaran') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'laporan' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">description</i>
            <p>{{ __('Laporan') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('user.index') }}"><i class="material-icons">settings</i>
          <p> {{ __('User Management') }} </p>
        </a>
      </li>
    </ul>
  </div>
</div>