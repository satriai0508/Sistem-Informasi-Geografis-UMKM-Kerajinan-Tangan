@extends('admin.layouts.main')

@section('container')
<div class="card">
  <div class="card-body">
    @if(session('success'))
    <div class="alert alert-success container container-fluid" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <div class="d-inline">
      <div class="d-flex justify-content-center ">
        <a href="/admin/produk/create" class="btn btn-success mb-2"><i data-feather="file-plus"></i></a>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="myTable">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Usaha</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($produks as $produk)
          <tr>
            <td>{{ $loop->iteration }}</td>
            @if($produk->nama_toko)
            <td name="nama_toko">{!! $produk->nama_toko !!}</td>
            @else
            <td>
              <p class="text-danger text-bold text-capitalize h5">Not Found</p>
            </td>
            @endif
            @if($produk->nama)
            <td name="nama">{!! $produk->nama !!}</td>
            @else
            <td>
              <p class="text-danger text-bold text-capitalize h5">Not Found</p>
            </td>
            @endif
            @if($produk->harga)
            <td>{!! $produk->harga !!}</td>
            @else
            <td>
              <p class="text-danger text-bold text-capitalize h5">Not Found</p>
            </td>
            @endif
            @if($produk->image)
            <td><img src="{{ asset('storage/'. $produk->image) }}" alt="{{ $produk->nama }}" class="img-fluid img-thumbnai"></td>
            @else
            <td>
              <img src="https://source.unsplash.com/1200x400?{{ $produk->nama }}" alt="{{ $produk->nama }}" class="img-fluid img-thumbnai">
            </td>
            @endif
            @if($produk->deskripsi)
            <td>{!! $produk->deskripsi !!}</td>
            @else
            <td>
              <p class="text-danger text-bold text-capitalize h5">Not Found</p>
            </td>
            @endif
            <td>
              <!-- <a href="/admin/produk/{{ strtolower($produk->nama) }}" class="btn btn-info"><i data-feather="eye"></i></a> -->
              <a href="/admin/produk/{{ strtolower($produk->nama) }}/edit" class="btn btn-warning"><i data-feather="edit"></i></a>
              <form action="/admin/produk/{{ strtolower($produk->nama) }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button href="/admin/produk/{{ strtolower($produk->nama) }}" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')"><i data-feather="trash"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Nama Usaha</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
@endsection
