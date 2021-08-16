@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.sale.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sales.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                 <div class="col-6 {{ $errors->has('name') ? 'has-error' : '' }}">
                     <label for="name">{{ trans('cruds.sale.fields.name') }}*</label>
                     <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($sale) ? $sale->name : '') }}" required>
                     @if($errors->has('name'))
                         <p class="help-block">
                             {{ $errors->first('name') }}
                         </p>
                     @endif
                     <p class="helper-block">
                         {{ trans('cruds.sale.fields.name_helper') }}
                     </p>
                 </div>
            </div>

            <div class="form-row">
                 <div class="col-6 {{ $errors->has('phone') ? 'has-error' : '' }}">
                     <label for="phone">{{ trans('cruds.sale.fields.phone') }}</label>
                     <input type="tel" id="phone" name="phone" class="form-control" value="{{ old('phone', isset($sale) ? $sale->phone : '') }}">
                     @if($errors->has('phone'))
                         <p class="help-block">
                             {{ $errors->first('phone') }}
                         </p>
                     @endif
                     <p class="helper-block">
                         {{ trans('cruds.sale.fields.phone_helper') }}
                     </p>
                 </div>
            </div>

            <div class="form-row">
                 <div class="col-6 {{ $errors->has('store_id') ? 'has-error' : '' }}">
                     <label for="store">{{ trans('cruds.sale.fields.store') }}</label>
                     <select class="form-control" id="store" name="store_id" style="width:100%;" required>
                          @foreach($stores as $id => $store)
                          <option value="{{ $id }}" {{ (isset($sale) && $sale->store ? $sale->store->id : old('store_id')) == $id ? 'selected' : '' }} >
                               {{ $store }}
                          </option>
                          @endforeach
                     </select>
                     @if($errors->has('store_id'))
                         <p class="help-block">
                             {{ $errors->first('store_id') }}
                         </p>
                     @endif
                     <p class="helper-block">
                         {{ trans('cruds.sale.fields.store_helper') }}
                     </p>
                 </div>
            </div>
            <!-- Before Product  -->
            <br /> <br/>
            <table class="table table-bordered" id="product_info_table">
                 <thead>
                      <tr>
                           <th style="width:30%"> {{ trans('cruds.sale.fields.product') }} </th>
                           <th style="width:10%"> {{ trans('cruds.sale.fields.quantity') }} </th>
                           <th style="width:10%"> {{ trans('cruds.sale.fields.rate') }} </th>
                           <th style="width:20%"> {{ trans('cruds.sale.fields.price') }} </th>
                           <th style="width:10%">
                                <button type="button" id="add_row" class="btn btn-primary" onclick="addProductRow()">
                                     <i class="fa fa-plus"></i>
                                </button>
                           </th>
                      </tr>
                 </thead>

                 <tbody id="product-info">
                       <!-- Product info  -->
                       <tr id="row_1" class="product">
                            <td>
                                 <select class="form-control" id="product_1" name="products[]" style="width:100%;" onchange="getProductData(1)" required>
                                      <option value=""> {{ trans('global.pleaseSelect') }} </option>
                                      @foreach($products as  $product)
                                      <option value="{{ $product->id }}" >
                                           {{ $product->name. " " . $product->store->name  }}
                                      </option>
                                      @endforeach
                                 </select>
                            </td>
                            <td>
                                 <input type="number" min="1" name="quantities[]" id="quantity_1" class="form-control" value="1" required onchange="getTotal(1)" onkeyup="getTotal(1)">
                            </td>
                            <td>
                                 <input type="number" id="rate_1" name="rates[]" class="form-control" readonly>
                            </td>
                            <td>
                                 <input type="number" name="price[]" id="price_1" class="form-control price" readonly>
                            </td>
                            <td>
                                 <button type="button" class="btn btn-danger" onclick="removeProductRow(1)">
                                      <i class="fas fa-times"></i>
                                 </button>
                            </td>
                         </tr>
                         <!-- After product info -->
                    </tbody>
               </table>

               <br /> <br/>

               <!-- After products  -->

               <div class="form-row">
                 <div class="col-6"></div>
                 <div class="col-6 {{ $errors->has('amount') ? 'has-error' : '' }}">
                    <label for="amount">{{ trans('cruds.sale.fields.amount') }}</label>
                    <input type="number" min="0" id="amount" name="amount" class="form-control" disabled>
                 </div>
            </div>

            <div class="form-row">
                 <div class="col-6"></div>
                 <div class="col-6">
                    <label for="discount">{{ trans('cruds.sale.fields.discount') }}</label>
                    <input type="number" step="any" min="0" id="discount" name="discount" class="form-control" value="{{ old('discount', isset($sale) ? $sale->discount : '') }}" onchange="getAmount()" onkeyup="getAmount()">
                    @if($errors->has('discount'))
                         <p class="help-block">
                            {{ $errors->first('discount') }}
                         </p>
                    @endif
                    <p class="helper-block">
                         {{ trans('cruds.sale.fields.discount_helper') }}
                    </p>
                 </div>
            </div>
            <div class="form-row">
                 <div class="col-6"></div>
                 <div class="col-6 {{ $errors->has('total') ? 'has-error' : '' }}">
                     <label for="total">{{ trans('cruds.sale.fields.total') }}</label>
                     <input type="number" min="0" id="total" name="total" class="form-control" value="{{ old('total', isset($sale) ? $sale->total : '') }}" readonly>
                     @if($errors->has('total'))
                         <p class="help-block">
                             {{ $errors->first('total') }}
                         </p>
                     @endif
                     <p class="helper-block">
                         {{ trans('cruds.sale.fields.total_helper') }}
                     </p>
                 </div>
            </div>

            <div>
                <input class="btn btn-primary btn-block" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

