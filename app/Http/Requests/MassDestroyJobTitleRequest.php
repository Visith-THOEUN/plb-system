<?php

namespace App\Http\Requests;

use App\JobTitle;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyJobTitleRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('jobtitle_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;
    }


    public function rules()
    {
        return [
             'ids'  => 'required|array';
        ];
    }
}
