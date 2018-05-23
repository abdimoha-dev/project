<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    protected $fillable = [
        'name',
        'department',
        'email',
        'password',
        'role',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function asset()
    {
        return $this->hasMany('App\Models\Asset','fillerId','id');
    }

    public function assign()
    {
        return $this->hasMany('App\Models\Assigned','employeeId','id');
    }
    public function borrow()
    {
        return $this->hasMany('App\Models\Borrow','employeeId','id');
    }
}
