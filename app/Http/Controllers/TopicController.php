<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::orderByDesC('id')->get();
        return view('admin.topics.index', ['topics' => $topics]);
    }

    public function create()
    {
        return view('admin.topics.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'active' => 'required'
        ]);

        Topic::create($validated);

        return redirect()->route('admin.topics.index')->with('status', 'Topic created!');
    }

    public function show()
    {

    }

    public function edit(Topic $topic)
    {
        return view('admin.topics.edit', ['topic' => $topic]);
    }

    public function update(Request $request, Topic $topic)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'active' => 'required'
        ]);

        $topic->update($validated);

        return redirect()->route('admin.topics.index')->with('status', 'Topic updated!');
    }

    public function destroy(Topic $topic)
    {
        $topic->delete();

        return redirect()->route('admin.topics.index')->with('status', 'Topic deleted!');
    }

    public function activeToggle(Request $request)
    {
        $topic = Topic::findOrFail($request->id);
        $topic->active = !$topic->active;
        $topic->save();

        return response()->json([
            'topic' => $topic
        ]);
    }
}
