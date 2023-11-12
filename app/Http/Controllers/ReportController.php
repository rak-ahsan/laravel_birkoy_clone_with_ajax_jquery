<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'reports' => 'required|max:500',
        ]);
        if ($validator->passes()) {
            Report::create($request->post());
        }
    }

    public function reportedads()
    {
        $data['ads'] = Report::join('postads', 'reports.ads_id', '=', 'postads.ads_id')
            ->select('reports.*', 'postads.title')
            ->orderBy('report_id', 'DESC')
            ->paginate(10);
        return view('backend.ads.reportedads.reportedads', $data);
    }

    public function reportup($id)
    {
        $data['ads'] = Report::find($id);
        return view('backend.ads.reportedads.reportup', $data);
    }

    public function reportups($id, Request $request)
    {
        $data = Report::find($id);
        $data->fill($request->post())->save();

        return redirect('reportedads');
    }
}
