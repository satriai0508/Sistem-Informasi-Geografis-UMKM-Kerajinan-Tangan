@extends('admin.layouts.main')

@section('container')
<div class="card container-fluid">
  <div class="card-body">
    @if(session('success'))
    <div class="alert alert-success container container-fluid" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <div class="d-inline">
      <div class="d-flex justify-content-center ">
        <a href="/admin/toko/create" class="btn btn-success mb-2"><i data-feather="file-plus"></i></a>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="myTable">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Usaha</th>
            <th>Pemilik</th>
            <th>Images</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($usahas as $usaha)
          <tr>
            <td>{{ $loop->iteration }}</td>
            @if($usaha->nama)
            <td name="nama">{!! $usaha->nama !!}</td>
            @else
            <td>
              <p class="text-danger text-bold text-capitalize h5">Not Found</p>
            </td>
            @endif
            @if($usaha->pemilik)
            <td>{!! $usaha->pemilik !!}</td>
            @else
            <td>
              <p class="text-danger text-bold text-capitalize h5">Not Found</p>
            </td>
            @endif
            @if($usaha->image)
            <td><img src="{{ asset('storage/'. $usaha->image) }}" alt="{{ $usaha->nama }}" class="img-fluid img-thumbnail h-50 w-50"></td>
            @else
            <td>
              <p class="text-danger text-bold text-capitalize h5">Not Found</p>
            </td>
            @endif
            @if($usaha->no_hp)
            <td>{!! $usaha->no_hp !!}</td>
            @else
            <td>
              <p class="text-danger text-bold text-capitalize h5">Not Found</p>
            </td>
            @endif
            @if($usaha->alamat)
            <td>{!! $usaha->alamat !!}</td>
            @else
            <td>
              <p class="text-danger text-bold text-capitalize h5">Not Found</p>
            </td>
            @endif
            <td>
              <a href="/admin/toko/{{ strtolower($usaha->nama) }}" class="btn btn-info"><i data-feather="eye"></i></a>
              <a href="/admin/toko/{{ strtolower($usaha->nama) }}/edit" class="btn btn-warning"><i data-feather="edit"></i></a>
              <form action="/admin/toko/{{ strtolower($usaha->nama) }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button href="/admin/toko/{{ strtolower($usaha->nama) }}" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')"><i data-feather="trash"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Nama Usaha</th>
            <th>Pemilik</th>
            <th>Images</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
@endsection
