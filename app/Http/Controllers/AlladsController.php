<?php

namespace App\Http\Controllers;

use App\Models\Catagories;
use App\Models\image;
use App\Models\location;
use App\Models\postads;
use App\Models\status;
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
        $data['ads'] = postads::join('locations', 'postads.ads_loc', '=', 'locations.loc_id')
            ->join('catagories', 'postads.ads_cata', '=', 'catagories.cata_id')
            ->select('postads.*', 'locations.loc_name', 'catagories.cata_name')
            ->orderBy('ads_id', 'DESC')
            ->where('ads_status', 4)
            ->paginate(10);

        return view('Frontend.allads', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function adspost()
    {
        $data['location'] = location::orderBy('loc_id', 'DESC')->get();
        $data['catagory'] = Catagories::orderBy('cata_id', 'DESC')->get();
        $data['status'] = status::orderBy('status_id', 'DESC')->limit(2)->get();
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
            'pos_number' => 'required',
            'mainphoto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('adspost')->withErrors($validator)->withInput();
        }

        $postads = postads::create($request->except('images'));

        if ($request->mainphoto) {
            $ext = $request->mainphoto->getClientOriginalExtension();
            $newFileName = time() . '.' . $ext;
            $request->mainphoto->move(public_path() . '/img/ads', $newFileName); // This will save file in a folder
            $postads->mainphoto = $newFileName;
            $postads->save();
        }


        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = 'adspic' . time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("/img/ads"), $imageName);

                image::create([
                    'ads_id' => $postads->ads_id,
                    'imagename' => $imageName
                ]);
            }
        }

        return redirect()->route('adspost');
    }


    /**
     * Display the specified resource.
     */
    public function view()
    {
        return view('Frontend.adsupdate.viewads');
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

    // for backend

    public function alladsview()
    {
        $data['ads'] = postads::join('locations', 'postads.ads_loc', '=', 'locations.loc_id')
            ->join('catagories', 'postads.ads_cata', '=', 'catagories.cata_id')
            ->select('postads.*', 'locations.loc_name', 'catagories.cata_name')
            ->orderBy('ads_id', 'DESC')
            ->paginate(10);

        return view('backend.ads.viewallads', $data);
    }

    public function pendingads()
    {
        $data['ads'] = postads::join('locations', 'postads.ads_loc', '=', 'locations.loc_id')
            ->join('catagories', 'postads.ads_cata', '=', 'catagories.cata_id')
            ->select('postads.*', 'locations.loc_name', 'catagories.cata_name')
            ->where('ads_status', 3)
            ->orderBy('ads_id', 'DESC')
            ->paginate(10);

        return view('backend.ads.pendingads', $data);
    }

    public function adsedit($ads_id)
    {
        $data['status'] = status::orderby('status_id', 'desc')->limit(2)->get();
        $data['ads'] = postads::find($ads_id);
        return view('backend.ads.adsupdate', $data);
    }

    public function bupdate(Request $request, $ads_id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'pos_number' => 'required',
            'ads_status' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('editads', $ads_id)->withErrors($validator)->withInput();
        }

        $uads = postads::find($ads_id);
        $uads->fill($request->post())->save();

        $postadsModel = Postads::find($ads_id);
        $postadsModel->fill($request->all())->save();

        return back();
    }
}
