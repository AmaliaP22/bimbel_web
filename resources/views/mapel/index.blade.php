@extends('layouts.app', ['activePage' => 'mapel', 'titlePage' => __('Mapel')])

@section('content')
<div class="content">
  <div class="container-fluid">
      <a href="{{ route('cmapel') }}" class="btn btn-primary"><i class="material-icons">add_circle_outline</i>Tambah Mapel</a>
    </p>
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
                    <th>Harga</th>
                    <th>Aksi</th>
                    </tr>
                </tr>
                </thead>
                <tbody>
                <tr>
                      <td>1.</td>
                      <td>Matematika</td>
                      <td>SMA</td>
                      <td>85000/bln</td>
                      <td><a href="#" class="btn btn-info">Edit</a> 
                    <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>Bahasa Indonesia</td>
                      <td>SMP</td>
                      <td>80000/bln</td>
                      <td><a href="#" class="btn btn-info">Edit</a> 
                    <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                      <td>3.</td>
                      <td>Bahasa Inggris</td>
                      <td>SMA</td>
                      <td>90000/bln</td>
                      <td><a href="#" class="btn btn-info">Edit</a> 
                    <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                      <td>4.</td>
                      <td>Seni dan Budaya</td>
                      <td>SD</td>
                      <td>70000/bln</td>
                      <td><a href="#" class="btn btn-info">Edit</a> 
                    <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                      <td>5.</td>
                      <td>Ilmu Pengetahuan sosial</td>
                      <td>SMP</td>
                      <td>80000/bln</td>
                      <td><a href="#" class="btn btn-info">Edit</a> 
                    <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                      <td>6.</td>
                      <td>Ilmu Pengetahuan Alam</td>
                      <td>SMP</td>
                      <td>85000/bln</td>
                      <td><a href="#" class="btn btn-info">Edit</a> 
                    <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                      <td>7.</td>
                      <td>Kerampilan</td>
                      <td>SD</td>
                      <td>70000/bln</td>
                      <td><a href="#" class="btn btn-info">Edit</a> 
                    <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
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