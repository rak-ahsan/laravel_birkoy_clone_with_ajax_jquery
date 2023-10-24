<?php

namespace App\Http\Controllers;

use App\Models\ChatModel;
use Illuminate\Http\Request;

class ChatModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('Frontend/chatlist');
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
    public function show(ChatModel $chatModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChatModel $chatModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChatModel $chatModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChatModel $chatModel)
    {
        //
    }
}
