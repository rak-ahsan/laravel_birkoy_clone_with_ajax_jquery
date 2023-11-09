<?php

namespace App\Http\Controllers;

use App\Models\ChatModel;
use App\Models\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChatModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['chats'] = message::get();
      return view('Frontend/chatlist',$data);
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
        $validator = Validator::make($request->all(), [
            'sender' => 'required',
            'product_id' => 'required',
            'reciver' => 'required',
            'message' => 'required'
        ]);

        if ($validator->passes()) {
            message::create($request->post());
        }    

        return back();
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
