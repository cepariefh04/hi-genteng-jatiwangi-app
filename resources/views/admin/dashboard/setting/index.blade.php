@extends('admin.layouts.main')

@section('admin-content')
@if (session()->has('success'))
<div id="alert" class="alert alert-success alert-dismissible fade show mt-3" role="alert">
  {{ session('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Setting Aplikasi</h1>
  <div>
    <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseEdit" aria-expanded="false" aria-controls="collapseExample">
      <i class="fas fa-edit"></i>&nbsp;Edit Aplikasi
    </button>
  </div>
</div>
<div class="collapse" id="collapseEdit">
  <div class="row">
    {{-- HEADER SECTION --}}
    <div class="col-lg-6">
      <div class="card shadow">
        <div class="card-header bg-primary text-white">
          <h4>Bagian Header</h4>
        </div>
        <div class="card-body">
          <form method="post" action="/dashboard/setting/{{ $settings[0]->id }}" enctype="multipart/form-data">
          @method('put')
          @csrf
            {{-- TITLE LOGO INPUT --}}
            <div class="d-flex">
              <div class="form-group mb-3">
                <label for="title_logo">Logo Title</label>
                <input type="hidden" name="oldTitleLogo" value="{{ $settings[0]->title_logo }}">
                <input type="file" name="title_logo" class="custom-control" id="title_logo" onchange="previewTitleLogo()">
                @error('title_logo')
                <small class="text-danger">{{ $message }}</small>
                <div class="alert alert-danger my-2" role="alert">
                  Aturan upload Logo Title:
                  <ul>
                    <li>Aspek Rasio = 1:1</li>
                    <li>Ukuran tidak boleh lebih dari <strong>500kb</strong></li>
                    <li>Format gambar harus <strong>jpg, png, atau jpeg</strong></li>
                  </ul>
                </div>
                @enderror
              </div>
              <div>
                @if ($settings[0]->title_logo)
                  <img src="{{ asset('storage/' . $settings[0]->title_logo) }}" class="title-logo-preview img-fluid my-3 col-sm-12">
                @else
                  <img class="title-logo-preview img-fluid my-3 col-sm-5">
                @endif
              </div>
            </div>
            <hr>

            {{-- NAVBAR LOGO INPUT --}}
            <div class="d-flex">
              <div class="form-group mb-3">
                <label for="navbar_logo">Logo Navbar</label>
                <input type="hidden" name="oldNavbarLogo" value="{{ $settings[0]->navbar_logo }}">
                <input type="file" name="navbar_logo" class="custom-control" id="navbar_logo" onchange="previewNavbarLogo()">
                @error('navbar_logo')
                <small class="text-danger">{{ $message }}</small>
                <div class="alert alert-error my-2" role="alert">
                  Aturan upload Logo:
                  <ul>
                    <li>Aspek Rasio = 2:1</li>
                    <li>Ukuran tidak boleh lebih dari <strong>1mb</strong></li>
                    <li>Format gambar harus <strong>jpg, png, atau jpeg</strong></li>
                  </ul>
                </div>
                @enderror
              </div>
              <div>
                @if ($settings[0]->navbar_logo)
                  <img src="{{ asset('storage/' . $settings[0]->navbar_logo) }}" class="navbar-logo-preview img-fluid my-3 col-sm-12">
                @else
                  <img class="navbar-logo-preview img-fluid my-3 col-sm-5">
                @endif
              </div>
            </div>
            <hr>

            {{-- HERO INPUT --}}
            {{-- IMAGE --}}
            <div class="d-flex">
              <div class="form-group mb-3">
                <label for="hero">Hero Background</label>
                <input type="hidden" name="oldHero" value="{{ $settings[0]->hero }}">
                <input type="file" name="hero" class="custom-control" id="hero" onchange="previewHero()">
                @error('hero')
                  <small class="text-danger">{{ $message }}</small>
                  <div class="alert alert-danger my-2" role="alert">
                    Aturan upload Logo:
                    <ul>
                      <li>Aspek Rasio = 2:1</li>
                      <li>Ukuran tidak boleh lebih dari <strong>3mb</strong></li>
                      <li>Format gambar harus <strong>jpg, png, atau jpeg</strong></li>
                    </ul>
                  </div>
                @enderror
              </div>
              <div>
                @if ($settings[0]->hero)
                  <img src="{{ asset('storage/' . $settings[0]->hero) }}" class="hero-preview img-fluid my-3 col-sm-12">
                @else
                  <img class="hero-preview img-fluid my-3 col-sm-5">
                @endif
              </div>
            </div>

            {{-- TEXT --}}
            <div class="form-group mb-3">
              <label for="slogan">Slogan</label>
              <div class="input-group">
                <textarea name="slogan" class="form-control @error('slogan') is-invalid @enderror"
                id="slogan">{{ old('slogan', $settings[0]->slogan) }}</textarea>
                @error('slogan')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>&nbsp;Simpan</button>
          </form>
        </div>
      </div>
    </div>
    {{-- CONTACT SECTION --}}
    <div class="col-lg-6">
      <div class="card shadow">
        <div class="card-header bg-primary text-white">
          <h4>Bagian Kontak</h4>
        </div>
        <div class="card-body">
          <form method="post" action="/dashboard/setting/{{ $settings[0]->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group mb-3">
              <label for="no_telepon">No Telepon/HP Perusahaan</label>
              <div class="input-group">
                <input type="number" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror"
                id="no_telepon" value="{{ old('no_telepon', $settings[0]->no_telepon) }}">
                @error('no_telepon')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="form-group mb-3">
              <label for="email">Email Perusahaan</label>
              <div class="input-group">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                id="email" value="{{ old('email', $settings[0]->email) }}">
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="form-group mb-3">
              <label for="instagram">Instagram Perusahaan</label>
              <div class="input-group">
                <input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror"
                id="instagram" value="{{ old('instagram', $settings[0]->instagram) }}">
                @error('instagram')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="form-group mb-3">
              <label for="alamat">Alamat Perusahaan</label>
              <div class="input-group">
                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                id="alamat">{{ old('alamat', $settings[0]->alamat) }}</textarea>
                @error('alamat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="form-group mb-3">
              <label for="link_gmaps">Koordinat Alamat (Google Maps)</label>
              <div class="input-group">
                <textarea name="link_gmaps" class="form-control @error('link_gmaps') is-invalid @enderror"
                id="link_gmaps">{{ old('link_gmaps', $settings[0]->link_gmaps) }}</textarea>

                @error('link_gmaps')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>&nbsp;Simpan</button>
          </form>
        </div>
      </div>
    </div>
    {{-- ABOUT US SECTION --}}
    <div class="col-lg-12 mt-3">
      <div class="card shadow">
        <div class="card-header bg-primary text-white">
          <h4>Bagian Tentang Kami</h4>
        </div>
        <div class="card-body">
          <form method="post" action="/dashboard/setting/{{ $settings[0]->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
              <div class="form-group mb-3">
                <label for="foto_tentang_kami">Foto Tentang Perusahaan</label>
                <input type="hidden" name="oldFotoTentangKami" value="{{ $settings[0]->foto_tentang_kami }}">
                <input type="file" name="foto_tentang_kami" class="custom-control" id="foto_tentang_kami" onchange="previewFotoTentang()">
                @error('foto_tentang_kami')
                <small class="text-danger">{{ $message }}</small>
                <div class="alert alert-danger my-2" role="alert">
                  Aturan upload Logo Title:
                  <ul>
                    <li>Aspek Rasio = 1:1</li>
                    <li>Ukuran tidak boleh lebih dari <strong>500kb</strong></li>
                    <li>Format gambar harus <strong>jpg, png, atau jpeg</strong></li>
                  </ul>
                </div>
                @enderror
                <div class="text-center">
                  @if ($settings[0]->foto_tentang_kami)
                  <img src="{{ asset('storage/' . $settings[0]->foto_tentang_kami) }}" class="foto-tentang-preview text-center img-fluid my-3 col-sm-3">
                @else
                  <img class="foto-tentang-preview img-fluid my-3 col-sm-5">
                @endif
                </div>
            </div>
            <hr>
            <div class="form-group mb-3">
              <label for="tentang_kami">Ceritakan tentang Perusahaan</label>
              <textarea id="tentangkami" name="tentang_kami">{{ old('tentang_kami', $settings[0]->tentang_kami) }}</textarea>
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>&nbsp;Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card shadow">
      <div class="card-header bg-secondary text-white">
        <h4>Preview Aplikasi</h4>
      </div>
      <div class="card-body">
        <iframe src="{{ env('APP_URL') }}" frameborder="0" class="preview-homepage"></iframe>
      </div>
    </div>
  </div>
</div>
<script>
  var alertSuccess = document.querySelector('#alert');
  if (alertSuccess) {
    setTimeout(function() {
      alertSuccess.remove()
    }, 5000)
  }
</script>
@endsection
