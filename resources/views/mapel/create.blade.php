@extends('layouts.app', ['activePage' => 'mapel', 'titlePage' => __('Daftar Mapel')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('cmapel') }}" autocomplete="off" class="form-horizontal">

            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Tambah') }}</h4>
                <p class="card-category">{{ __('Mata Pelajaran') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nama') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="mapel" id="input-mapel" type="text" placeholder="{{ __('Name Mata Pelajaran') }}"/>
                   </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Jenjang') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="harga" id="input-jenjang" type="text" placeholder="{{ __('Jenjang Sekolah') }}"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Harga') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="jenjang" id="input-harga" type="text" placeholder="{{ __('Harga Kursus') }}"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
@endsection