<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductColor;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colors = ProductColor::all();
        $sizes = ProductSize::all();
        $categories = Category::all();
        return view("admin.create", compact('colors', 'sizes', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        list(
            $dataProduct,
            $dataProductVariants,
        ) = $this->handleData($request);
        $product = Product::create($dataProduct);
        foreach ($dataProductVariants as $item) {
            $item += ['product_id' => $product->id];
            ProductVariant::create($item);
        }
        try {
            DB::transaction(function () use($dataProduct ,$dataProductVariants ) {
                /** @var Product $product */

            } , 3);
            return redirect()
                ->route('admin.product.index')
                ->with('success', 'Thao tác thành công!');
        } catch (\Exception $exception) {
            if (
                !empty($dataProduct['img_thumbnail'])
                && Storage::exists($dataProduct['img_thumbnail'])
            ) {

                Storage::delete($dataProduct['img_thumbnail']);
            }

            $dataHasImage = $dataProductVariants ;
            foreach ($dataHasImage as $item) {
                if (!empty($item['image']) && Storage::exists($item['image'])) {
                    Storage::delete($item['image']);
                }
            }

            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    private function handleData(StoreProductRequest|UpdateProductRequest $request)
    {
        $dataProduct = $request->except(['product_variants']);
        if (!empty($dataProduct['img_thumbnail'])) {
            $dataProduct['img_thumbnail'] = Storage::put('products', $dataProduct['img_thumbnail']);
        }

        $dataProductVariantsTmp = $request->product_variants;
        $dataProductVariants = [];
        foreach ($dataProductVariantsTmp as $key => $item) {
            $tmp = explode('-', $key);

            // current_image xuất hiện khi update
            // mai confix lại cái này 
            $image = !empty($item['image'])
                ? Storage::put('product_variants', $item['image']) : ($item['current_image'] ?? null);

            $dataProductVariants[] = [
                'product_size_id' => $tmp[0],
                'product_color_id' => $tmp[1],
                'quantity' => $item['quantity'],
                'image' => $image
            ];
        }
        return [$dataProduct, $dataProductVariants];
    }
}
