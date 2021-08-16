<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use SoftDeletes;

    public $table = 'employees';

    protected $dates = [
          'created_at',
          'updated_at',
          'deleted_at'
    ];

    protected $fillable = [
         'name',
         'gender_id',
         'dob',
         'salary',
         'join_date',
         'leave_date',
         'department_id',
         'jobtitle_id',
    ];

    public function department()
    {
         return $this->belongsTo(Department::class);
    }

    public function gender()
    {
         return $this->belongsTo(Gender::class);
    }

    public function jobtitle()
    {
         return $this->belongsTo(JobTitle::class);
    }
}
