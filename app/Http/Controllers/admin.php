<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class admin extends Controller
{

    public function index()
    {
        if (Auth::user()->role == 1) {
            return redirect('alluser');
        } else {
            return redirect('allads');
        }
    }
}
