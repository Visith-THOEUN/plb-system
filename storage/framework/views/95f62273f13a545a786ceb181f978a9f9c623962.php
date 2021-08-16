<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.sale.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.sales.store")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-row">
                 <div class="col-6 <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                     <label for="name"><?php echo e(trans('cruds.sale.fields.name')); ?>*</label>
                     <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', isset($sale) ? $sale->name : '')); ?>" required>
                     <?php if($errors->has('name')): ?>
                         <p class="help-block">
                             <?php echo e($errors->first('name')); ?>

                         </p>
                     <?php endif; ?>
                     <p class="helper-block">
                         <?php echo e(trans('cruds.sale.fields.name_helper')); ?>

                     </p>
                 </div>
            </div>

            <div class="form-row">
                 <div class="col-6 <?php echo e($errors->has('phone') ? 'has-error' : ''); ?>">
                     <label for="phone"><?php echo e(trans('cruds.sale.fields.phone')); ?></label>
                     <input type="tel" id="phone" name="phone" class="form-control" value="<?php echo e(old('phone', isset($sale) ? $sale->phone : '')); ?>">
                     <?php if($errors->has('phone')): ?>
                         <p class="help-block">
                             <?php echo e($errors->first('phone')); ?>

                         </p>
                     <?php endif; ?>
                     <p class="helper-block">
                         <?php echo e(trans('cruds.sale.fields.phone_helper')); ?>

                     </p>
                 </div>
            </div>

            <div class="form-row">
                 <div class="col-6 <?php echo e($errors->has('store_id') ? 'has-error' : ''); ?>">
                     <label for="store"><?php echo e(trans('cruds.sale.fields.store')); ?></label>
                     <select class="form-control" id="store" name="store_id" style="width:100%;" required>
                          <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($id); ?>" <?php echo e((isset($sale) && $sale->store ? $sale->store->id : old('store_id')) == $id ? 'selected' : ''); ?> >
                               <?php echo e($store); ?>

                          </option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                     <?php if($errors->has('store_id')): ?>
                         <p class="help-block">
                             <?php echo e($errors->first('store_id')); ?>

                         </p>
                     <?php endif; ?>
                     <p class="helper-block">
                         <?php echo e(trans('cruds.sale.fields.store_helper')); ?>

                     </p>
                 </div>
            </div>
            <!-- Before Product  -->
            <br /> <br/>
            <table class="table table-bordered" id="product_info_table">
                 <thead>
                      <tr>
                           <th style="width:30%"> <?php echo e(trans('cruds.sale.fields.product')); ?> </th>
                           <th style="width:10%"> <?php echo e(trans('cruds.sale.fields.quantity')); ?> </th>
                           <th style="width:10%"> <?php echo e(trans('cruds.sale.fields.rate')); ?> </th>
                           <th style="width:20%"> <?php echo e(trans('cruds.sale.fields.price')); ?> </th>
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
                                      <option value=""> <?php echo e(trans('global.pleaseSelect')); ?> </option>
                                      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($product->id); ?>" >
                                           <?php echo e($product->name. " " . $product->store->name); ?>

                                      </option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                 <div class="col-6 <?php echo e($errors->has('amount') ? 'has-error' : ''); ?>">
                    <label for="amount"><?php echo e(trans('cruds.sale.fields.amount')); ?></label>
                    <input type="number" min="0" id="amount" name="amount" class="form-control" disabled>
                 </div>
            </div>

            <div class="form-row">
                 <div class="col-6"></div>
                 <div class="col-6">
                    <label for="discount"><?php echo e(trans('cruds.sale.fields.discount')); ?></label>
                    <input type="number" step="any" min="0" id="discount" name="discount" class="form-control" value="<?php echo e(old('discount', isset($sale) ? $sale->discount : '')); ?>" onchange="getAmount()" onkeyup="getAmount()">
                    <?php if($errors->has('discount')): ?>
                         <p class="help-block">
                            <?php echo e($errors->first('discount')); ?>

                         </p>
                    <?php endif; ?>
                    <p class="helper-block">
                         <?php echo e(trans('cruds.sale.fields.discount_helper')); ?>

                    </p>
                 </div>
            </div>
            <div class="form-row">
                 <div class="col-6"></div>
                 <div class="col-6 <?php echo e($errors->has('total') ? 'has-error' : ''); ?>">
                     <label for="total"><?php echo e(trans('cruds.sale.fields.total')); ?></label>
                     <input type="number" min="0" id="total" name="total" class="form-control" value="<?php echo e(old('total', isset($sale) ? $sale->total : '')); ?>" readonly>
                     <?php if($errors->has('total')): ?>
                         <p class="help-block">
                             <?php echo e($errors->first('total')); ?>

                         </p>
                     <?php endif; ?>
                     <p class="helper-block">
                         <?php echo e(trans('cruds.sale.fields.total_helper')); ?>

                     </p>
                 </div>
            </div>

            <div>
                <input class="btn btn-primary btn-block" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<script type="text/javascript">

     function getProductData(row_id){
          const product_id = $("#product_" + row_id).val();
          if(!product_id){
               $("#rate_" + row_id).val(0);
               $("#price_" + row_id).val(0);
          }else{
               let rate = 0;
               <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    if(product_id == <?php echo e($product->id); ?>){
                         rate = <?php echo e($product->price); ?>

                    }
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                              <option value=""> <?php echo e(trans('global.pleaseSelect')); ?> </option>
                              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($product->id); ?>" >
                                   <?php echo e($product->name); ?>

                              </option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/admin/sales/create.blade.php ENDPATH**/ ?>