<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Product extends Model
{

    protected $fillable = [
        'name',
        'slug',
        'detail',
    ];
    protected $sluggable = array(
        'build_from' => 'name', //Xây dựng đường dẫn từ trường 'name'
        'save_to'   => 'slug'   //Lưu tên đường dẫn vào trường 'slug'
    );
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
