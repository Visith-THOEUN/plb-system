<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;

    public $table = 'stores';

    protected $dates = [
          'created_at',
          'updated_at',
          'deleted_at',
    ];

    protected $fillable = [
         'name',
         'address',
         'created_at',
         'updated_at',
         'deleted_at',
    ];

    public function products()
    {
         return $this->hasMany(Product::class);
    }

    public function sales()
    {
         return $this->hasMany(Sale::class);
    }
}
