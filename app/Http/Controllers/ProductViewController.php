<?php

namespace App\Http\Controllers;

use App\Models\image;
use App\Models\postads;
use App\Models\Like;
use App\Models\comment;
use Illuminate\Http\Request;

class ProductViewController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index($post)
    {
        $data['img'] = image::where('ads_id', $post)->get();
        $data['like'] = Like::where('product_id', $post)->get();
        $data['comment'] = comment::where('product_id', $post)
            ->join('users', 'users.id', '=', 'comments.user_id')
            ->orderby('comment_id', 'DESC')
            ->get();

        $data['liker'] = Like::where('user_id', auth()->user()->id)->first();
        $data['singelproduct'] = postads::join('users', 'users.username', '=', 'postads.user_name')
            ->join('locations', 'postads.ads_loc', '=', 'locations.loc_id')->select(
                'postads.*',
                'locations.loc_name',
                'users.name',
                'users.email',
                'users.number',
                'users.username'
            )->find($post);
        return view('Frontend.productview', $data);
    }

    public function like($id)
    {
        $data = [
            'product_id' => $id,
            'user_id' => auth()->user()->id,
        ];

        like::create($data);
        return back();
    }

    public function dlike($id)
    {
        $data = Like::where('user_id', $id);
        $data->delete();
        return back();
    }

    public function comment($id, Request $request)
    {
        $data = [
            'product_id' => $id,
            'user_id' => auth()->user()->id,
            'comment' => $request->comment,
        ];
        Comment::create($data);
        return redirect()->back();
    }

    public function dcomment($id)
    {
        $data = Comment::where('comment_id', $id);
        $data->delete();
        return redirect()->back();
    }
}
