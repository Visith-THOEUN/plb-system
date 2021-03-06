<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpenseCategory extends Model
{
    use SoftDeletes;

    public $table = 'expense_categories';

    protected $dates = [
         'created_at',
         'updated_at',
         'deleted_at',
    ];

    protected $fillable = [
         'name',
    ];

    public function expenses()
    {
         return $this->hasMany(Expense::class);
    }

}
