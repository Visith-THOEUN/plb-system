<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.sale.title')); ?>

    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.sale.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($sale->id ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.sale.fields.name')); ?>

                        </th>
                        <td>
                            <?php echo e($sale->name ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                         <th>
                              <?php echo e(trans('cruds.sale.fields.phone')); ?>

                         </th>
                         <th>
                              <?php echo e($sale->phone ?? ''); ?>

                         </th>
                    </tr>
                    <tr>
                         <th>
                              <?php echo e(trans('cruds.sale.fields.discount')); ?>

                         </th>
                         <th>
                              $<?php echo e($sale->discount ?? 0); ?>

                         </th>
                    </tr>
                    <tr>
                         <th>
                              <?php echo e(trans('cruds.sale.fields.total')); ?>

                         </th>
                         <th>
                              $<?php echo e($sale->total ?? 0); ?>

                         </th>
                    </tr>
                    <tr>
                         <th>
                              <?php echo e(trans('cruds.sale.fields.store')); ?>

                         </th>
                         <th>
                              <?php echo e($sale->store->name); ?>

                         </th>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="<?php echo e(url()->previous()); ?>">
                <?php echo e(trans('global.back_to_list')); ?>

            </a>
        </div>


    </div>
</div>



<!-- Product section -->
<div class="card">
    <div class="card-header">
        <?php echo e(trans('cruds.product.title_singular')); ?> <?php echo e(trans('global.list')); ?> in this sales
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover ">
                <thead>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.product.fields.id')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.product.fields.sku')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.product.fields.name')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.product.fields.price')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.product.fields.quantity')); ?>


                        </th>
                        <th>
                            <?php echo e(trans('cruds.product.fields.category')); ?>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-entry-id="<?php echo e($product->id); ?>">
                            <td>
                                <?php echo e($product->id ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($product->sku ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($product->name ?? ''); ?>

                            </td>
                            <td>
                                $<?php echo e($product->price ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($product->saleProducts->qty ?? ''); ?>

                            </td>
                            <td>
                                 <?php echo e($product->category->name ?? ''); ?>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/admin/sales/show.blade.php ENDPATH**/ ?>