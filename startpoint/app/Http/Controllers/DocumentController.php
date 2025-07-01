<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index() {
        $documents = Document::all();
        return view('documents.index', compact('documents'));
    }

    public function create() {
        return view('documents.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'user_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file_path' => 'required|string|max:255',
            'file_name' => 'required|string|max:255',
            'file_extension' => 'required|string|max:10',
            'file_size_in_kilobytes' => 'required|numeric',
            'is_active' => 'boolean',
            'created_by' => 'nullable|string|max:200',
        ]);
        Document::create($data);
        return redirect()->route('documents.index')->with('success', 'Document added!');
    }

    public function show($id) {
        $document = Document::findOrFail($id);
        return view('documents.show', compact('document'));
    }

    public function edit($id) {
        $document = Document::findOrFail($id);
        return view('documents.edit', compact('document'));
    }

    public function update(Request $request, $id) {
        $document = Document::findOrFail($id);
        $data = $request->validate([
            'user_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file_path' => 'required|string|max:255',
            'file_name' => 'required|string|max:255',
            'file_extension' => 'required|string|max:10',
            'file_size_in_kilobytes' => 'required|numeric',
            'is_active' => 'boolean',
            'created_by' => 'nullable|string|max:200',
        ]);
        $document->update($data);
        return redirect()->route('documents.index')->with('success', 'Document updated!');
    }

    public function destroy($id) {
        Document::destroy($id);
        return redirect()->route('documents.index')->with('success', 'Deleted!');
    }
}

