@extends('sepatu.layout.app')

@section('main-content')

    <div class="container">
        <div class="row justify-content-center mt-4 ">
            <div class="col-md-8 ">
                <div>
                    <a href="{{ route('stock_unavailable') }}" class="btn btn-primary">Data Stock Habis</a>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Update Sepatu</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('stock_update', $products->id) }}" enctype="multipart/form-data" >
                            @csrf
                            <label>Name</label>
                            <input class="form-control" type="text" value="{{ $products->nama }}" placeholder="nama sepatu" name="nama" disabled>
                            <br>

                            <label>harga</label>
                            <input class="form-control" type="text" value="{{ $products->harga }}" placeholder="harga sepatu" name="harga" disabled>
                            <br>

                        
                            <label>Ukuran</label> 
                            <select id="ukuran" class="form-control" type="text" name="ukuran" disabled>
                                <option value="">select one</option>
                                <option value="Kecil" @if($products->ukuran == 'Kecil' ) selected @endif >Kecil</option>
                                <option value="Medium" @if($products->ukuran == 'Medium' ) selected @endif >Medium</option>
                                <option value="Besar" @if($products->ukuran == 'Besar' ) selected @endif >Besar</option>
                                <option value="Sangat Besar" @if($products->ukuran == 'Sangat Besar' ) selected @endif >Sangat Besar</option>
                            </select>
                            <br>

                            <label>Stock</label>
                            <input class="form-control" value="{{ $products->stock }}" type="text" placeholder="stock" name="stock">
                            <br>

                            <div class="col-md 4">
                                <div class=" form-group">
                                    <h5>Photo Sepatu<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input id="image" type="file" value="$products->photo" name="photo" class="form-control " disabled>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <img id="showImage" src="{{ (!empty($products->photo))? url('upload/sepatu/'.$products->photo): url('upload/.no-image.png') }}" class=" " style="width:100px; height:auto">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <input class="btn btn-primary" type="submit" value="submit">
                        </form>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <script>
image.onchange = evt => {
    const [file] = image.files
    if (file) {
        showImage.src = URL.createObjectURL(file)
    }
}
</script>

@endsection