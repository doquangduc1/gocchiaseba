<?php

namespace App\model\index;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = [
        'name', 'detail',
    ];
    protected $table = 'blog';
}


