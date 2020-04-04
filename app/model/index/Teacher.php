<?php

namespace App\model\index;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name','mon'];
    protected $table = 'teacher';
}
