<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.product.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.products.update", [$product->id])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group <?php echo e($errors->has('sku') ? 'has-error' : ''); ?>">
                <label for="sku"><?php echo e(trans('cruds.product.fields.sku')); ?>*</label>
                <input type="text" id="sku" name="sku" class="form-control" value="<?php echo e(old('sku', isset($product) ? $product->sku : '')); ?>" required>
                <?php if($errors->has('sku')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('sku')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.product.fields.sku_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                <label for="name"><?php echo e(trans('cruds.product.fields.name')); ?>*</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', isset($product) ? $product->name : '')); ?>" required>
                <?php if($errors->has('name')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('name')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.category.fields.name_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('price') ? 'has-error' : ''); ?>">
                <label for="price"><?php echo e(trans('cruds.product.fields.name')); ?>*</label>
                <input type="number" id="price" name="price" class="form-control" value="<?php echo e(old('price', isset($product) ? $product->price : '')); ?>" required>
                <?php if($errors->has('price')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('price')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.product.fields.price_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('quantity') ? 'has-error' : ''); ?>">
                <label for="quantity"><?php echo e(trans('cruds.product.fields.quantity')); ?>*</label>
                <input type="number" id="quantity" name="quantity" class="form-control" value="<?php echo e(old('quantity', isset($product) ? $product->quantity : '')); ?>" required>
                <?php if($errors->has('quantity')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('quantity')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.product.fields.quantity_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('category_id') ? 'has-error' : ''); ?>">
                <label for="category"><?php echo e(trans('cruds.product.fields.category')); ?>*</label>
                <select name="category_id" id="category" class="form-control">
                     <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($id); ?>" <?php echo e((isset($product) && $product->category ? $product->category->id: old('category_id')) == $id ? 'selected': ''); ?> >
                              <?php echo e($category); ?>

                         </option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('category_id')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('category_id')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.product.fields.category_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('store_id') ? 'has-error': ''); ?>">
                 <label for="store"><?php echo e(trans('cruds.product.fields.store')); ?>*</label>
                 <select name="store_id" id="store" class="form-control">
                      <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($id); ?>" <?php echo e((isset($product) && $product->store ? $product->store->id: old('store_id')) == $id ? 'selected': ''); ?>>
                              <?php echo e($store); ?>

                         </option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </select>
            </div>
            <div>
                <input class="btn btn-primary btn-block" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/admin/products/edit.blade.php ENDPATH**/ ?>