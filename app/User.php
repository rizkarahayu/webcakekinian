<?php

namespace App;

use App\Model\Master\RoleUsers;
use App\Model\Master\Toko;
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
        'role_id',
        'status_active',
        'gambar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $validation_rules = [
        'name'      => 'required',
        'email'     => 'required|email',
        'password'  => 'required',
        'username'  => 'required',
        'role_id'   => 'required',
//        'gambar'    => 'image|mimes:jpg,png|max:4096'
    ];

    public function role_users() {
        return $this->belongsTo(RoleUsers::class, 'role_id');
    }

    public function toko() {
        return $this->hasMany(Toko::class, 'users_id');
    }
}
