<?php $__env->startSection('content'); ?>
<h3 class="page-title"><?php echo e(trans('cruds.clientReport.title')); ?></h3>

<form action="" method="GET">
    <div class="row">
        <div class="col-xs-6 col-md-4 form-group">
            <label class="control-label" for="project"><?php echo e(trans('cruds.clientReport.title_singular')); ?></label>
            <select name="project" class="form-control">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($key); ?>" <?php if($key==$currentProject): ?> selected <?php endif; ?>><?php echo e($value); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="col-xs-4">
            <label class="control-label">&nbsp;</label><br>
            <input class="btn btn-primary" type="submit" value="<?php echo e(trans('global.submit')); ?>">
        </div>
    </div>
</form>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('cruds.clientReport.title_singular')); ?>

    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-condensed datatable">
                <thead>
                    <tr>
                        <th><?php echo e(trans('cruds.clientReport.reports.month')); ?></th>
                        <th><?php echo e(trans('cruds.clientReport.reports.income')); ?></th>
                        <th><?php echo e(trans('cruds.clientReport.reports.expenses')); ?></th>
                        <th><?php echo e(trans('cruds.clientReport.reports.fees')); ?></th>
                        <th><?php echo e(trans('cruds.clientReport.reports.total')); ?></th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date => $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($date); ?></td>
                                <td><?php echo e(number_format($row['income'],2)); ?> <?php echo e($currency); ?></td>
                                <td><?php echo e(number_format($row['expenses'],2)); ?> <?php echo e($currency); ?></td>
                                <td><?php echo e(number_format($row['fees'],2)); ?> <?php echo e($currency); ?></td>
                                <td><?php echo e(number_format($row['total'],2)); ?> <?php echo e($currency); ?></td>
                            </tr>
                            <?php $date = ''; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/admin/clientReports/index.blade.php ENDPATH**/ ?>