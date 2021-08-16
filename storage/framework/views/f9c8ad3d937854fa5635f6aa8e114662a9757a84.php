<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.client.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.clients.store")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group <?php echo e($errors->has('first_name') ? 'has-error' : ''); ?>">
                <label for="first_name"><?php echo e(trans('cruds.client.fields.first_name')); ?>*</label>
                <input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo e(old('first_name', isset($client) ? $client->first_name : '')); ?>" required>
                <?php if($errors->has('first_name')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('first_name')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.client.fields.first_name_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('last_name') ? 'has-error' : ''); ?>">
                <label for="last_name"><?php echo e(trans('cruds.client.fields.last_name')); ?></label>
                <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo e(old('last_name', isset($client) ? $client->last_name : '')); ?>">
                <?php if($errors->has('last_name')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('last_name')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.client.fields.last_name_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('company') ? 'has-error' : ''); ?>">
                <label for="company"><?php echo e(trans('cruds.client.fields.company')); ?></label>
                <input type="text" id="company" name="company" class="form-control" value="<?php echo e(old('company', isset($client) ? $client->company : '')); ?>">
                <?php if($errors->has('company')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('company')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.client.fields.company_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                <label for="email"><?php echo e(trans('cruds.client.fields.email')); ?></label>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo e(old('email', isset($client) ? $client->email : '')); ?>">
                <?php if($errors->has('email')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('email')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.client.fields.email_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('phone') ? 'has-error' : ''); ?>">
                <label for="phone"><?php echo e(trans('cruds.client.fields.phone')); ?></label>
                <input type="text" id="phone" name="phone" class="form-control" value="<?php echo e(old('phone', isset($client) ? $client->phone : '')); ?>">
                <?php if($errors->has('phone')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('phone')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.client.fields.phone_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('website') ? 'has-error' : ''); ?>">
                <label for="website"><?php echo e(trans('cruds.client.fields.website')); ?></label>
                <input type="text" id="website" name="website" class="form-control" value="<?php echo e(old('website', isset($client) ? $client->website : '')); ?>">
                <?php if($errors->has('website')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('website')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.client.fields.website_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('skype') ? 'has-error' : ''); ?>">
                <label for="skype"><?php echo e(trans('cruds.client.fields.skype')); ?></label>
                <input type="text" id="skype" name="skype" class="form-control" value="<?php echo e(old('skype', isset($client) ? $client->skype : '')); ?>">
                <?php if($errors->has('skype')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('skype')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.client.fields.skype_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('country') ? 'has-error' : ''); ?>">
                <label for="country"><?php echo e(trans('cruds.client.fields.country')); ?></label>
                <input type="text" id="country" name="country" class="form-control" value="<?php echo e(old('country', isset($client) ? $client->country : '')); ?>">
                <?php if($errors->has('country')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('country')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.client.fields.country_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('status_id') ? 'has-error' : ''); ?>">
                <label for="status"><?php echo e(trans('cruds.client.fields.status')); ?></label>
                <select name="status_id" id="status" class="form-control select2">
                    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e((isset($client) && $client->status ? $client->status->id : old('status_id')) == $id ? 'selected' : ''); ?>><?php echo e($status); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('status_id')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('status_id')); ?>

                    </p>
                <?php endif; ?>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/admin/clients/create.blade.php ENDPATH**/ ?>