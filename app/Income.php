<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use SoftDeletes;

    public $table = 'incomes';

    protected $dates = [
         'created_at',
         'updated_at',
         'deleted_at',
    ];

    protected $fillable = [
         'amount',
         'income_category_id',
         'remark',
    ];

    public function incomeCategory()
    {
         return $this->belongsTo(IncomeCategory::class);
    }
}
