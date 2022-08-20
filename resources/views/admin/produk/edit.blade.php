@extends('admin.layouts.main')

@section('container')
<div class="card">
  <div class="card-body">
    <form class="form-group" method="post" action="/admin/produk/{{ $produks->nama }}" enctype="multipart/form-data">
    @method('put')
      @csrf
      <div class="card-body">
        <h4 class="card-title d-flex justify-content-center">Edit Data</h4>
        <div class="form-group row mb-2">
          <label for="nama_toko" class="col-sm-3 text-end control-label col-form-label">Nama Usaha</label>
          <div class="col-md-6">
            <input type="text" class="form-control form-control-plaintext @error('nama_toko')
                                is-invalid
                            @enderror" id="nama_toko" name="nama_toko" placeholder="Enter Store Name" required value="{{ auth()->user()->name }}" readonly />
            @error('nama_toko')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <div class="form-group row mb-2">
          <label for="nama" class="col-sm-3 text-end control-label col-form-label">Nama</label>
          <div class="col-md-6">
            <input type="text" class="form-control form-control-plaintext @error('nama')
                                is-invalid
                            @enderror" id="nama" name="nama" placeholder="Enter Product Name" required value="{{ old('nama',$produks->nama) }}" />
            @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <div class="form-group row mb-2">
          <label for="harga" class="col-sm-3 text-end control-label col-form-label">Harga</label>
          <div class="col-md-6">
            <input type="text" class="form-control form-control-plaintext @error('harga')
                                is-invalid
                            @enderror" id="harga" name="harga" placeholder="Enter Price (Rp)" required value="{{ old('harga',$produks->harga) }}" />
            @error('harga')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <div class="form-group row mb-2">
          <label for="image" class="col-sm-3 text-end control-label col-form-label"><i data-feather="image"></i></label>
          <div class="col-md-6 mt-2">
            <div id="targetLayer"></div>
            <div class="icon-choose-image"></div>
            <input type="file" class="form-control form-control-file" id="image" name="image" onchange="return showPreview(this)">
            @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <div class="form-group row mb-2">
          <label for="deskripsi" class="form-label form-control form-control-plaintext"></label>
          <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $produks->deskripsi) }}">
          <trix-editor input="deskripsi"></trix-editor>
        </div>
      </div>
      <div class="card-body mb-lg-2">
        <div class="card-body d-flex justify-content-center mt-2">
          <a href="{{ url()->previous() }}" class="btn btn-info me-1"><i data-feather="arrow-left"></i></a>
          <button type="submit" class="btn btn-success">
            <i data-feather="file-plus"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
