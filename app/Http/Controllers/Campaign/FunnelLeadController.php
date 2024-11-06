<?php

namespace App\Http\Controllers\Campaign;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\FunnelLead;
use App\Traits\CustomLogTrait;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FunnelLeadController extends Controller
{
    use CustomLogTrait;
    public function store(Request $request)
    {
        try {
            $campaign = Campaign::find((int)$request->campaign_id);
            if(!$campaign){
                return response()->json([
                    'status' => 404,
                    'message' => "Not Found"
                ], 404);
            }
            FunnelLead::insert([
                'sponsor_id' => $campaign->user_id,
                'name' => $request->name,
                'email' => $request->email,
                'fone' => $request->phone,
                'campaign_id' => $campaign->id
            ]);
            $this->createLog('Campaign created successfully', 201, 'success', $campaign->user_id);
            return response()->json([
                'status' => 200,
                'message' => "Success"
            ], 200);
        } catch (\Exception $e) {
            $this->errorCatch($e->getMessage(), $campaign->user_id);
            return response()->json([
                'status' => 500,
                'message' => "Internal Error"
            ], 500);
        }
    }
}
