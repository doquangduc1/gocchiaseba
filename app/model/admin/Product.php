<?php
namespace App\model\admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
class Product extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $fillable = [
        'name',
        'gia',
        'loaisp',
        'slug',
        'image',

    ];
    public $timestamps = true;
    protected $table = 'products';
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
    public function productsimage()
    {
        return $this->hasMany('App\model\admin\Productsimage');
    }
}
