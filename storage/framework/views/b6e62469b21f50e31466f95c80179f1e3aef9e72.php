<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.client.title')); ?>

    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.client.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($client->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.client.fields.first_name')); ?>

                        </th>
                        <td>
                            <?php echo e($client->first_name); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.client.fields.last_name')); ?>

                        </th>
                        <td>
                            <?php echo e($client->last_name); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.client.fields.company')); ?>

                        </th>
                        <td>
                            <?php echo e($client->company); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.client.fields.email')); ?>

                        </th>
                        <td>
                            <?php echo e($client->email); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.client.fields.phone')); ?>

                        </th>
                        <td>
                            <?php echo e($client->phone); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.client.fields.website')); ?>

                        </th>
                        <td>
                            <?php echo e($client->website); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.client.fields.skype')); ?>

                        </th>
                        <td>
                            <?php echo e($client->skype); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.client.fields.country')); ?>

                        </th>
                        <td>
                            <?php echo e($client->country); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.client.fields.status')); ?>

                        </th>
                        <td>
                            <?php echo e($client->status->name ?? ''); ?>

                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="<?php echo e(url()->previous()); ?>">
                <?php echo e(trans('global.back_to_list')); ?>

            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/admin/clients/show.blade.php ENDPATH**/ ?>