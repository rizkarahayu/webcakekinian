<?php

namespace App;

use App\Model\Master\RoleUsers;
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
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'alamat',
        'no_telp',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected static $validation_rules = [
        'name'      => 'required',
        'email'     => 'required|email',
        'password'  => 'required',
        'username'  => 'required',
        'role_id'   => 'required'
    ];

    public function users() {
        return $this->belongsTo(RoleUsers::class, 'users_id', 'users_id');
    }
}
