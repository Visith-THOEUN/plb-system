<?php

namespace App\Http\Requests;

use App\Product;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyProductRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;
    }


    public function rules()
    {
        return [
            return [
                 'ids'=> 'required|array',
            ];
        ];
    }
}
