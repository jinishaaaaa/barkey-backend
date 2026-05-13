<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
             $request->validate([
            'fullname' => 'required|string|max:255',
            'phonenumber' => 'required|string|max:20',
            'emailaddress' => 'required|email|max:255',
            'courseselection' => 'required|string|max:255',
            'durationselection' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Save the validated data to the database
        Form::create($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    public function table()
{
    $datas = Form::all();

    return view('table', compact('datas'));
}
}
