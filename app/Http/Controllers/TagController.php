<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function store(StoreTagRequest $request)
    {
        $validated = $request->validated();

        Tag::create([
            'name' => $validated['name'],
        ]);

        return redirect()->route('admin');
    }

    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(StoreTagRequest $request, Tag $tag)
    {
        $validated = $request->validated();

        $tag->update([
            'name' => $validated['name'],
        ]);

        return redirect()->route('admin');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('admin');
    }
}