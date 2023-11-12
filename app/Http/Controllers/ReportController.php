<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ReportController extends Controller
{
public function store(Request $request){

    $validator = Validator::make($request->all(), [
        'reports' => 'required|max:500',
    ]);
    if ($validator->passes()) {
        Report::create($request->post());
    }
}

}
