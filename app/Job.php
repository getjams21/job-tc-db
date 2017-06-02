<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    protected $guarded = ['id'];
    protected $fillable = [
        'company_id',
        'title',
        'description',
        'photo'
    ];
}
