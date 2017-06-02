<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Role extends Model
{
    protected $table = 'user_roles';
    protected $guarded = ['id'];
    protected $fillable = [
        'employee_id',
        'role_id',
        'permission_id'
    ];
}
