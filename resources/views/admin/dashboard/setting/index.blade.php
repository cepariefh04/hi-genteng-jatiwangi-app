@extends('admin.layouts.main')

@section('admin-content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Daftar Produk</h1>
</div>
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <form method="post" action="/dashboard/setting" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <h3>Setting</h3>
              </div>
              <div class="col-lg-4">
                <div class="form-group mb-3">
                  <label for="title_logo">Logo Title</label>
                  <input type="file" name="title_logo" class="custom-control" id="title_logo" onchange="previewTitleLogo()" required>
                    @error('title_logo')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  <img src="" alt="" class="title-logo-preview img-fluid my-3 col-sm-5">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group mb-3">
                  <label for="navbar_logo">Logo Navbar</label>
                  <input type="file" name="navbar_logo" class="custom-control" id="navbar_logo" onchange="previewNavbarLogo()" required>
                    @error('navbar_logo')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  <img src="" alt="" class="navbar-logo-preview img-fluid my-3 col-sm-5">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group mb-3">
                  <label for="hero">Hero Background</label>
                  <input type="file" name="hero" class="custom-control" id="hero" onchange="previewHero()" required>
                    @error('hero')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  <img src="" alt="" class="hero-preview img-fluid my-3 col-sm-5">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group mb-3">
                  <label for="slogan">Slogan</label>
                  <div class="input-group">
                    <textarea name="slogan" class="form-control @error('slogan') is-invalid @enderror"
                    id="slogan" value="{{ old('slogan') }}"></textarea>
                    @error('slogan')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="col-lg-12 mt-3">
                <h3>Kontak</h3>
              </div>
              <div class="col-lg-4">
                <div class="form-group mb-3">
                  <label for="no_telepon">No Telepon/HP Perusahaan</label>
                  <div class="input-group">
                    <input type="number" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror"
                    id="no_telepon" value="{{ old('no_telepon') }}">
                    @error('no_telepon')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group mb-3">
                  <label for="email">Email Perusahaan</label>
                  <div class="input-group">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" value="{{ old('email') }}">
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group mb-3">
                  <label for="instagram">Instagram Perusahaan</label>
                  <div class="input-group">
                    <input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror"
                    id="instagram" value="{{ old('instagram') }}">
                    @error('instagram')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group mb-3">
                  <label for="alamat">Alamat Perusahaan</label>
                  <div class="input-group">
                    <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                    id="alamat" value="{{ old('alamat') }}"></textarea>
                    @error('alamat')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group mb-3">
                  <label for="alamat">Koordinat Alamat (Google Maps)</label>
                  <div class="input-group">
                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                    id="alamat" value="{{ old('alamat') }}"></input>

                    @error('alamat')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
