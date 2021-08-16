<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.note.title')); ?>

    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.store.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($store->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.store.fields.name')); ?>

                        </th>
                        <td>
                            <?php echo e($store->name ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.store.fields.address')); ?>

                        </th>
                        <td>
                            <?php echo $store->address; ?>

                        </td>
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
        <?php echo e(trans('cruds.product.title_singular')); ?> <?php echo e(trans('global.list')); ?> in this store
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover ">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
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
                        <th>
                            <?php echo e(trans('cruds.product.fields.store')); ?>

                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $store->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-entry-id="<?php echo e($product->id); ?>">
                            <td>

                            </td>
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
                                <?php echo e($product->price ?? ''); ?>$
                            </td>
                            <td>
                                <?php echo e($product->quantity ?? ''); ?>

                            </td>
                            <td>
                                 <?php echo e($product->category->name ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($product->store->name ?? ''); ?>

                            </td>
                            <td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_show')): ?>
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.products.show', $product->id)); ?>">
                                        <?php echo e(trans('global.view')); ?>

                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_edit')): ?>
                                    <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.products.edit', $product->id)); ?>">
                                        <?php echo e(trans('global.edit')); ?>

                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_delete')): ?>
                                    <form action="<?php echo e(route('admin.products.destroy', $product->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="submit" class="btn btn-xs btn-danger" value="<?php echo e(trans('global.delete')); ?>">
                                    </form>
                                <?php endif; ?>

                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/admin/stores/show.blade.php ENDPATH**/ ?>