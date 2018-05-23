<?php

namespace App\Http\Controllers\Employee;

use App\Http\Requests\BorrowRequest;
use App\Models\Assigned;
use App\Models\Borrow;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssetController extends Controller
{
    /**
     * display assets assigned per user
     */
    public function showMyAssets()
    {
        return view('dashboard.employee.assets.myAssets', [
            'assets' => Assigned::where('employeeId', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Display available assets categories
     */
    public function borrowAsset()
    {
        return view('dashboard.employee.assets.borrow', [
            'assets' => Category::get(['name', 'id']),
        ]);
    }
/*
 * save borrowing requests
 */
    public function saveAsset(BorrowRequest$request)
    {
        Borrow::create([
            'employeeId' => auth()->user()->id,
            'category'   => $request->category,
            'itemName'   => $request->itemName,
            'urgency'    => $request->urgency,
        ]);

        return redirect('home')->with(session()->flash('success-message', ['Details Added Successfull ']));
    }
}
