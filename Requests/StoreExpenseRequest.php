<?php

namespace App\Http\Requests;

use App\Expense;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreExpenseRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('expense_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
             'expense_category_id'  => [
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
