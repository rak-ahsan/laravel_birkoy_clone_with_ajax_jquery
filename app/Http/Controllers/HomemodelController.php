<?php

namespace App\Http\Controllers;

use App\Models\Catagories;
use App\Models\Homemodel;
use Illuminate\Http\Request;

class HomemodelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['cata'] = Catagories::orderBy('cata_id', 'DESC')->get();
        return view('Frontend.content', $data);
    }

    public function cata($username)
    {
        $data['catagory'] = Catagories::orderBy('cata_id', 'DESC')->paginate(50);
        $data['username'] = $username;
        return view('Frontend.layout.browsbycata', $data);
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
    public function show(Homemodel $homemodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Homemodel $homemodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Homemodel $homemodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Homemodel $homemodel)
    {
        //
    }
}
