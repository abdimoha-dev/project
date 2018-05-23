<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assigned extends Model
{
    protected $table = 'asigns';
    protected $guarded = [];
    protected $fillable = [
        'category',
        'ItemName',
        'duration',
        'serialNumber',
        'employeeId',
        'issuedBy',
    ];
    public function users()
    {
        return $this->belongsTo('App/User','employeeId','id');
    }
}
