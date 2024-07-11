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
            <div class="col-lg-3">
              <div class="form-group mb-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                id="nama" value="{{ old('nama') }}" required>
                @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group mb-3">
                <label for="harga">Harga</label>
                <input type="number" step="any" name="harga" class="form-control @error('harga') is-invalid @enderror"
                id="harga" value="{{ old('harga') }}" required>
                @error('harga')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
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
            <div class="col-lg-3">
              <div class="form-group mb-3">
                <label for="bahanBaku">Bahan Baku</label>
                <div class="input-group">
                  <input type="text" name="bahan_baku" class="form-control @error('bahan_baku') is-invalid @enderror"
                  id="bahanBaku" value="{{ old('bahan_baku') }}">
                  @error('bahan_baku')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
              <div class="col-lg-3">
                <div class="form-group mb-3">
                  <label for="kategori">Kategori</label>
                  <select class="custom-select" id="kategori" name="category_id" required>
                    @foreach ($categories as $category)
                      @if (old('category_id') == $category->id)
                        <option selected value="{{ $category->id }}">{{ $category->nama }}</option>
                      @else
                        <option value="{{ $category->id }}">{{ $category->nama }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
              </div>
            <div class="col-lg-2">
              <div class="form-group mb-3">
                <label for="panjang">Panjang</label>
                <div class="input-group">
                  <input type="number" step="any" name="panjang" class="form-control @error('panjang') is-invalid @enderror"
                  id="panjang" value="{{ old('panjang') }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">cm</div>
                  </div>
                  @error('panjang')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group mb-3">
                <label for="lebar">Lebar</label>
                <div class="input-group">
                  <input type="number" step="any" name="lebar" class="form-control @error('lebar') is-invalid @enderror"
                  id="lebar" value="{{ old('lebar') }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">cm</div>
                  </div>
                  @error('lebar')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group mb-3">
                <label for="berat">Berat</label>
                <div class="input-group">
                  <input type="number" step="any" name="berat" class="form-control @error('berat') is-invalid @enderror"
                  id="berat" value="{{ old('berat') }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">kg</div>
                  </div>
                  @error('berat')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group mb-3">
                <label for="ketebalan">Ketebalan</label>
                <div class="input-group">
                  <input type="number" step="any" name="ketebalan" class="form-control @error('ketebalan') is-invalid @enderror"
                  id="ketebalan" value="{{ old('ketebalan') }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">cm</div>
                  </div>
                  @error('ketebalan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group mb-3">
                <label for="jarak_reng">Jarak Reng</label>
                <div class="input-group">
                  <input type="number" step="any" name="jarak_reng" class="form-control @error('jarak_reng') is-invalid @enderror"
                  id="jarak_reng" value="{{ old('jarak_reng') }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">cm</div>
                  </div>
                  @error('jarak_reng')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group mb-3">
                <label for="volume">Volume</label>
                <div class="input-group">
                  <input type="number" step="any" name="volume" class="form-control @error('volume') is-invalid @enderror"
                  id="volume" value="{{ old('volume') }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">pcs/m<sup>2</sup></div>
                  </div>
                  @error('volume')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <label for="photo">Foto Produk</label>
              <input type="file" name="foto" class="custom-control" id="photo" onchange="previewImage()" required>
              @error('photo')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
              <img src="" alt="" class="img-preview img-fluid my-3 col-sm-5">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Tambah Produk</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
