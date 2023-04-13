<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([
            'search' => 'nullable|string|min:3|max:50',
        ]);

        $query = Page::orderByDesc('id');
        
        $originalCount = $query->count();
        
        if($search = $validated['search'] ?? null){
            $query->where('title', 'like', "%{$search}%");
        }

        $pages = $query->paginate(5)->withQueryString();

        return view('admin.pages.index', ['pages' => $pages, 'originalCount' => $originalCount]);
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'active' => 'required'
        ]);

        Page::create($validated);

        return redirect()->route('admin.pages.index')->with('status', 'Page created!');
    }

    public function show()
    {

    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', ['page' => $page]);
    }

    public function update(Request $request, Page $page)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'active' => 'required'
        ]);

        $page->update($validated);

        return redirect()->route('admin.pages.index')->with('status', 'Page updated!');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('admin.pages.index')->with('status', 'Page deleted!');
    }

    public function activeToggle(Request $request)
    {
        $page = Page::findOrFail($request->id);
        $page->active = !$page->active;
        $page->save();

        return response()->json([
            'page' => $page
        ]);
    }
}
