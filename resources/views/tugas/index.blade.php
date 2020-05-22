@extends('layouts.app', ['activePage' => 'tugas', 'titlePage' => __('Tugas')])

@section('content')
<div class="content">
  <div class="container-fluid">
  <p>
      <a href="{{ route('ctugas') }}" class="btn btn-primary"><i class="material-icons">add_circle_outline</i> Tambah Tugas</a>
    </p>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Daftar Tugas Siswa</h4>
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
                      <th>File</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>1.</td>
                      <td>Kimia</td>
                      <td>SMA</td>
                      <td>Struktur Atom</td>
                      <td>
                        <p>
                          <a href="#" class="btn btn-primary"><i class="material-icons">save_alt</i> Unduh Tugas</a>
                        </p>
                      </td>
                      <td><a href="#" class="btn btn-info">Edit</a> 
                        <a href="#" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Kimia</td>
                      <td>SMA</td>
                      <td>Bilangan Kuantum</td>
                      <td>
                        <p>
                        <a href="#" class="btn btn-primary"><i class="material-icons">save_alt</i> Unduh Tugas</a>
                        </p>
                      </td>
                      <td><a href="#" class="btn btn-info">Edit</a> 
                        <a href="#" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Biologi</td>
                      <td>SMA</td>
                      <td>Sel dan Jaringan</td>
                      <td>
                        <p>
                        <a href="#" class="btn btn-primary"><i class="material-icons">save_alt</i> Unduh Tugas</a>
                        </p>
                      </td>
                      <td><a href="#" class="btn btn-info">Edit</a> 
                        <a href="#" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Matematika</td>
                      <td>SMP</td>
                      <td>Pecahan</td>
                      <td>
                        <p>
                        <a href="#" class="btn btn-primary"><i class="material-icons">save_alt</i> Unduh Tugas</a>
                        </p>
                      </td>
                      <td><a href="#" class="btn btn-info">Edit</a> 
                        <a href="#" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Fisika</td>
                      <td>SMP</td>
                      <td>Hukum Newton</td>
                      <td>
                        <p>
                        <a href="#" class="btn btn-primary"><i class="material-icons">save_alt</i> Unduh Tugas</a>
                        </p>
                      </td>
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