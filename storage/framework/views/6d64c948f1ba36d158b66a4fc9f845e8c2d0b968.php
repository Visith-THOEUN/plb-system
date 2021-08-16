<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.expense.title')); ?>

    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.expense.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($expense->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.expense.fields.amount')); ?>

                        </th>
                        <td>
                            <?php echo e($expense->amount ?? ''); ?>$
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.expense.fields.category')); ?>

                        </th>
                        <td>
                            <?php echo e($expense->expenseCategory->name ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.expense.fields.remark')); ?>

                        </th>
                        <td>
                            <?php echo e($expense->remark ?? ''); ?>

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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/admin/expenses/show.blade.php ENDPATH**/ ?>