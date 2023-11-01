<?php

namespace App\Http\Controllers;

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

        $data['adsnum'] = postads::where('user_name',$username)->count();
        session()->put('adscount',$data['adsnum']);
        return view('Frontend.userprofile', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserProfile $userProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserProfile $userProfile)
    {
        //
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
}
