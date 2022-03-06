<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')
                            ->orderBy('id')
                            ->paginate(10);

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
        $products = Product::create($request->validated())
                        ->addMedia($request->file('image_path'))
                        ->toMediaCollection();
        if(!$products){
            return redirect()->back()->with('errorStatus', 'Неизведанная ошибка!');
        }

        return redirect()->route('panel.products.index')->with('successStatus', 'Товар успешно добавлен!');
    }

    public function edit($id)
    {
        $product = Product::with('category')->find($id);
        $categories = Category::all();
        if(!$product){
            return redirect()->route('panel.products.index')->with('errorStatus', 'Товар не существует, либо был удален!');
        }

        return view('panel.product-edit', compact(['product', 'categories']));
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);

        if ($product){
            $product->update($request->validated());
        }else{
            return back()->with('errorStatus', 'Неизведанная ошибка!');
        }

        return redirect()->route('panel.products.index')->with('successStatus', 'Товар успешно обновлен!');
    }

    public function destroy($ids)
    {
        Product::whereIn('id', explode(",",$ids))->delete();

        return redirect()->route('panel.products.index')->with('successStatus', 'Товар успешно удален!');
    }
}
