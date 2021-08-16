@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.expense.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.expense.fields.id') }}
                        </th>
                        <td>
                            {{ $expense->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.expense.fields.amount') }}
                        </th>
                        <td>
                            {{ $expense->amount ?? '' }}$
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.expense.fields.category') }}
                        </th>
                        <td>
                            {{ $expense->expenseCategory->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.expense.fields.remark') }}
                        </th>
                        <td>
                            {{ $expense->remark ?? '' }}
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
