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
        SectionItem::create([
            'section_id' => $request->section_id,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect('/admin/section-items');
    }
}