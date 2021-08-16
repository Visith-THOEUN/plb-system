<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use SoftDeletes;

    public $table = 'expenses';

    protected $dates = [
         'created_at',
         'updated_at',
         'deleted_at',
    ];

    protected $fillable = [
         'amount',
         'expense_category_id',
         'remark',
    ];

    public function expenseCategory()
    {
         return $this->belongsTo(ExpenseCategory::class);
    }
}
