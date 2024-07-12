<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
      return redirect()->intended('/');
    }

    function detail(Product $id)
    {
      return view('homepage.detail-produk', [
        'title' => 'Detail Produk',
        'settings' => Setting::get(),
        'product' => $id,
        'products' => Product::all()
      ]);
    }
}
