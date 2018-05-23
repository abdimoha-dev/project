<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\StockRequest;
use App\Models\Asset;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockController extends Controller
{
    public function showStockForm()
    {
        return view('dashboard.admin.assets.assets', [
            'assets' => Category::get(['name', 'id']),
        ]);
    }

    /*
     * Save Assets
     */
    public function saveStock(StockRequest $request)
    {
//       dd($request->toArray());
        Asset::create([
            'fillerId'     => auth()->user()->id,
            'categoryId'   => $request->category,
            'name'         => $request->name,
            'brand'        => $request->brand,
            'quantity'     => $request->quantity,
        ]);
    }

    /**
     * show categories form
     */
    public function addCategory()
    {
        return view('dashboard.admin.assets.category');
    }

    /**
     *
     * Add items categories
     */

    public function saveCategory(CategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,
        ]);
    }
}
