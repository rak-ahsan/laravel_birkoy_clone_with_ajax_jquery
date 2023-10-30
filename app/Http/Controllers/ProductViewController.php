<?php

namespace App\Http\Controllers;

use App\Models\image;
use App\Models\postads;
use App\Models\ProductView;
use Illuminate\Http\Request;

class ProductViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($post)
    {
        $data['img'] = image::where('ads_id', $post)->get();

        $data['singelproduct'] = postads::join('users', 'users.id', '=', 'postads.user_id')
            ->join('locations', 'postads.ads_loc', '=', 'locations.loc_id')
            ->select(
                'postads.*',
                'locations.loc_name',
                'users.name',
                'users.email',
                'users.number',
                'users.username'
            )
            ->find($post);
        return view('Frontend.productview', $data);
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
    public function show(ProductView $productView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductView $productView)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductView $productView)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductView $productView)
    {
        //
    }
}
