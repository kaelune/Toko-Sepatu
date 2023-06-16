@extends('sepatu.front.layout.app')

@section('main-content')

<div class="container">
    <h2 class="text-center mt-4">Detail Sepatu {{ $detail_produk->nama}}</h2>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div>
                    <a href="{{ route('home') }}" class="btn btn-primary">Kembali</a>
                </div>
            <div class="card mt-3">
                
                <div class="card-body row justify-content-center">
                    <div class="card" style="width: 40rem; ">
                        <img class="card-img-top" src="{{ asset('upload/sepatu/'.$detail_produk->photo) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $detail_produk->name}}</h5>
                            <h6 class="card-title">Harga : Rp. {{ $detail_produk->harga}}.00</h6>
                            <h6 class="card-title">Ukuran : {{ $detail_produk->ukuran}}</h6>
                            <h6 class="card-title">Stock : {{ $detail_produk->stock}}</h6>
                            <p class="card-text">{!! $detail_produk->deskripsi !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection