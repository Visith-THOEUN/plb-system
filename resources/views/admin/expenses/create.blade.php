@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.expense.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.expenses.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.expense.fields.amount') }}*</label>
                <input type="number" id="amount" name="amount" class="form-control" value="{{ old('amount', isset($expense) ? $expense->amount : '') }}" required>
                @if($errors->has('amount'))
                    <p class="help-block">
                        {{ $errors->first('amount') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.expense.fields.amount_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('expense_category_id') ? 'has-error' : '' }}">
                <label for="category">{{ trans('cruds.expense.fields.category') }}*</label>
                <select name="expense_category_id" id="category" class="form-control">
                     @foreach($expense_categories as $id => $category)
                         <option value="{{ $id }}"
                         {{ (isset($expense) && $expense->expenseCategory ? $expense->expenseCategory->id: old('expense_category_id')) == $id ? 'selected': ''}}
                         >
                              {{ $category }}
                         </option>
                     @endforeach
                </select>
                @if($errors->has('expense_category_id'))
                    <p class="help-block">
                        {{ $errors->first('expense_category_id') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.expense.fields.category_helper') }}
                </p>
            </div>


              <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                 <label for="remark">{{ trans('cruds.expense.fields.remark') }}*</label>
                 <input type="text" id="remark" name="remark" class="form-control" value="{{ old('remark', isset($expense) ? $expense->remark : '') }}" required>
                 @if($errors->has('remark'))
                      <p class="help-block">
                          {{ $errors->first('remark') }}
                      </p>
                 @endif
                 <p class="helper-block">
                      {{ trans('cruds.expense.fields.remark_helper') }}
                 </p>
              </div>

            <div>
                <input class="btn btn-primary btn-block" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
