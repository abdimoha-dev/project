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
    /**
     * show all employees
     */
    public function showAllUser()
    {
        return view('dashboard.admin.users.employees', [
            'users' => User::where('role', 'EMPLOYEE')->paginate(10),
        ]);
    }

    /*
     * display assets assignment form
     */
    public function showAssignForm($userId)
    {
        return view('dashboard.admin.assets.assignments', [
            'assets' => Asset::get(['categoryId', 'name']),
            'userId' => $userId
        ]);
    }

    /*
     * @param Request $request
     * save assigned assets
     */
    public function distribute(Request $request)
    {

        Assigned::create([
            'category'     => $request->category,
            'ItemName'     => $request->itemName,
            'duration'     => $request->duration,
            'serialNumber' => $request->serialNumber,
            'employeeId'   => $request->user_id,
            'issuedBy'     => auth()->user()->id,
        ]);
        return redirect('home')->with(session()->flash('success-message', ['Details Added Successfull ']));

    }

    /**
     * //show all assigned assets
     */
    public function showAssignedAssets()
    {
        return view('dashboard/admin/assets/assignedAssets', [
            'assets' => Assigned::get(),
        ]);
    }
/*
 * Display admin response form for Employee asset request
 */
    public function showResponseForm()
    {
        return view('dashboard/admin/users/response');
    }
}
