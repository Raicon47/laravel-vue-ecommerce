<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

}
