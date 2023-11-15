<?php

namespace App\Http\Controllers;

use App\Models\ChatModel;
use App\Models\message;
use App\Models\postads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ChatModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['chats'] = Message::groupBy('sender', 'product_id')
            ->join('postads', 'postads.ads_id', '=', 'messages.product_id')
            ->get();
        // return dd($data);

        return view('Frontend/chatlist', $data);
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

    public function loadmsg($product_id, $sender)
    {
        $data['chats'] = message::where('product_id', $product_id)
            ->join('postads', 'postads.ads_id', '=', 'messages.product_id')
            ->select('messages.*', 'postads.availability')
            ->get();
        $data['sender'] = $sender;

        return view('Frontend/messenger', $data);
    }
}
