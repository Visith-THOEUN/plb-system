<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use SoftDeletes;

    public $table = 'departments';

    protected $dates = [
         'created_at',
         'updated_at',
         'deleted_at'
    ];

    protected $fillable = [
         'name',
    ];

    public function employees()
    {
         return $this->hasMany(Employee::class);
    }
}
