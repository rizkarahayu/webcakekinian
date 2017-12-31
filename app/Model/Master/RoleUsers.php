<?php

namespace App\Model\Master;

use App\User;
use Illuminate\Database\Eloquent\Model;

class RoleUsers extends Model
{
    protected $table    = 'role_users';
    protected $fillable = [
        'role'
    ];

    protected static $validation_rules = [
        'role'      => 'required'
    ];

    public function users() {
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}
