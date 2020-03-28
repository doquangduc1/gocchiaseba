<?php

    namespace App\model\admin;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'name', 'detail',
    ];
    protected $table = 'blog';
}
