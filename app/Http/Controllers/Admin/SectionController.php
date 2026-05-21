<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::with('category')->latest()->get();

        return view('admin.sections.index', compact('sections'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.sections.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        Section::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect('/admin/sections');
    }

    public function edit($id)
    {
        $section = Section::findOrFail($id);

        $categories = Category::all();

        return view('admin.sections.edit', compact('section', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $section = Section::findOrFail($id);

        $section->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect('/admin/sections');
    }

    public function destroy($id)
    {
        $section = Section::findOrFail($id);

        $section->delete();

        return redirect('/admin/sections');
    }
}