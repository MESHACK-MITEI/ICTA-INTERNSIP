<?php
namespace App\Http\Controllers;

use App\Models\Opportunity;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    // index() - List all opportunities
    public function index()
    {
        $opportunities = Opportunity::all();
        return view('opportunities.index', compact('opportunities'));
    }

    // create() - Show form to create new opportunity
    public function create()
    {
        return view('opportunities.create');
    }

    // store() - Save new opportunity to database
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'opportunity_type' => 'required|string|max:255',
            'opportunity_description' => 'nullable|string',
            'core_competencies' => 'nullable|string',
            'compensation_type' => 'required|string|max:255',
            'compensation_currency' => 'required|string|max:10',
            'compensation_amount' => 'required|numeric',
            'expiry_date' => 'required|date',
            'is_active' => 'boolean',
            'created_by' => 'nullable|string|max:200',
        ]);

        Opportunity::create($data);

        return redirect()->route('opportunities.index')->with('success', 'Opportunity created successfully!');
    }

    // show() - Display a specific opportunity
    public function show($id)
    {
        $opportunity = Opportunity::findOrFail($id);
        return view('opportunities.show', compact('opportunity'));
    }

    // edit() - Show form to edit opportunity
    public function edit($id)
    {
        $opportunity = Opportunity::findOrFail($id);
        return view('opportunities.edit', compact('opportunity'));
    }

    // update() - Update opportunity record
    public function update(Request $request, $id)
    {
        $opportunity = Opportunity::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'opportunity_type' => 'required|string|max:255',
            'opportunity_description' => 'nullable|string',
            'core_competencies' => 'nullable|string',
            'compensation_type' => 'required|string|max:255',
            'compensation_currency' => 'required|string|max:10',
            'compensation_amount' => 'required|numeric',
            'expiry_date' => 'required|date',
            'is_active' => 'boolean',
            'created_by' => 'nullable|string|max:200',
        ]);

        $opportunity->update($data);

        return redirect()->route('opportunities.index')->with('success', 'Opportunity updated successfully!');
    }

    // destroy() - Delete opportunity
    public function destroy($id)
    {
        $opportunity = Opportunity::findOrFail($id);
        $opportunity->delete();

        return redirect()->route('opportunities.index')->with('success', 'Opportunity deleted successfully!');
    }
}

