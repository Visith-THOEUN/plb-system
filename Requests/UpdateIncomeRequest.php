<?php

namespace App\Http\Requests;

use App\Income;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateIncomeRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('income_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;
    }

    public function rules()
    {
        return [
             'amount'               => [
                  'required',
                  'numeric',
                  'min:0',
             ],
             'income_category_id'  => [
                  'required',
                  'integer',
                  'min:0',
             ],
             'remark'               => [
                  'required',
             ],
        ];
    }
}
