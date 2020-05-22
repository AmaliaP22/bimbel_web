@extends('layouts.app', ['activePage' => 'nilai', 'titlePage' => __('Daftar Nilai')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('ctugas') }}" autocomplete="off" class="form-horizontal">

            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Tambah') }}</h4>
                <p class="card-category">{{ __('Nilai Siswa') }}</p>
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
                    <div class="form-group">
                      <input class="form-control" name="siswa" id="input-siwa" type="text" placeholder="{{ __('Name Siswa') }}"/>
                   </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Mata Pelajaran') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="mapel" id="input-mapel" type="text" placeholder="{{ __('Name Mata Pelajaran') }}"/>
                   </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Jenjang') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="jenjang" id="input-jenjang" type="text" placeholder="{{ __('Jenjang Sekolah') }}"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Tugas') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="tugas" id="input-tugas" type="text" placeholder="{{ __('Masukan Judul Tugas') }}"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nilai') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="nilai" id="input-nilai" type="text" placeholder="{{ __('Masukan Nilai') }}"/>
                    </div>
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