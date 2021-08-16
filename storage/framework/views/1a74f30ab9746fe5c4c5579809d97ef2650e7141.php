<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.employee.title')); ?>

    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($employee->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.name')); ?>

                        </th>
                        <td>
                            <?php echo e($employee->name ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.gender')); ?>

                        </th>
                        <td>
                            <?php echo e($employee->gender->name ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.salary')); ?>

                        </th>
                        <td>
                            <?php echo e($employee->salary ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.jobtitle')); ?>

                        </th>
                        <td>
                            <?php echo e($employee->jobtitle->name ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.department')); ?>

                        </th>
                        <td>
                            <?php echo e($employee->department->name ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.dob')); ?>

                        </th>
                        <td>
                            <?php echo e($employee->dob ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.join_date')); ?>

                        </th>
                        <td>
                            <?php echo e($employee->join_date ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.leave_date')); ?>

                        </th>
                        <td>
                            <?php echo e($employee->leave_date ?? ''); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/admin/employees/show.blade.php ENDPATH**/ ?>