<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\SectionItem;
use Illuminate\Http\Request;

class SectionItemController extends Controller
{
    public function index()
    {
        $items = SectionItem::with('section')->latest()->get();

        return view('admin.section-items.index', compact('items'));
    }

    public function create()
    {
        $sections = Section::all();

        return view('admin.section-items.create', compact('sections'));
    }

   public function store(Request $request)
{
    $request->validate([
        'section_id' => 'required',
        'title' => 'required',
        'content' => 'required',
    ]);

    SectionItem::create([
        'section_id' => $request->section_id,
        'title' => $request->title,
        'content' => $request->content,
    ]);

    return redirect('/admin/section-items')
        ->with('success', 'Section item berhasil ditambahkan');
}

public function edit($id)
{
    $item = SectionItem::findOrFail($id);

    $sections = Section::all();

    return view('admin.section-items.edit', compact('item', 'sections'));
}

public function update(Request $request, $id)
{
    $item = SectionItem::findOrFail($id);

    $item->update([
        'section_id' => $request->section_id,
        'title' => $request->title,
        'content' => $request->content,
    ]);

    return redirect('/admin/section-items');
}

public function destroy($id)
{
    $item = SectionItem::findOrFail($id);

    $item->delete();

    return redirect('/admin/section-items');
}
}