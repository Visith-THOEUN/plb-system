@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.employee.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.employees.update", [$employee->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.employee.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($employee) ? $employee->name : '') }}" required>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.employee.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('gender_id') ? 'has-error' : '' }}">
                <label for="gender">{{ trans('cruds.employee.fields.gender') }}*</label>
                <select name="gender_id" id="gender" class="form-control">
                     @foreach($genders as $id => $gender)
                         <option value="{{ $id }}" {{ (isset($employee) && $employee->gender ? $employee->gender->id: old('gender_id')) == $id ? 'selected': ''}}>
                              {{ $gender }}
                         </option>
                     @endforeach
                </select>
                @if($errors->has('gender_id'))
                    <p class="help-block">
                        {{ $errors->first('gender_id') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.employee.fields.gender_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('department_id') ? 'has-error' : '' }}">
                <label for="department">{{ trans('cruds.employee.fields.department') }}*</label>
                <select name="department_id" id="department" class="form-control">
                     @foreach($departments as $id => $department)
                         <option value="{{ $id }}" {{ (isset($employee) && $employee->department ? $employee->department->id: old('department_id')) == $id ? 'selected': ''}}>
                              {{ $department }}
                         </option>
                     @endforeach
                </select>
                @if($errors->has('department_id'))
                    <p class="help-block">
                        {{ $errors->first('department_id') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.employee.fields.department_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('jobtitle_id') ? 'has-error' : '' }}">
               <label for="jobtitle">{{ trans('cruds.employee.fields.jobtitle') }}*</label>
               <select name="jobtitle_id" id="jobtitle" class="form-control">
                    @foreach($jobtitles as $id => $jobtitle)
                         <option value="{{ $id }}" {{ (isset($employee) && $employee->jobtitle ? $employee->jobtitle->id: old('jobtitle_id')) == $id ? 'selected': ''}}>
                              {{ $jobtitle }}
                         </option>
                    @endforeach
               </select>
               @if($errors->has('jobtitle_id'))
                    <p class="help-block">
                        {{ $errors->first('jobtitle_id') }}
                    </p>
               @endif
               <p class="helper-block">
                    {{ trans('cruds.employee.fields.jobtitle_helper') }}
               </p>
            </div>

            <div class="form-group {{ $errors->has('salary') ? 'has-error' : '' }}">
                <label for="salary">{{ trans('cruds.employee.fields.salary') }}*</label>
                <input type="number" id="salary" name="salary" class="form-control" value="{{ old('salary', isset($employee) ? $employee->salary : '') }}" required>
                @if($errors->has('salary'))
                    <p class="help-block">
                        {{ $errors->first('salary') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.employee.fields.salary_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('dob') ? 'has-error' : '' }}">
               <label for="dob">{{ trans('cruds.employee.fields.dob') }}*</label>
               <input type="date" id="dob" name="dob" class="form-control" value="{{ old('dob', isset($employee) ? $employee->dob : '') }}" required>
               @if($errors->has('dob'))
                    <p class="help-block">
                        {{ $errors->first('dob') }}
                    </p>
               @endif
               <p class="helper-block">
                    {{ trans('cruds.employee.fields.join_date_helper') }}
               </p>
            </div>

            <div class="form-group {{ $errors->has('join_date') ? 'has-error' : '' }}">
               <label for="join_date">{{ trans('cruds.employee.fields.join_date') }}*</label>
               <input type="date" id="join_date" name="join_date" class="form-control" value="{{ old('join_date', isset($employee) ? $employee->join_date : '') }}" required>
               @if($errors->has('join_date'))
                    <p class="help-block">
                        {{ $errors->first('join_date') }}
                    </p>
               @endif
               <p class="helper-block">
                    {{ trans('cruds.employee.fields.join_date_helper') }}
               </p>
            </div>

            <div class="form-group {{ $errors->has('leave_date') ? 'has-error' : '' }}">
               <label for="leave_date">{{ trans('cruds.employee.fields.leave_date') }}*</label>
               <input type="date" id="leave_date" name="leave_date" class="form-control" value="{{ old('leave_date', isset($employee) ? $employee->leave_date : '') }}" required>
               @if($errors->has('leave_date'))
                    <p class="help-block">
                        {{ $errors->first('leave_date') }}
                    </p>
               @endif
               <p class="helper-block">
                    {{ trans('cruds.employee.fields.leave_date_helper') }}
               </p>
            </div>

            <div>
                <input class="btn btn-primary btn-block" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
