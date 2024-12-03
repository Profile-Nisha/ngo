<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'amount' => 'required|numeric|min:1',
        'donation_type' => 'required|string',
    ]);

    // Create a new donation record
    Donation::create([
        'amount' => $validatedData['amount'],
        'donation_type' => $validatedData['donation_type'],
    ]);

    // Get the latest donation
    $lastDonation = Donation::latest()->first();

    // Pass the last donation amount to the session
    return redirect()->route('payment')->with('lastDonationAmount', $lastDonation->amount);
}
}

