<?php

namespace App\Http\Controllers;

use App\Models\OpportunityType;
use Illuminate\Http\Request;

class OpportunityTypeController extends Controller
{
    public function index() {
        $types = OpportunityType::all();
        return view('opportunity_types.index', compact('types'));
    }

    public function create() {
        return view('opportunity_types.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'created_by' => 'nullable|string|max:200',
        ]);
        OpportunityType::create($data);
        return redirect()->route('opportunity-types.index')->with('success', 'Opportunity Type created!');
    }

    public function show($id) {
        $type = OpportunityType::findOrFail($id);
        return view('opportunity_types.show', compact('type'));
    }

    public function edit($id) {
        $type = OpportunityType::findOrFail($id);
        return view('opportunity_types.edit', compact('type'));
    }

    public function update(Request $request, $id) {
        $type = OpportunityType::findOrFail($id);
        $data = $request->validate([
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'created_by' => 'nullable|string|max:200',
        ]);
        $type->update($data);
        return redirect()->route('opportunity-types.index')->with('success', 'Updated successfully!');
    }

    public function destroy($id) {
        OpportunityType::destroy($id);
        return redirect()->route('opportunity-types.index')->with('success', 'Deleted successfully!');
    }
}
