<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Resources\Product as ProductResource;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        return $product::all();
    }

    public function show(Product $product)
    {
        return new ProductResource($product);
    }
}
