<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\ContentItem;
use Illuminate\Http\Request;

class ContentItemController extends Controller
{
    public function index()
    {
        $items = ContentItem::with('content')->latest()->get();

        return view('admin.content-items.index', compact('items'));
    }

    public function create()
    {
        $contents = Content::all();

        return view('admin.content-items.create', compact('contents'));
    }

    public function store(Request $request)
    {
        ContentItem::create([
            'content_id' => $request->content_id,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect('/admin/content-items');
    }

    public function edit($id)
    {
        $item = ContentItem::findOrFail($id);

        $contents = Content::all();

        return view('admin.content-items.edit', compact('item', 'contents'));
    }

    public function update(Request $request, $id)
    {
        $item = ContentItem::findOrFail($id);

        $item->update([
            'content_id' => $request->content_id,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect('/admin/content-items');
    }

    public function destroy($id)
    {
        $item = ContentItem::findOrFail($id);

        $item->delete();

        return redirect('/admin/content-items');
    }
}