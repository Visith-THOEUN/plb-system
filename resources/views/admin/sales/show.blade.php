@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.sale.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.sale.fields.id') }}
                        </th>
                        <td>
                            {{ $sale->id ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sale.fields.name') }}
                        </th>
                        <td>
                            {{ $sale->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                         <th>
                              {{ trans('cruds.sale.fields.phone') }}
                         </th>
                         <th>
                              {{ $sale->phone ?? '' }}
                         </th>
                    </tr>
                    <tr>
                         <th>
                              {{ trans('cruds.sale.fields.discount') }}
                         </th>
                         <th>
                              ${{ $sale->discount ?? 0 }}
                         </th>
                    </tr>
                    <tr>
                         <th>
                              {{ trans('cruds.sale.fields.total') }}
                         </th>
                         <th>
                              ${{ $sale->total ?? 0 }}
                         </th>
                    </tr>
                    <tr>
                         <th>
                              {{ trans('cruds.sale.fields.store')}}
                         </th>
                         <th>
                              {{ $sale->store->name }}
                         </th>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>



<!-- Product section -->
<div class="card">
    <div class="card-header">
        {{ trans('cruds.product.title_singular') }} {{ trans('global.list') }} in this sales
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover ">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.sku') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.price') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.quantity') }}

                        </th>
                        <th>
                            {{ trans('cruds.product.fields.category') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $product)
                        <tr data-entry-id="{{ $product->id }}">
                            <td>
                                {{ $product->id ?? '' }}
                            </td>
                            <td>
                                {{ $product->sku ?? '' }}
                            </td>
                            <td>
                                {{ $product->name ?? '' }}
                            </td>
                            <td>
                                ${{ $product->price ?? '' }}
                            </td>
                            <td>
                                {{ $product->saleProducts->qty ?? '' }}
                            </td>
                            <td>
                                 {{ $product->category->name ?? '' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
