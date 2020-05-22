@extends('layouts.app', ['activePage' => 'nilai', 'titlePage' => __('Daftar Nilai')])

@section('content')
<div class="content">
  <div class="container-fluid">
  <p>
      <a href="{{ route('cnilai') }}" class="btn btn-primary"><i class="material-icons">add_circle_outline</i> Tambah Nilai</a>
    </p>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Daftar Nilai Siswa</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                <tr>
                <th style="width: 10px">No</th>
                <th>Nama</th>
                <th>Mata Pelajaran</th>
                <th>Jenjang</th>
                <th>Tugas</th>
                <th>Nilai</th>
                <th>Aksi</th>
                 </tr>
                </thead>
                <tbody>
                <tr>
                <td>1.</td>
                <td>Amalia</td>
                <td>Kimia</td>
                <td>SMA</td>
                <td>Struktur Atom</td>
                <td>95</td>
                <td><a href="#" class="btn btn-info">Edit</a> 
                    <a href="#" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Maylizza</td>
                <td>Bilogi</td>
                <td>SMA</td>
                <td>Ekosistem</td>
                <td>95</td>
                <td><a href="#" class="btn btn-info">Edit</a> 
                    <a href="#" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
              <tr>
                <td>3.</td>
                <td>Elza</td>
                <td>Fisikia</td>
                <td>SMA</td>
                <td>Hukum Newton</td>
                <td>95</td>
                <td><a href="#" class="btn btn-info">Edit</a> 
                    <a href="#" class="btn btn-danger">Hapus</a>
                </td>
              </tr> 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection