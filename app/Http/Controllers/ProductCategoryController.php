<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProductCategory::all();
        return view('admin.dashboard.kategori.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nama' => 'required|max:255'
        ]);

        ProductCategory::create($validateData);

        return redirect('/dashboard/kategori')->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCategory  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $kategori)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
        ]);

        ProductCategory::where('id', $kategori->id)->update($validateData);

        return redirect('/dashboard/kategori')->with('success', 'Kategori berhasil di-update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $kategori)
    {
        ProductCategory::destroy($kategori->id);
        return redirect('/dashboard/kategori')->with('success', 'Kategori berhasil dihapus!');
    }
}
