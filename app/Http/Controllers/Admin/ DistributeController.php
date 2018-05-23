<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\DistributeRequest;
use App\Models\Asset;
use App\Models\Assigned;
use App\MOdels\Assignment;
use App\Models\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\Assign;

class  DistributeController extends Controller
{
    public function showAllUser()
    {
        return view('dashboard.admin.users.employees', [
            'users' => User::where('role', 'EMPLOYEE')->get(),
        ]);
    }

    public function showAssignForm()
    {
        return view('dashboard.admin.assets.assignments', [
            'assets' => Asset::get(['categoryId', 'name']),
        ]);
    }

    public function distribute(Request $request,$userId)
    {
//       dd($request->toArray());

        Assigned::create([
            'category'     => $request->category,
            'ItemName'     => $request->itemName,
            'duration'     => $request->duration,
            'serialNumber' => $request->serialNumber,
            'employeeId'   => $userId,
            'issuedBy'     => auth()->user()->id,
        ]);

    }
}
