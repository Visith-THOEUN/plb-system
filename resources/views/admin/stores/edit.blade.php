@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.store.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.stores.update", [$store->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.store.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($store) ? $store->name : '') }}" required>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.store.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{$errors->has('address') ? 'has-error': '' }}">
                 <label for="address">{{ trans('cruds.store.fields.address')}}*</label>
                 <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($store) ? $store->address: '') }}"/>
                 @if($errors->has('address'))
                    <p class="help-block">
                         {{ $errors->first('address') }}
                    </p>
                 @endif
                 <p class="helper-block">
                      {{ trans('cruds.store.fields.address_helper')}}
                 </p>
            </div>
            <div>
                <input class="btn btn-primary btn-block" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
