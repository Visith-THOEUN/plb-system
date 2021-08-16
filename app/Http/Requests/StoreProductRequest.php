<?php

namespace App\Http\Requests;

use App\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreProductRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('product_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;
    }


    public function rules()
    {
        return [
            'sku'            => [
                 'required',
            ],
            'name'            => [
                 'required',
            ],
            'price'           => [
                 'required',
                 'numeric',
                 'min:0'
            ],
            'quantity'        => [
                 'required',
                 'integer',
                 'min:0',
            ],
            'category_id'     => [
                 'required',
                 'integer',
                 'min:0'
            ],
            'store_id'        => [
                 'required',
                 'integer',
                 'min:0',
            ],
        ];
    }
}
