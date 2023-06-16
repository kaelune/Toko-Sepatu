<?php

namespace App\Http\Controllers;

use App\Models\Sepatu;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SepatuController extends Controller
{
    public function index()
    {
        $data = Sepatu::orderBy('id', 'desc')->get();
        return view('sepatu.index', compact('data'));
    }

    public function create()
    {
        return view('sepatu.create_sepatu');
    }

    public function store(Request $request)
    {
        $data = new Sepatu();

        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'ukuran' => 'required',
            'stock' => 'required',
        ]);

        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif',
        ]);

        $image = $request->photo;
        if ($image) {
            
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 600)->save('upload/sepatu/' . $image_one);
            $data->photo = $image_one;
        }

        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->ukuran = $request->ukuran;
        $data->stock = $request->stock;     
        $data->deskripsi = $request->deskripsi;     
        $data->save();

        return redirect()->route('dashboard')->with('success', 'Sepatu berhasil ditambah');
    }

    public function edit($id) {
        $edit_data = Sepatu::find($id);
        return view('sepatu.edit_sepatu', compact('edit_data'));
    }

    public function update(Request $request, $id) {
        $data = Sepatu::find($id);

        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'ukuran' => 'required',
            'stock' => 'required',
        ]);        

        $image = $request->photo;
        if ($image) {
            $request->validate([
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif',
            ]);
            unlink(public_path('upload/sepatu/'.$data->photo));
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 600)->save('upload/sepatu/' . $image_one);
            $data->photo = $image_one;
        }
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->ukuran = $request->ukuran;
        $data->stock = $request->stock;   
        $data->deskripsi = $request->deskripsi;       
        $data->update();

        return redirect()->route('dashboard')->with('success', 'Sepatu berhasil di update');

    }

    public function delete($id) {
        $data = Sepatu::find($id);
        unlink(public_path('upload/sepatu/'.$data->photo));
        $data->delete();

        return redirect()->route('dashboard')->with('success', 'Sepatu berhasil di hapus');
    }

    public function detail($id) {
        $data = Sepatu::find($id);

        return view('sepatu.detail_sepatu', compact('data'));
    }
}
