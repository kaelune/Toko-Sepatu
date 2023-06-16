@extends('sepatu.layout.app')

@section('main-content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.2/tinymce.min.js"></script>


    <div class="container">
        <div class="row justify-content-center mt-4 ">
            <div class="col-md-8 ">
                <div>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Data Sepatu</a>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Koleksi Sepatu</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                            @csrf
                            <label>Name</label>
                            <input class="form-control" type="text" placeholder="nama sepatu" name="nama">
                            <br>

                            <label>harga</label>
                            <input class="form-control" type="text" placeholder="harga sepatu" name="harga">
                            <br>

                        
                            <label>Ukuran</label> 
                            <select id="ukuran" class="category form-control" type="text" placeholder="Ukuran" name="ukuran">
                                <option value="">select one</option>
                                <option value="Kecil">Kecil</option>
                                <option value="Medium">Medium</option>
                                <option value="Besar">Besar</option>
                                <option value="Sangat Besar">Sangat Besar</option>
                            </select>
                            <br>

                            <label>Stock</label>
                            <input class="form-control" type="text" placeholder="stock" name="stock">
                            <br>

                            <label>Deskripsi<span class="text-danger">*</span></label>
                            <div class="controls">
                                <textarea id="mytextarea" type="text" name="deskripsi" class="form-control"></textarea>
                            </div>

                            <div class="col-md 4">
                                <div class=" form-group">
                                    <h5>Photo Sepatu<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input id="image" type="file" name="photo" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <img id="showImage" src="{{ url('upload/no-image.png') }}" class=" " style="width:100px; height:auto">
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

<script>
    tinymce.init({
        selector: '#mytextarea'
    });
</script>

@endsection