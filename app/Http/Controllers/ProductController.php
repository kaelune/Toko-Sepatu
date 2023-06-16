<?php

namespace App\Http\Controllers;

use App\Models\Sepatu;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function getAvailableProducts()
    {
        $products = Sepatu::where('stock', '>', 0)->get();

        return view('sepatu.stock_available', compact('products'));
    }

    public function getUnavailableProducts()
    {
        $products = Sepatu::where('stock', 0)->get();

        return view('sepatu.stock_unavailable', compact('products'));
    }

    public function editProductStock($id) 
    {
        $products = Sepatu::find($id);

        return view('sepatu.stock_edit', compact('products'));
    }

    public function updateProductStock(Request $request, $id)
    {
        $validatedData = $request->validate([
            'stock' => 'required|numeric',
        ]);      
        
        $data = Sepatu::find($id);
        $data->stock = $validatedData['stock'];     
        $data->save();

        return redirect()->route('stock_available')->with('success', 'Stock Sepatu berhasil di update');
    }
}
