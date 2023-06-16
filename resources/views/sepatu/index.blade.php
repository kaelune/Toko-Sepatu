@extends('sepatu.layout.app')

@section('main-content')

<div class="container">
    <h2 class="text-center mt-4">Sepatu Collection </h2>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div>
                    <a href="{{ route('create') }}" class="btn btn-primary">Tambah Sepatu</a>
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
                                <th scope="col" class="w-40">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($data as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>{{ $data->ukuran }}</td>
                                <td>{{ $data->stock }}</td>
                                <td>
                                    <img src="{{ asset('upload/sepatu/'.$data->photo) }}" style="width: 150px;" />

                                </td>
                                <td>
                                    <a href="{{ route('edit', $data->id ) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('delete', $data->id ) }}" class=" btn btn-danger">Delete</a>
                                    <a href="{{ route('detail', $data->id ) }}" class=" btn btn-warning">Detail</a>
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