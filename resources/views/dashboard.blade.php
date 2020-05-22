@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
             <div class="card-icon">
                <h3 class="card-title">10+</h>
              </div>
              <p class="card-category">Kursus tersedia</p>
              <h2 class="card-title">SD</h2>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i>
                <a href="{{ route('list_sd') }}"> Daftar Sekarang...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
                <h3 class="card-title">15+</h3>
              </div>
              <p class="card-category">Kursus tersedia</p>
              <h2 class="card-title">SMP</h2>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i>
                <a href="{{ route('list_smp') }}"> Daftar Sekarang...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
            <div class="card-icon">
                <h3 class="card-title">20+</h3>
              </div>
              <p class="card-category">Kursus tersedia</p>
              <h2 class="card-title">SMA</h2>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i>
                <a href="{{ route('list_sma') }}"> Daftar Sekarang...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
                <h3 class="card-title">20+</h3>
              </div>
              <p class="card-category">Kursus tersedia</p>
              <h2 class="card-title">SMK</h2>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i>
                <a href="{{ route('list_smk') }}"> Daftar Sekarang...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush