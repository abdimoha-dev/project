<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $table = 'assets';
    protected $guarded = [];

    protected $fillable = [
        'fillerId',
        'categoryId',
        'name',
        'quantity',
        'brand',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'fillerId', 'id');

    }
}

