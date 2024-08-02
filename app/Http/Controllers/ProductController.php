<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ProductController extends Controller
{

    public function products()
    {
        return Inertia::render('Product/ProductsView');
    }

    public function create_product_view()
    {
        return Inertia::render('Product/CreateProductView');
    }

    public function create(Request $request)
    {
        $request->validate([
         'name' => 'required|string|max:255',
         'price' => 'required|string|max:255',
         'quantity' => 'required|max:255',
         'description' => 'required|string|max:255',
        ]);

        Product::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description,
        ]);

        return Redirect::route('products');


    }

}
