<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->orderBy('id')->paginate(8);

        if($products->currentPage() > $products->lastPage()){
            return redirect()->back();
        }

        return view('panel.product')->with('products', $products);
    }

}
