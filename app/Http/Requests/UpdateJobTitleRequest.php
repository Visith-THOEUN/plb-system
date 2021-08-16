<?php

namespace App\Http\Requests;

use App\JobTitle;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateJobTitleRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('jobtitle_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;
    }


    public function rules()
    {
        return [
            'name'       => [
                 'required'
            ],
        ];
    }
}
