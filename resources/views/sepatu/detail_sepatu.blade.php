@extends('sepatu.layout.app')

@section('main-content')

<div class="container">
    <h2 class="text-center mt-4">Detail Sepatu {{ $data->nama}}</h2>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Kembali</a>
                </div>
            <div class="card mt-3">
                
                <div class="card-body row justify-content-center">
                    <div class="card" style="width: 40rem; ">
                        <img class="card-img-top" src="{{ asset('upload/sepatu/'.$data->photo) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->name}}</h5>
                            <h6 class="card-title">Harga : Rp. {{ $data->harga}}.00</h6>
                            <h6 class="card-title">Ukuran : {{ $data->ukuran}}</h6>
                            <h6 class="card-title">Stock : {{ $data->stock}}</h6>
                            <p class="card-text">{!! $data->deskripsi !!}</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection