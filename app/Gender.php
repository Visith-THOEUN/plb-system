<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use SoftDeletes;

    public $table = 'genders';

    protected $dates = [
          'created_at',
          'updated_at',
          'deleted_at',
    ];

    protected $fillable = [
         'name'
    ];

    public function employees()
    {
         return $this->hasMany(Employees::class);
    }
}
