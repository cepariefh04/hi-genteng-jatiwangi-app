<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Product::get();
        $products = Product::with('category')->get();

        return view('admin.dashboard.produk.index', [
            'settings' => Setting::get(),
            'title' => 'Produk',
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.produk.create', [
            'settings' => Setting::get(),
            'title' => 'Produk',
            'categories' => ProductCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'category_id' => 'required',
            'nama' => 'required|max:255',
            'harga' => 'required|numeric',
            'foto' => 'image|file|max:2048',
            'thumbnail' => 'nullable',
            'bahan_baku' => 'nullable|max:255',
            'panjang' => 'nullable|numeric',
            'lebar' => 'nullable|numeric',
            'berat' => 'nullable|numeric',
            'ketebalan' => 'nullable|numeric',
            'jarak_reng' => 'nullable|numeric',
            'volume' => 'nullable|numeric',
        ]);

        if ($request->file('foto')) {
            $validateData['foto'] = $request->file('foto')->store('product-images');
        }

        Product::create($validateData);

        return redirect('/dashboard/produk')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Product $produk)
    {
        return $produk;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $produk)
    {
        return view('admin.dashboard.produk.edit', [
            'settings' => Setting::get(),
            'title' => 'Produk',
            'product' => $produk,
            'categories' => ProductCategory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $produk)
    {
        $validateData = $request->validate([
            'category_id' => 'required',
            'nama' => 'required|max:255',
            'harga' => 'required|numeric',
            'foto' => 'image|file|max:2048',
            'bahan_baku' => 'nullable|max:255',
            'panjang' => 'nullable|numeric',
            'lebar' => 'nullable|numeric',
            'berat' => 'nullable|numeric',
            'ketebalan' => 'nullable|numeric',
            'jarak_reng' => 'nullable|numeric',
            'volume' => 'nullable|numeric',
        ]);

        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['foto'] = $request->file('foto')->store('product-images');
        }

        Product::where('id', $produk->id)->update($validateData);

        return redirect('/dashboard/produk')->with('success', 'Produk berhasil di-update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $produk)
    {
        if ($produk->foto) {
            Storage::delete($produk->foto);
        }

        Product::destroy($produk->id);
        return redirect('/dashboard/produk')->with('success', 'Produk berhasil dihapus!');
    }

    public function detailProduk(Product $produk)
    {
        return view('homepage.detail-produk');
    }
}
