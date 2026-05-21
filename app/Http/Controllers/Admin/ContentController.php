<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::with('category')->latest()->get();

        return view('admin.contents.index', compact('contents'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.contents.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Content::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect('/admin/contents');
    }

    public function edit($id)
    {
        $content = Content::findOrFail($id);

        $categories = Category::all();

        return view('admin.contents.edit', compact('content', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $content = Content::findOrFail($id);

        $content->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect('/admin/contents');
    }

    public function destroy($id)
    {
        $content = Content::findOrFail($id);

        $content->delete();

        return redirect('/admin/contents');
    }
}