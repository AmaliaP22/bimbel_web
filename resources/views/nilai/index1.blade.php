@extends('layouts.app', ['activePage' => 'nilai', 'titlePage' => __('Daftar Nilai')])

@section('content')
<div class="content">
  <div class="container-fluid">
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
                <th>Mata Pelajaran</th>
                <th>Jenjang</th>
                <th>Tugas</th>
                <th>Nilai</th>
                 </tr>
                </thead>
                <tbody>
                <tr>
                <td>1.</td>
                <td>Kimia</td>
                <td>SMA</td>
                <td>Struktur Atom</td>
                <td>95</td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Bilogi</td>
                <td>SMA</td>
                <td>Ekosistem</td>
                <td>95</td>
              </tr>
              <tr>
                <td>3.</td>
                <td>Fisikia</td>
                <td>SMA</td>
                <td>Hukum Newton</td>
                <td>95</td>
              </tr> 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection