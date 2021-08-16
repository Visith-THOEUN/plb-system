@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.product.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.products.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('sku') ? 'has-error' : '' }}">
                <label for="sku">{{ trans('cruds.product.fields.sku') }}*</label>
                <input type="text" id="sku" name="sku" class="form-control" value="{{ old('sku', isset($product) ? $sku->name : '') }}" required>
                @if($errors->has('sku'))
                    <p class="help-block">
                        {{ $errors->first('sku') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.product.fields.sku_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.category.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($product) ? $product->name : '') }}" required>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.product.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                <label for="quantity">{{ trans('cruds.product.fields.price') }}*</label>
                <input placeholder="$" type="text" id="price" name="price" class="form-control" value="{{ old('price', isset($product) ? $product->name : '') }}" required>
                @if($errors->has('price'))
                    <p class="help-block">
                        {{ $errors->first('price') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.product.fields.price_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
               <label for="quantity">{{ trans('cruds.product.fields.quantity') }}*</label>
               <input type="text" id="quantity" name="quantity" class="form-control" value="{{ old('quantity', isset($product) ? $product->quantity : '') }}" required>
               @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
               @endif
               <p class="helper-block">
                    {{ trans('cruds.store.fields.name_helper') }}
               </p>
            </div>
            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                <label for="category">{{ trans('cruds.product.fields.category') }}*</label>
                <select name="category_id" id="category" class="form-control">
                     @foreach($categories as $id => $category)
                         <option value="{{ $id }}" {{ (isset($product) && $product->category ? $product->category->id: old('category_id')) == $id ? 'selected': ''}} >
                              {{ $category }}
                         </option>
                     @endforeach
                </select>
                @if($errors->has('category_id'))
                    <p class="help-block">
                        {{ $errors->first('category_id') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.product.fields.category_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('store_id') ? 'has-error': ''}}">
                 <label for="store">{{ trans('cruds.product.fields.store') }}*</label>
                 <select name="store_id" id="store" class="form-control">
                      @foreach($stores as $id => $store)
                         <option value="{{ $id }}" {{ (isset($product) && $product->store ? $product->store->id: old('store_id')) == $id ? 'selected': '' }}>
                              {{ $store }}
                         </option>
                      @endforeach
                 </select>
            </div>
            <div>
                <input class="btn btn-primary btn-block" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
