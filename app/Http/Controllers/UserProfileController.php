<?php

namespace App\Http\Controllers;

use App\Models\Catagories;
use App\Models\location;
use Illuminate\Support\Facades\Validator;
use App\Models\Membership;
use App\Models\postads;
use App\Models\User;
use App\Models\status;
use Illuminate\Http\Request;


class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($username, Request $request)
    {
        $data['user'] = User::where('username', $username)
            ->join('locations', 'locations.loc_id', '=', 'users.location')
            ->first();

        $data['ads'] = postads::where('user_name', $username)
            ->join('locations', 'postads.ads_loc', '=', 'locations.loc_id')
            ->select('postads.*', 'locations.loc_name', 'catagories.cata_name')
            ->join('catagories', 'postads.ads_cata', '=', 'catagories.cata_id')
            ->orderBy('ads_id', 'desc')
            ->where('ads_status', 4)
            ->get();


        $data['pendingads'] = postads::where('user_name', $username)
            ->join('locations', 'postads.ads_loc', '=', 'locations.loc_id')
            ->select('postads.*', 'locations.loc_name', 'catagories.cata_name')
            ->join('catagories', 'postads.ads_cata', '=', 'catagories.cata_id')
            ->orderBy('ads_id', 'desc')
            ->where('ads_status', 3)
            ->get();

        $data['mem'] = Membership::where('user_name', $username)
            ->orderBy('mem_id', 'desc')
            ->first();
        // return dd($data);

        $data['adsnum'] = postads::where('user_name', $username)->count();
        return view('Frontend.userprofile', $data);
    }

    // backend
    public function alluser()
    {
        $data['user'] = User::orderBy('id', 'DESC')->paginate(10);;
        return view('backend.user.alluser', $data);
    }

    public function freemember()
    {
        $data['user'] = User::orderBy('id', 'DESC')
            ->where('membership', 1)
            ->get();
        return view('backend.user.freeuser', $data);
    }

    public function paidmember()
    {
        $data['user'] = User::orderBy('id', 'DESC')
            ->where('membership', 2)
            ->get();
        return view('backend.user.paidmember', $data);
    }

    public function pending()
    {
        $data['user'] = Membership::orderBy('mem_id', 'DESC')
            ->join('users', 'memberships.user_id', '=', 'users.id')
            ->get();
        return view('backend.user.pendinguser', $data);
    }

    public function getuser($username)
    {
        $data['user'] = User::orderBy('id', 'DESC')
            ->where('username', $username)
            ->first();
        return view('backend.user.update', $data);
    }

    public function userupdate(Request $request, $username)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'number' => 'required',
            'membership' => 'required',
        ]);

        if ($validator->passes()) {
            $users = User::where('username', $username)->first();
            $users->fill($request->all())->save();
            return back();
        }
    }

    public function destroy($id)
    {
        $data = User::where('id', $id);
        $data->delete();
        return back();
    }

    // settings part

    public function settings()
    {
        return view('Frontend.layout.profilesettings');
    }

    public function userads()
    {
        $data['ads'] = postads::join('locations', 'postads.ads_loc', '=', 'locations.loc_id')
            ->join('catagories', 'postads.ads_cata', '=', 'catagories.cata_id')
            ->join('statuses', 'postads.ads_status', '=', 'statuses.status_id')
            ->select('postads.*', 'locations.loc_name', 'catagories.cata_name', 'statuses.status_name')
            ->orderBy('ads_id', 'DESC')
            ->paginate(10);
        return view('Frontend.userprofileads', $data);
    }

    public function useradsedit($ads_id)
    {
        $data['location'] = location::orderBy('loc_id', 'DESC')->get();
        $data['catagory'] = Catagories::orderBy('cata_id', 'DESC')->get();
        $data['status'] = status::orderBy('status_id', 'DESC')->limit(2)->get();
        $data['ads'] = postads::find($ads_id);
        return view('Frontend.useradsedit', $data);
    }
}
