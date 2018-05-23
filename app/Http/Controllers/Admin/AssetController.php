<?php

namespace App\Http\Controllers\Admin;

use App\Models\Borrow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssetController extends Controller
{
    /**
     * display all borrowing requests from employees
     */
    public function showBorrowRequests()
    {
        return view('dashboard.admin.users.borrow',[
            'assets'=>Borrow::get()
        ]);
    }
}
