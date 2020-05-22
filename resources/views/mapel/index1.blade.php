@extends('layouts.app', ['activePage' => 'mapel', 'titlePage' => __('Mapel')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Daftar Mata Pelajaran</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                <tr>
                <tr>
                    <th>ID</th>
                    <th>Pelajaran</th>
                    <th>Jenjang</th>
                    <th>Aksi</th>
                    </tr>
                </tr>
                </thead>
                <tbody>
                <tr>
                      <td>1.</td>
                      <td>Matematika</td>
                      <td>Belajar matematika lebih menyenagkan dengan materi yang mudah dipahami</td>
                      <td><ion-icon name="cart-outline"></ion-icon><a href="#" class="btn btn-info">Buka</a></td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>Bahasa Indonesia</td>
                      <td>Belajar lebih mudah dengan materi yang mudah dipahami</td>
                      <td><ion-icon name="cart-outline"></ion-icon><a href="#" class="btn btn-info">Buka</a></td>
                  </tr>
                  <tr>
                      <td>3.</td>
                      <td>Bahasa Inggris</td>
                      <td>Belajaran Bahasa ingrris lebih menyenagkan dengan materi yang mudah dipahami</td>
                      <td><ion-icon name="cart-outline"></ion-icon><a href="#" class="btn btn-info">Buka</a></td>
                  </tr>
                  <tr>
                      <td>4.</td>
                      <td>Seni dan Budaya</td>
                      <td>Belajaran seni dan budaya lebih menyenagkan dengan materi yang mudah dipahami</td>
                      <td><ion-icon name="cart-outline"></ion-icon><a href="#" class="btn btn-info">Buka</a></td>
                  </tr>
                <!-- @foreach($mapel as $m)
                <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->mapel }}</td>
                    <td>{{ $m->jenjang }}</td>
                    <td>{{ $m->harga }}</td>
                    <td><a href="#" class="btn btn-info">Edit</a> 
                    <a href="#" class="btn btn-danger">Hapus</a>
                    <form action="{{ route('admin.kursus.destroy',$k->id) }}" method="post">
                    </form>
                    </td>
                </tr>
                @endforeach -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     </div>
</div>
@endsection