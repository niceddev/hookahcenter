<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
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

        return view('panel.product', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('panel.product-form', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        $products = Product::create($request->validated());

        return redirect()->route('panel.products.index')->with('successStatus', 'Товар успешно добавлен!');
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