@endsection

<script type="text/javascript">

     function getProductData(row_id){
          const product_id = $("#product_" + row_id).val();
          if(!product_id){
               $("#rate_" + row_id).val(0);
               $("#price_" + row_id).val(0);
          }else{
               let rate = 0;
               @foreach($products as $product)
                    if(product_id == {{ $product->id }}){
                         rate = {{ $product->price }}
                    }
               @endforeach
               $("#rate_" + row_id).val(rate);
               getTotal(row_id);
          }
     }

     function getTotal(row_id){
          const rate = $("#rate_" + row_id).val();
          const quantity = $("#quantity_" + row_id).val();
          $("#price_" + row_id).val(rate * quantity);
          getAmount();
     }

     function getAmount(){
          let total = 0;
          $("#product-info .product").each(function(){
               const price = $(this).find('.price').val();
               total += Number(price);
          });
          $("#amount").val(total);
          getFinalValue(total);
     }

     function getFinalValue(amount){
          const discount = $("#discount").val();
          const total = amount - discount;
          $("#total").val(total);
     }

     function addProductRow(){
          const length = $("#product-info .product").length + 1;
          const row = `
               <tr id="row_${length}" class="product">
                    <td>
                         <select class="form-control" id="product_${length}" name="products[]" style="width:100%;" onchange="getProductData(${length})" required>
                              <option value=""> {{ trans('global.pleaseSelect') }} </option>
                              @foreach($products as  $product)
                              <option value="{{ $product->id }}" >
                                   {{ $product->name }}
                              </option>
                              @endforeach
                         </select>
                    </td>
                    <td>
                         <input type="number" min="1" name="quantities[]" id="quantity_${length}" class="form-control" value="1" onchange="getTotal(${length})" onkeyup="getTotal(${length})">
                    </td>
                    <td>
                         <input type="number" id="rate_${length}" name="rates[]" class="form-control" readonly>
                    </td>
                    <td>
                         <input type="number" name="price[]" id="price_${length}" class="form-control price" readonly>
                    </td>
                    <td>
                         <button type="button" class="btn btn-danger" onclick="removeProductRow(${length})">
                              <i class="fas fa-times"></i>
                         </button>
                    </td>
                 </tr>
          `;
          $("#product-info").append(row);
     }

     function removeProductRow(index){
          $("#row_" + index).remove();
     }
</script>
