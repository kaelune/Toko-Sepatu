@extends('sepatu.layout.app')

@section('main-content')

<div class="container">
    <h2 class="text-center mt-4">Stock Tersedia </h2>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Semua Sepatu</a>
                    <a href="{{ route('stock_available') }}" class="btn btn-success">Stock available</a>
                    <a href="{{ route('stock_unavailable') }}" class="btn btn-danger">Stock Unavailable</a>
                </div>
            <div class="card mt-3">
                
                <div class="card-body">
                    <table id="data-table" class="table table-bordered table-striped mt-3 ">

                        <thead class="table-primary mt-2">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Ukuran</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($products as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>{{ $data->ukuran }}</td>
                                <td>{{ $data->stock }}</td>
                                <td>
                                    <img src="{{ asset('upload/sepatu/'.$data->photo) }}" style="width: 200px;" />

                                </td>
                                <td>
                                    <a href="{{ route('stock_edit', $data->id ) }}" class="btn btn-info">Edit Stock</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection