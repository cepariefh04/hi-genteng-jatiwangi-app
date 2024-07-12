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
    <h1 class="h3 mb-0 text-gray-800">Daftar Kategori</h1>
    <button class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
      <i class="fas fa-plus"></i> Tambah Kategori
    </button>
  </div>
  @if ($categories == '[]')
    <div class="alert alert-danger text-center" role="alert">
      Belum ada Kategori Produk, tambahkan Kategori Produk terlebih dahulu!
    </div>
  @else
    <div class="card shadow">
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <td width="50">{{ $loop->iteration }}</td>
              <td>{{ $category->nama }}</td>
              <td width="120">
                <button class="btn btn-small btn-warning" data-toggle="modal" data-target="#modalEdit-{{ $category->id }}"><i class="fas fa-edit"></i></button>
                <button class="btn btn-small btn-danger" data-toggle="modal" data-target="#modalDelete-{{ $category->id }}"><i class="fas fa-trash"></i></button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  @endif
  @foreach ($categories as $category)
    {{-- MODAL EDIT --}}
    <div class="modal fade" id="modalEdit-{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="/dashboard/kategori/{{ $category->id }}" method="post">
            @method('put')
            @csrf
            <div class="modal-body">
              <div class="form-group mb-3">
                <label for="nama">Nama Kategori</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                id="nama" value="{{ old('nama', $category->nama) }}" required>
                @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i>&nbsp;Simpan
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    {{-- MODAL HAPUS --}}
    <div class="modal fade" id="modalDelete-{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus Kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="/dashboard/kategori/{{ $category->id }}" method="post">
            @method('delete')
            @csrf
            <div class="modal-body">
              <h5>Apakah Anda yakin ingin menghapus Kategori <strong>{{ $category->nama }}</strong>?
                <span class="text-danger">Jika Anda menghapus Kategori ini, Produk dengan Kategori <strong>{{ $category->nama }}</strong>
                  akan ikut terhapus juga!</span>
              </h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash"></i>&nbsp;Hapus
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  @endforeach

  <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalTambahLabel">Tambah Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/dashboard/kategori/" method="post">
          @csrf
          <div class="modal-body">
            <div class="form-group mb-3">
              <label for="nama">Nama Kategori</label>
              <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
              id="nama" value="{{ old('nama') }}" required>
              @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
