<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Campaign;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function create()
    {
        $campaigns = Campaign::all();

        return view('donation', compact('campaigns'));
    }

    public function store(Request $request)
    {
        Donation::create([
            'campaign_id' => $request->campaign_id,
            'donor_name' => $request->donor_name,
            'amount' => $request->amount,
            'message' => $request->message
        ]);

        return redirect('/campaign')
        ->with('success', 'Donasi berhasil disimpan');;
    }
}