@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.income.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.id') }}
                        </th>
                        <td>
                            {{ $income->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.amount') }}
                        </th>
                        <td>
                            {{ $income->amount ?? '' }}$
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.category') }}
                        </th>
                        <td>
                            {{ $income->incomeCategory->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.remark') }}
                        </th>
                        <td>
                            {{ $income->remark ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>
@endsection
