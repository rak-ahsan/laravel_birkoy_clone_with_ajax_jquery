<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Membership;
use App\Models\postads;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;


class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($username, Request $request)
    {
        $data['user'] = User::where('username', $username)
            ->first();

        $data['ads'] = postads::where('user_name', $username)
            ->orderBy('ads_id', 'desc')
            ->where('ads_status', 4)
            ->get();

        $data['adsnum'] = postads::where('user_name', $username)->count();
        session()->put('adscount', $data['adsnum']);
        return view('Frontend.userprofile', $data);
    }

    // backend
    public function alluser()
    {
        $data['user'] = User::orderBy('id', 'DESC')->get();
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
}
