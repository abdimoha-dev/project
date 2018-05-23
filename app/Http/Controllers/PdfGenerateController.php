<?php

namespace App\Http\Controllers;

use App\Models\Assigned;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;


class PdfGenerateController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function htmltopdfview(Request $request)
    {
        $users = DB::table("asigns")->get();
        view()->share('users',$users);

        if($request->has('download')){
            // Set extra option
            PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
            // pass view file
            $pdf = PDF::loadView('dashboard/admin/assets/assignedAssets');
            // download pdf
            return $pdf->download('pdfview.pdf');
        }
        return view('dashboard/admin/assets/assignedAssets');

    }
}
