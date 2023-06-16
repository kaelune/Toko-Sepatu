@extends('sepatu.front.layout.app')

@section('main-content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <section>
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="{{ asset('upload/banner1.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Nikmati Hari hari belanja Anda</h5>
                                <p>Dapatkan discount yang paling murah</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="{{ asset('upload/banner2.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Kami siap melayani Anda</h5>
                                <p>Dijamin aman dan selamat sampai tujuan</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="{{ asset('upload/banner3.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Produk Produk yang berkwalitas</h5>
                                <p>Tidak hanya kualitas tetapi juga kenyamanan</p>
                            </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div> 
                </section>  
                <section>
                    <div class="row mt-4">
                        @foreach($products as $item)
                        <div class="col-md-3 mb-4">
                            <div class="card" >
                                <img src="{{ asset('upload/sepatu/'.$item->photo) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->nama}}</h5>
                                    <h6 class="card-title">Harga : Rp. {{ $item->harga}}.00</h6>
                                    <h6 class="card-title">Stock : {{ $item->stock }}</h6>
                                    <a href="{{ route('detail_produk', $item->id)}}" class="btn btn-primary">lihat detail</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>       

            </div>
    </div>
</div>
@endsection
<!-- 
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html> -->