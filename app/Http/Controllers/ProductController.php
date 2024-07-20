<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductGallery;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gallery = ProductGallery::where("product_id", $id)->get();
        $product = Product::findOrFail($id);
        return view("product_detail" , compact('product' , "gallery"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    public function search(Request $request)
    {
        $query = $request->input('search-product');

        // Validate the query
        $request->validate([
            'search-product' => 'required|min:3',
        ]);

        // Search for products by name
        $products = Product::where('name', 'like', '%' . $query . '%')->get();

        $categories =  Category::all();
        // Return the search results
        return view('product', compact('categories','products','query'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
