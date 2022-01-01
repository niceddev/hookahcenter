<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::withFilters(
            request()->input('category','3')
        )->get();

        return ProductResource::collection($products);
    }


}
