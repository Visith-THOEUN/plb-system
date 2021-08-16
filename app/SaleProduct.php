<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class SaleProduct extends Model
{
    use SoftDeletes;

    public $table = 'sale_products';

    protected $dates = [
         'created_at',
         'updated_at',
         'deleted_at',
    ];


    protected $fillable = [
         'sale_id',
         'product_id',
         'qty',
         'rate',
         'amount'
    ];

    public function sales()
    {
         return $this->belongsToMany(Sale::class);
    }
    public function products()
    {
         return $this->belongsToMany(Product::class);
    }
}
