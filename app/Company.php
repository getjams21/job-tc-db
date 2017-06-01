<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
	protected $guarded = ['id'];
    protected $fillable = [
        'name', 
        'email', 
        'phone',
        'employee_count',
        'address1',
        'address2',
        'province',
        'zip',
        'website',
        'country_id'
    ];
}
