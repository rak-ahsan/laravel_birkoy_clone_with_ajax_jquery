<?php

namespace App\Http\Controllers;

use App\Models\Catagories;
use Illuminate\Http\Request;

class CatagoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.catagories.addcatagories');
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
    public function show(Catagories $catagories)
    {
        //
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
    public function update(Request $request, Catagories $catagories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catagories $catagories)
    {
        //
    }
}
