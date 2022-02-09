<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->orderBy('id')->paginate(10);

        if($products->currentPage() > $products->lastPage()){
            return redirect()->back();
        }

        return view('panel.product')->with('products', $products);
    }

    public function create()
    {
        return view('panel.product-form');
    }

    public function store(ProductRequest $request)
    {
        dd($request);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
