<?php

namespace App\Http\Controllers;

use App\Models\ContactForm; 
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        
        ContactForm::create($validatedData);

        
        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
