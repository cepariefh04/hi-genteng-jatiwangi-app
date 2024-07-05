@extends('admin.layouts.main')

@section('admin-content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <form method="post" action="/dashboard/produk" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="name">Nama Produk</label>
                <input type="text" name="name" class="form-control" id="name">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="harga">Harga Produk</label>
                <input type="number" name="price" class="form-control" id="harga" aria-describedby="emailHelp">
              </div>
            </div>
            {{-- <div class="col-lg-6">
              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="form-control-file" id="customFile">
                  <label class="custom-file-label" for="customFile">Pilih Foto</label>
                </div>
              </div>
            </div> --}}
            <div class="col-lg-6">
              <div class="input-group mb-3">
                <label for="exampleFormControlFile1">Pilih Foto Produk</label>
                <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Tambah Produk</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
