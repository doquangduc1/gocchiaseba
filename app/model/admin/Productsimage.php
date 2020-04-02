<?php
namespace App\model\admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
class Productsimage extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $fillable = [
        'product_id',
        'image'
    ];
    protected $table = 'product_images';
    public function product()
    {
        return $this->belongsTo('App\model\admin\Product');
    }
}
