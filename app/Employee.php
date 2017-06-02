<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $guarded = ['id'];
    protected $fillable = [
        'user_id',
        'company_id',
        'job_id',
        'status'
    ];
}
