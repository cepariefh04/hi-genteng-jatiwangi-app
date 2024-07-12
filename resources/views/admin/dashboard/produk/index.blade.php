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
  <h1 class="h3 mb-0 text-gray-800">Daftar Produk</h1>
  <div>
    {{-- <a href="/dashboard/kategori" class="btn btn-primary mb-3">
      <i class="fas fa-plus"></i> Tambah Kategori
    </a> --}}
    <a href="/dashboard/produk/create" class="btn btn-primary mb-3">
      <i class="fas fa-plus"></i> Tambah Produk
    </a>
  </div>
</div>
<div class="row">
  @if ($products == '[]')
  <div class="col-lg-12">
    <div class="alert alert-danger text-center" role="alert">
      Belum ada Produk, tambahkan produk terlebih dahulu!
    </div>
  </div>
  @else
    @foreach ($products as $item)
      <div class="col-lg-3">
        <div class="card shadow">
          <a type="button" class="btn" data-toggle="modal" data-target="#detailModal-{{ $item->id }}">
            <img src="{{ asset('storage/'.$item->foto) }}" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <h5 class="card-title text-capitalize">{{ $item->nama }}</h5>
              <h6><span class="badge badge-secondary">{{ $item->category->nama }}</span></h6>
            </div>
            <div class="d-flex justify-content-between mt-2">
              <a class="btn btn-primary" href="/dashboard/produk/{{ $item->id }}/edit"><i class="fas fa-edit"></i> Edit</a>
              <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal-{{ $item->id }}"><i class="fas fa-trash"></i> Hapus</button>
            </div>
          </div>
        </div>
      </div>
      {{-- DELETE MODAL --}}
      <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel">Hapus Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h5>Apakah Anda Yakin ingin menghapus Produk {{ $item->nama }}?</h5>
            </div>
            <div class="modal-footer">
              <form action="/dashboard/produk/{{ $item->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger">Yakin</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      {{-- DETAILS PRODUCT MODAL --}}
      <div class="modal fade" id="detailModal-{{ $item->id }}" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="detailModalLabel">Detail Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th scope="col">Kategori</th>
                    <td scope="col">{{ $item->category->nama }}</th>
                  </tr>
                  <tr>
                    <th scope="col">Nama</th>
                    <td scope="col">{{ $item->nama }}</td>
                  </tr>
                  <tr>
                    <th scope="col">Harga</th>
                    <td scope="col" id="harga" data-harga="{{ $item->harga }}"></td>
                  </tr>
                  <tr>
                    <th scope="col">Bahan Baku</th>
                    <td scope="col">{{ $item->bahan_baku }}</td>
                  </tr>
                  <tr>
                    <th scope="col">Panjang</th>
                    <td scope="col">{{ $item->panjang }}cm</td>
                  </tr>
                  <tr>
                    <th scope="col">Lebar</th>
                    <td scope="col">{{ $item->lebar }}cm</td>
                  </tr>
                  <tr>
                    <th scope="col">Berat</th>
                    <td scope="col">{{ $item->berat }}cm</td>
                  </tr>
                  <tr>
                    <th scope="col">Ketebalan</th>
                    <td scope="col">{{ $item->ketebalan }}cm</td>
                  </tr>
                  <tr>
                    <th scope="col">Jarak Reng</th>
                    <td scope="col">{{ $item->jarak_reng }}cm</td>
                  </tr>
                  <tr>
                    <th scope="col">Volume</th>
                    <td scope="col">{{ $item->volume }}pcs/m<sup>2</sup></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  @endif
</div>
<script>
  function formatRupiah(angka) {
    if (angka != null) {
      return 'Rp' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    }
    return '';
  }
  var hargaElement = document.getElementById('harga');
  var harga = hargaElement.dataset.harga;

  hargaElement.textContent = formatRupiah(harga);
</script>
@endsection
