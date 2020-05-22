@extends('layouts.app', ['activePage' => 'tugas', 'titlePage' => __('Daftar Tugas')])

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
                  <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file_tugas">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
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