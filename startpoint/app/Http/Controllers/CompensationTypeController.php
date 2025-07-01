<?php
namespace App\Http\Controllers;

use App\Models\CompensationType;
use Illuminate\Http\Request;

class CompensationTypeController extends Controller
{
    public function index()
    {
        $compensations = CompensationType::all();
        return view('compensations.index', compact('compensations'));
    }

    public function create()
    {
        return view('compensations.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'created_by' => 'nullable|string|max:200',
        ]);

        CompensationType::create($data);

        return redirect()->route('compensations.index')->with('success', 'Compensation type created!');
    }

    public function show($id)
    {
        $compensation = CompensationType::findOrFail($id);
        return view('compensations.show', compact('compensation'));
    }

    public function edit($id)
    {
        $compensation = CompensationType::findOrFail($id);
        return view('compensations.edit', compact('compensation'));
    }

    public function update(Request $request, $id)
    {
        $compensation = CompensationType::findOrFail($id);

        $data = $request->validate([
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'created_by' => 'nullable|string|max:200',
        ]);

        $compensation->update($data);

        return redirect()->route('compensations.index')->with('success', 'Compensation type updated!');
    }

    public function destroy($id)
    {
        $compensation = CompensationType::findOrFail($id);
        $compensation->delete();

        return redirect()->route('compensations.index')->with('success', 'Deleted successfully.');
    }
}
