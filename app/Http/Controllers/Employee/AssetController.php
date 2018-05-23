<?php

namespace App\Http\Controllers\Employee;

use App\Models\Assigned;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssetController extends Controller
{
    public function showMyAssets()
    {
        return view('dashboard.employee.assets.myAssets',[
            'assets'=>Assigned::where('employeeId', auth()->user()->id)->get(),
        ]);
    }
}
