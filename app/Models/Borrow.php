<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $table = 'borrows';
    protected $guarded = [];
    protected $fillable = [
        'category',
        'itemName',
        'urgency',
        'employeeId',
    ];

    public function users()
    {
        return $this->belongsTo('App/User','employeeId','id');
    }
}
