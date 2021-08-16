<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';

    protected $dates = [
         'created_at',
         'updated_at',
         'deleted_at',
    ];

    protected $fillable = [
         'sku',
         'name',
         'price',
         'quantity',
         'category_id',
         'store_id',
    ];

    public function category()
    {
         return $this->belongsTo(Category::class);
    }

    public function store()
    {
         return $this->belongsTo(Store::class);
    }

    public function sales()
    {
         return $this->belongsToMany(Sale::class, 'sale_products');
    }

    public function saleProducts()
    {
         return $this->hasOne(SaleProduct::class);
    }

}
