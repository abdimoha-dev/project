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
    public function pdf()
    {

        $assets=Assigned::all();
        $pdf=PDF::loadView('dashboard.admin.assets.assignedAssets',['assets'=>$assets]);
        return $pdf->download('assets.pdf');
    }
}
