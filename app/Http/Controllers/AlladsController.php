<?php

namespace App\Http\Controllers;

use App\Models\Catagories;
use App\Models\location;
use App\Models\postads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlladsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['catagory'] = Catagories::orderBy('cata_id', 'DESC')->paginate(30);
        return view('Frontend.allads', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function adspost()
    {
        $data['location'] = location::orderBy('loc_id', 'DESC')->get();
        $data['catagory'] = Catagories::orderBy('cata_id', 'DESC')->get();
        return view('Frontend.addspost', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ads_loc' => 'required',
            'ads_cata' => 'required',
            'condtions' => 'required',
            'title' => 'required',
            'authenticity' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'nego' => 'required',
            'pos_number' => 'required',
        ]);

        if ($validator->passes()) {
            postads::create($request->post());
            return redirect()->route('adspost');
        } else {
            return redirect()->route('adspost')->withErrors($validator)->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
