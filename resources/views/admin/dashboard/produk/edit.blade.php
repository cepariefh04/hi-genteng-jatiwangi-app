@extends('admin.layouts.main')

@section('admin-content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Produk</h1>
</div>
<div class="row">
  @foreach ($products as $item)
    <div class="col-lg-3">
      <div class="card">
        <img src="{{ asset('img/produk/'.$item->photo) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-capitalize">{{ $item->name }}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div class="d-flex justify-content-between">
            <a class="btn btn-primary" href="/dashboard/produk/{{ $item->id }}">Edit</a>
            <button class="btn btn-danger">Hapus</button>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
