<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\SaleProduct;

class Sale extends Model
{
    use SoftDeletes;

    public $table = 'sales';

    protected $dates = [
         'created_at',
         'updated_at',
         'deleted_at',
    ];

    protected $fillable = [
         'name',
         'phone',
         'discount',
         'total',
         'store_id',
    ];

    public function products()
    {
         return $this->belongsToMany(Product::class, 'sale_products');
    }

    public function store()
    {
         return $this->belongsTo(Store::class);
    }

    public function saleProducts()
    {
         return $this->hasMany(SaleProduct::class);
    }
}
