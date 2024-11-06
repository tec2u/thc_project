<?php

namespace App\Http\Controllers\Campaign;

use App\Http\Controllers\Controller;
use App\Http\Requests\Campaign\CampaignRequest;
use App\Models\Campaign;
use App\Models\FunnelLead;
use App\Traits\CustomLogTrait;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CampaignController extends Controller
{
    use CustomLogTrait;
    public function index()
    {
        $data = Campaign::where('user_id', Auth::user()->id)->paginate(10);
        return view('campaign.list', compact('data'));
    }

    public function funnel()
    {
        $data = FunnelLead::where('sponsor_id', Auth::user()->id)->get();
        // dd($data->campaign);
        return view('campaign.subscribed', compact('data'));
    }

    public function destroy($id)
    {
        try {
            $data = Campaign::find($id);
            $data->delete();
            $this->createLog('Campaign Deleted', 201, 'success', auth()->user()->id);
            Alert::success(__('Campaign Deleted'));
            return redirect()->back();
        } catch (\Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            Alert::warning(__('Internal Error'));
            return redirect()->back();
        }
    }

    public function get($id)
    {

        $data = Campaign::find($id);
        return response()->json([
            "data" => $data
        ]);
    }


    public function create()
    {
        return view('campaign.create');
    }

    public function store(CampaignRequest $request)
    {
        try {
            Campaign::create([
                'user_id' =>   Auth::user()->id,
                'name_campaign' =>     $request->name_campaign,
                'status' =>     $request->status,
            ]);

            $this->createLog('Campaign created successfully', 201, 'success', auth()->user()->id);
            Alert::success(__('Campaign created successfully'));
            return redirect()->back();
        } catch (\Exception $e) {
            $this->errorCatch($e->getMessage(), auth()->user()->id);
            Alert::warning(__('Internal Error'));
            return redirect()->back();
        }
    }

    public function update(CampaignRequest $request)
    {
        try {
            Campaign::find($request->id_campaign)->update([
                'user_id' =>    auth()->user()->id,
                'name_campaign' =>     $request->name_campaign,
                'status' =>     $request->status,
            ]);

            $this->createLog('Campaign updated successfully', 201, 'success', auth()->user()->id);
            Alert::success(__('Campaign update successfully'));
            return redirect()->back();
        } catch (\Exception $e) {

            $this->errorCatch($e->getMessage(), auth()->user()->id);
            Alert::warning(__('Internal Error'));
            return redirect()->back();
        }
    }
}
