<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index() {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    public function create() {
        return view('departments.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'created_by' => 'nullable|string|max:200',
        ]);
        Department::create($data);
        return redirect()->route('departments.index')->with('success', 'Department created!');
    }

    public function show($id) {
        $department = Department::findOrFail($id);
        return view('departments.show', compact('department'));
    }

    public function edit($id) {
        $department = Department::findOrFail($id);
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, $id) {
        $department = Department::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'created_by' => 'nullable|string|max:200',
        ]);
        $department->update($data);
        return redirect()->route('departments.index')->with('success', 'Department updated!');
    }

    public function destroy($id) {
        Department::destroy($id);
        return redirect()->route('departments.index')->with('success', 'Department deleted!');
    }
}

