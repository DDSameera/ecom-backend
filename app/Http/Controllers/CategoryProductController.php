<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCatalogueRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function show()
    {

        $products = Product::with('categories')->get();

        return view('pc.index', compact('products'));
    }

    public function create()
    {
        $category = Category::with('subCategory')->get();

        return view('pc.create', compact('category'));

    }

    public function store(ProductCatalogueRequest $productRequest)
    {

        $productName = $productRequest->input('product_name');
        $productCategories = $productRequest->input('product_categories');
        $productUnitPrice = $productRequest->input('product_unit_price');
        $productQty = $productRequest->input('product_qty');
        $productDiscount = $productRequest->input('product_discount');

        //Save Product Information
        $product = Product::create([
            'name' => $productName
        ]);


        //Product Catalogue

        if ($productRequest->hasFile('product_image_file')) {
            $productImageFiles = $productRequest->file('product_image_file');

            foreach ($productCategories as $key => $pc) {

                foreach ($productImageFiles as $pif) {
                    $name = $pif->getClientOriginalName();
                    $imageUrl = $pif->storeAs('uploads', $name, 'public');




                    CategoryProduct::create([
                        'product_id' => $product->id,
                        'category_id' => $pc,
                        'image_url' => $imageUrl,
                        'unit_price' => $productUnitPrice,
                        'qty' => $productQty,
                        'discount' => $productDiscount

                    ]);
                }
            }


            return back()->with('success', 'Saved Information & Images uploaded successfully');
        }

    }
}
