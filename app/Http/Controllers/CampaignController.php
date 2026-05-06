<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index(){
        $campaigns = Campaign::all();
        return view('campaign.index', compact('campaigns'));
    }

    public function edit($id){
        $campaign = Campaign::findOrFail($id);
        return view('campaign.edit', compact('campaign'));
    }

    public function update(Request $request, $id){
        $campaign = Campaign::findOrFail($id);

        $campaign->update([
            'title' => $request->title,
            'target_donation' => $request->target_donation,
            'collected_donation' => $request->collected_donation
        ]);

        return redirect('/campaign')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id){
        $campaign = Campaign::findOrFail($id);
        $campaign->delete();

        return redirect('/campaign')->with('success', 'Data berhasil dihapus');
    }
}