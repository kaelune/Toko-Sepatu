<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Sepatu;
use Illuminate\Http\Request;

class SepatuController extends Controller
{
    public function detailProduk($id) {
        $detail_produk = Sepatu::find($id);

        return view('sepatu.front.detail', compact('detail_produk'));
    }
}
