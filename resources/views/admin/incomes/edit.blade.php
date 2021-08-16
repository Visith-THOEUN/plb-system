@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.income.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.incomes.update", [$income->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
               <label for="name">{{ trans('cruds.income.fields.amount') }}*</label>
               <input type="number" id="amount" name="amount" class="form-control" value="{{ old('amount', isset($income) ? $income->amount : '') }}" required>
               @if($errors->has('amount'))
                    <p class="help-block">
                        {{ $errors->first('amount') }}
                    </p>
               @endif
               <p class="helper-block">
                    {{ trans('cruds.income.fields.amount_helper') }}
               </p>
            </div>

            <div class="form-group {{ $errors->has('income_category_id') ? 'has-error' : '' }}">
               <label for="category">{{ trans('cruds.income.fields.category') }}*</label>
               <select name="income_category_id" id="category" class="form-control">
                    @foreach($incomeCategories as $id => $category)
                         <option value="{{ $id }}"
                         {{ (isset($income) && $income->incomeCategory ? $income->incomeCategory->id: old('income_category_id')) == $id ? 'selected': ''}}
                         >
                              {{ $category }}
                         </option>
                    @endforeach
               </select>
               @if($errors->has('income_category_id'))
                    <p class="help-block">
                        {{ $errors->first('income_category_id') }}
                    </p>
               @endif
               <p class="helper-block">
                    {{ trans('cruds.income.fields.category_helper') }}
               </p>
            </div>


              <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                 <label for="remark">{{ trans('cruds.income.fields.remark') }}*</label>
                 <input type="text" id="remark" name="remark" class="form-control" value="{{ old('remark', isset($income) ? $income->remark : '') }}" required>
                 @if($errors->has('remark'))
                      <p class="help-block">
                         {{ $errors->first('remark') }}
                      </p>
                 @endif
                 <p class="helper-block">
                      {{ trans('cruds.income.fields.remark_helper') }}
                 </p>
              </div>


            <div>
                <input class="btn btn-primary btn-block" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
