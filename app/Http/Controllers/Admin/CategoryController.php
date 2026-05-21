<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect('/admin/categories');
    }

    public function edit($id)
{
    $category = Category::findOrFail($id);

    return view('admin.categories.edit', compact('category'));
}

public function update(Request $request, $id)
{
    $category = Category::findOrFail($id);

    $category->update([
        'name' => $request->name,
        'slug' => Str::slug($request->name),
    ]);

    return redirect('/admin/categories');
}

public function destroy($id)
{
    Category::destroy($id);

    return redirect('/admin/categories');
}
}