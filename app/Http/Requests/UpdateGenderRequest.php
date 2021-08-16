<?php

namespace App\Http\Requests;

use App\Gender;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateGenderRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('gender_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;
    }


    public function rules()
    {
        return [
            'name'  => [
                 'required',
            ],
        ];
    }
}
