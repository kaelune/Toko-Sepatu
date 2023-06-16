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
                        <form method="POST" action="{{ route('update', $edit_data->id) }}" enctype="multipart/form-data">
                            @csrf
                            <label>Name</label>
                            <input class="form-control" type="text" value="{{ $edit_data->nama }}" placeholder="nama sepatu" name="nama">
                            <br>

                            <label>harga</label>
                            <input class="form-control" type="text" value="{{ $edit_data->harga }}" placeholder="harga sepatu" name="harga">
                            <br>

                        
                            <label>Ukuran</label> 
                            <select id="ukuran" class="form-control" type="text" name="ukuran">
                                <option value="">select one</option>
                                <option value="Kecil" @if($edit_data->ukuran == 'Kecil' ) selected @endif >Kecil</option>
                                <option value="Medium" @if($edit_data->ukuran == 'Medium' ) selected @endif >Medium</option>
                                <option value="Besar" @if($edit_data->ukuran == 'Besar' ) selected @endif >Besar</option>
                                <option value="Sangat Besar" @if($edit_data->ukuran == 'Sangat Besar' ) selected @endif >Sangat Besar</option>
                            </select>
                            <br>

                            <label>Stock</label>
                            <input class="form-control" value="{{ $edit_data->stock }}" type="text" placeholder="stock" name="stock">
                            <br>

                            <label>Deskripsi<span class="text-danger">*</span></label>
                            <div class="controls">
                                <textarea id="mytextarea" type="text" name="deskripsi" class="form-control">{{ $edit_data->deskripsi}}</textarea>
                            </div>

                            <div class="col-md 4">
                                <div class=" form-group">
                                    <h5>Photo Sepatu<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input id="image" type="file" value="$edit_data->photo" name="photo" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <img id="showImage" src="{{ (!empty($edit_data->photo))? url('upload/sepatu/'.$edit_data->photo): url('upload/.no-image.png') }}" class=" " style="width:100px; height:auto">
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