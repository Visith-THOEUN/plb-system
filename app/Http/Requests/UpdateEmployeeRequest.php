<?php

namespace App\Http\Requests;

use App\Employee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateEmployeeRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('employee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;
    }

    public function rules()
    {
        return [
             'name'      => [
                  'required',
             ],
             'gender_id'      => [
                  'required',
                  'integer',
                  'min:0'
             ],
             'dob'            => [
                  'required',
                  'date'
             ],
             'salary'         => [
                  'numeric',
                  'min:0'
             ],
             'join_date'      => [
                  'required',
                  'date',
             ],
             'leave_date'     => [
                    'nullable',
                    'date',
             ],
             'department_id'  => [
                  'required',
                  'integer',
                  'min:0'
             ],
             'jobtitle_id'   => [
                  'required',
                  'integer',
                  'min:0',
             ],
        ];
    }
}
