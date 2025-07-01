<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    // index() - List all titles
    public function index()
    {
        $titles = Title::all();
        return view('titles.index', compact('titles'));
    }

    // create() - Show form to create a title
    public function create()
    {
        return view('titles.create');
    }

    // store() - Save a new title to the database
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'created_by' => 'nullable|string|max:200',
        ]);

        Title::create($data);

        return redirect()->route('titles.index')->with('success', 'Title created successfully!');
    }

    // show() - Display a specific title
    public function show($id)
    {
        $title = Title::findOrFail($id);
        return view('titles.show', compact('title'));
    }

    // edit() - Show form to edit a title
    public function edit($id)
    {
        $title = Title::findOrFail($id);
        return view('titles.edit', compact('title'));
    }

    // update() - Update a title
    public function update(Request $request, $id)
    {
        $title = Title::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'created_by' => 'nullable|string|max:200',
        ]);

        $title->update($data);

        return redirect()->route('titles.index')->with('success', 'Title updated successfully!');
    }

    // destroy() - Delete a title
    public function destroy($id)
    {
        $title = Title::findOrFail($id);
        $title->delete();

        return redirect()->route('titles.index')->with('success', 'Title deleted successfully!');
    }
}
