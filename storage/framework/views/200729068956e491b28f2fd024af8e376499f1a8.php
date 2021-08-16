<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.store.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.stores.update", [$store->id])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                <label for="name"><?php echo e(trans('cruds.store.fields.name')); ?>*</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', isset($store) ? $store->name : '')); ?>" required>
                <?php if($errors->has('name')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('name')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.store.fields.name_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('address') ? 'has-error': ''); ?>">
                 <label for="address"><?php echo e(trans('cruds.store.fields.address')); ?>*</label>
                 <input type="text" id="address" name="address" class="form-control" value="<?php echo e(old('address', isset($store) ? $store->address: '')); ?>"/>
                 <?php if($errors->has('address')): ?>
                    <p class="help-block">
                         <?php echo e($errors->first('address')); ?>

                    </p>
                 <?php endif; ?>
                 <p class="helper-block">
                      <?php echo e(trans('cruds.store.fields.address_helper')); ?>

                 </p>
            </div>
            <div>
                <input class="btn btn-primary btn-block" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/admin/stores/edit.blade.php ENDPATH**/ ?>