<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')
                            ->withCount('products')
                            ->withSum('products', 'price')
                            ->paginate(10);

        return view('panel.category', compact('categories'));
    }

    public function create()
    {
        return view('panel.category-form');
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->validated());

        if(!$category){
            return redirect()->back()->with('errorStatus', 'Неизведанная ошибка!');
        }

        return redirect()->route('panel.categories.index')->with('successStatus', 'Категория успешно добавлена!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::find($id);
        if(!$category){
            return redirect()->route('panel.categories.index')->with('errorStatus', 'Категории не существует, либо был удален!');
        }

        return view('panel.category-edit', compact(['category']));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Category::find($id)->delete();

        return redirect()->route('panel.categories.index')->with('successStatus', 'Успешно удалено!');
    }
}
