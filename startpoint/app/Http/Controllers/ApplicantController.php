<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    // index() - Display all applicants
    public function index()
    {
        $applicants = Applicant::all();
        return view('applicants.index', compact('applicants'));
    }

    // create() - Show form to add new applicant
    public function create()
    {
        return view('applicants.create');
    }

    // store() - Save new applicant
   public function store(Request $request)
{
    $data = $request->validate([
        'title'         => 'required|string|max:10',
        'first_name'    => 'required|string|max:255',
        'middle_name'   => 'nullable|string|max:255',
        'last_name'     => 'required|string|max:255',
        'email_address' => 'required|email|unique:applicants,email_address',
        'phone_number'  => 'required|string|max:20',
        'cohort'        => 'nullable|string|max:100',
        'is_active'     => 'boolean',
        'created_by'    => 'nullable|string|max:200',
        // no password here
    ]);

    // assign & hash a default password
    $data['password'] = bcrypt('password');

    Applicant::create($data);

    return redirect()->route('applicants.index')->with('success', 'Applicant created! Default password is “password”');
}

    // show() - Display one applicant
    public function show($id)
    {
        $applicant = Applicant::findOrFail($id);
        return view('applicants.show', compact('applicant'));
    }

    // edit() - Show form to edit applicant
    public function edit($id)
    {
        $applicant = Applicant::findOrFail($id);
        return view('applicants.edit', compact('applicant'));
    }

    // update() - Save edited data
    public function update(Request $request, $id)
    {
        $applicant = Applicant::findOrFail($id);

        $data = $request->validate([
    'title' => 'required|string|max:10',
    'first_name' => 'required|string|max:255',
    'middle_name' => 'nullable|string|max:255',
    'last_name' => 'required|string|max:255',
    'email_address' => 'required|email|unique:applicants,email_address,' . $applicant->id ?? '',
    'phone_number' => 'required|string|max:20',
    'cohort' => 'nullable|string|max:100',
    'is_active' => 'boolean',
    'created_by' => 'nullable|string|max:200',
]);


        $applicant->update($data);

        return redirect()->route('applicants.index')->with('success', 'Applicant updated successfully!');
    }

    // destroy() - Delete applicant
    public function destroy($id)
    {
        $applicant = Applicant::findOrFail($id);
        $applicant->delete();

        return redirect()->route('applicants.index')->with('success', 'Applicant deleted successfully!');
    }
}

