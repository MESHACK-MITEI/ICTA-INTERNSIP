<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    // Show all departments
    public function index() {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    // Show form to create new department
    public function create() {
        return view('departments.create');
    }

    // Store new department
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'department_head' => 'required|string|max:255', // ✅ Added
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'created_by' => 'nullable|string|max:200',
        ]);

        Department::create($data);

        return redirect()->route('departments.index')->with('success', 'Department created!');
    }

    // Show one department
    public function show($id) {
        $department = Department::findOrFail($id);
        return view('departments.show', compact('department'));
    }

    // Show edit form
    public function edit($id) {
        $department = Department::findOrFail($id);
        return view('departments.edit', compact('department'));
    }

    // Update department
    public function update(Request $request, $id) {
        $department = Department::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'department_head' => 'required|string|max:255', // ✅ Added
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'created_by' => 'nullable|string|max:200',
        ]);

        $department->update($data);

        return redirect()->route('departments.index')->with('success', 'Department updated!');
    }

    // Delete department
    public function destroy($id) {
        Department::destroy($id);
        return redirect()->route('departments.index')->with('success', 'Department deleted!');
    }
}
