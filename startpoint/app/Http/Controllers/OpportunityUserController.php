<?php

namespace App\Http\Controllers;

use App\Models\OpportunityUser;
use Illuminate\Http\Request;

class OpportunityUserController extends Controller
{
    public function index() {
        $records = OpportunityUser::all();
        return view('opportunity_users.index', compact('records'));
    }

    public function create() {
        return view('opportunity_users.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'user_id' => 'required|integer', // or 'applicant_id'
            'opportunity_id' => 'required|integer',
            'is_active' => 'boolean',
        ]);
        OpportunityUser::create($data);
        return redirect()->route('opportunity-users.index')->with('success', 'Record created!');
    }

    public function show($id) {
        $record = OpportunityUser::findOrFail($id);
        return view('opportunity_users.show', compact('record'));
    }

    public function edit($id) {
        $record = OpportunityUser::findOrFail($id);
        return view('opportunity_users.edit', compact('record'));
    }

    public function update(Request $request, $id) {
        $record = OpportunityUser::findOrFail($id);
        $data = $request->validate([
            'user_id' => 'required|integer',
            'opportunity_id' => 'required|integer',
            'is_active' => 'boolean',
        ]);
        $record->update($data);
        return redirect()->route('opportunity-users.index')->with('success', 'Updated!');
    }

    public function destroy($id) {
        OpportunityUser::destroy($id);
        return redirect()->route('opportunity-users.index')->with('success', 'Deleted!');
    }
}

