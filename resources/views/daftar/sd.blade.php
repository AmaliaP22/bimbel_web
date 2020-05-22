@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('Sekolah Dasar')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Mata Pelajaran Sekolah Dasar</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                <tr>
                    <th>No</th>
                    <th>Pelajaran</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                      <td>1.</td>
                      <td>Matematika</td>
                      <td>Belajar matematika lebih menyenagkan dengan materi yang mudah dipahami</td>
                      <td>85000/bln</td>
                      <td><ion-icon name="cart-outline"></ion-icon><a href="#" class="btn btn-info">Daftar</a></td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>Bahasa Indonesia</td>
                      <td>Belajar lebih mudah dengan materi yang mudah dipahami</td>
                      <td>80000/bln</td>
                      <td><ion-icon name="cart-outline"></ion-icon><a href="#" class="btn btn-info">Daftar</a></td>
                  </tr>
                  <tr>
                      <td>3.</td>
                      <td>Bahasa Inggris</td>
                      <td>Belajaran Bahasa ingrris lebih menyenagkan dengan materi yang mudah dipahami</td>
                      <td>90000/bln</td>
                      <td><ion-icon name="cart-outline"></ion-icon><a href="#" class="btn btn-info">Daftar</a></td>
                  </tr>
                  <tr>
                      <td>4.</td>
                      <td>Seni dan Budaya</td>
                      <td>Belajaran seni dan budaya lebih menyenagkan dengan materi yang mudah dipahami</td>
                      <td>70000/bln</td>
                      <td><ion-icon name="cart-outline"></ion-icon><a href="#" class="btn btn-info">Daftar</a></td>
                  </tr>
                  <tr>
                      <td>5.</td>
                      <td>Ilmu Pengetahuan sosial</td>
                      <td>Belajaran ilmu pengetahuan lebih menyenagkan dengan materi yang mudah dipahami</td>
                      <td>80000/bln</td>
                      <td><ion-icon name="cart-outline"></ion-icon><a href="#" class="btn btn-info">Daftar</a></td>
                  </tr>
                  <tr>
                      <td>6.</td>
                      <td>Ilmu Pengetahuan Alam</td>
                      <td>Belajaran ilmu pengetahuan alam lebih menyenagkan dengan materi yang mudah dipahami</td>
                      <td>85000/bln</td>
                      <td><ion-icon name="cart-outline"></ion-icon><a href="#" class="btn btn-info">Daftar</a></td>
                  </tr>
                  <tr>
                      <td>7.</td>
                      <td>Kerampilan</td>
                      <td>Belajaran keterampilan lebih menyenagkan dengan materi yang mudah dipahami</td>
                      <td>70000/bln</td>
                      <td><ion-icon name="cart-outline"></ion-icon><a href="#" class="btn btn-info">Daftar</a></td>
                  </tr>
                  <tr>
                      <td>8.</td>
                      <td>Ilmu Teknologi Informasi</td>
                      <td>Belajaran teknologi lebih menyenagkan dengan materi yang mudah dipahami</td>
                      <td>80000/bln</td>
                      <td><ion-icon name="cart-outline"></ion-icon><a href="#" class="btn btn-info">Daftar</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     </div>
</div>
@endsection