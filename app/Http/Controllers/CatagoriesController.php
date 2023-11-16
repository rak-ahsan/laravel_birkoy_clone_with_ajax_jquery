<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Catagories;
use App\Models\postads;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatagoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['catagory'] = Catagories::orderBy('cata_id', 'DESC')->paginate(5);
        return view('backend.catagories.catagoryview', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.catagories.categorycreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'cata_name' => 'required',
            'cata_icon' => 'required',
            'cata_username' => 'required'
        ]);

        if ($validator->passes()) {
            Catagories::create($request->post());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($cata_id)
    {
        $data['cata'] = Catagories::find($cata_id);

        return view('backend.catagories.categoryupdate', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catagories $catagories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catagories $catagories, $cata_id)
    {
        $validator = Validator::make($request->all(), [
            'cata_name' => 'required',
            'cata_icon' => 'required',
            'cata_username' => 'required'
        ]);

        if ($validator->passes()) {
            $catagories = Catagories::find($cata_id);
            $catagories->fill($request->post())->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catagories $catagories, $cata_id)
    {
        $data = Catagories::find($cata_id);
        $data->delete();
        return back();
    }

    public function dashboard()
    {
        $data['ads'] = postads::join('locations', 'postads.ads_loc', '=', 'locations.loc_id')
            ->join('catagories', 'postads.ads_cata', '=', 'catagories.cata_id')
            ->select('postads.*', 'locations.loc_name', 'catagories.cata_name')
            ->where('ads_status', 3)
            ->orderBy('ads_id', 'DESC')
            ->paginate(10);

        $data['ads'] = Report::join('postads', 'reports.ads_id', '=', 'postads.ads_id')
            ->select('reports.*', 'postads.*')
            ->orderBy('report_id', 'DESC')
            ->paginate(10);
        return view('backend.dashboard', $data);
    }
}
