<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employee_create')): ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route("admin.employees.create")); ?>">
                <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.employee.title_singular')); ?>

            </a>
        </div>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-header">
        <?php echo e(trans('cruds.employee.title_singular')); ?> <?php echo e(trans('global.list')); ?>

    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-Employee">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.id')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.name')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.gender')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.department')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.jobtitle')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.salary')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.dob')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.join_date')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.employee.fields.leave_date')); ?>

                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-entry-id="<?php echo e($employee->id); ?>">
                            <td>

                            </td>
                            <td>
                                <?php echo e($employee->id ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($employee->name ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($employee->gender->name ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($employee->department->name ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($employee->jobtitle->name ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($employee->salary ?? ''); ?>

                            </td>
                            <td>
                                 <?php echo e($employee->dob ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($employee->join_date ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($employee->leave_date ?? ''); ?>

                            </td>
                            <td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employee_show')): ?>
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.employees.show', $employee->id)); ?>">
                                        <?php echo e(trans('global.view')); ?>

                                    </a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employee_edit')): ?>
                                    <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.employees.edit', $employee->id)); ?>">
                                        <?php echo e(trans('global.edit')); ?>

                                    </a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employee_delete')): ?>
                                    <form action="<?php echo e(route('admin.employees.destroy', $employee->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
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
<?php $__env->startSection('scripts'); ?>
##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
<script>
    $(function () {
         let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employee_delete')): ?>
         let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>'
         let deleteButton = {
             text: deleteButtonTrans,
             url: "<?php echo e(route('admin.employees.massDestroy')); ?>",
             className: 'btn-danger',
             action: function (e, dt, node, config) {
                  var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
                      return $(entry).data('entry-id')
                 });

                 if (ids.length === 0) {
                      alert('<?php echo e(trans('global.datatables.zero_selected')); ?>');
                      return;
                 }

                 if (confirm('<?php echo e(trans('global.areYouSure')); ?>')) {
                      $.ajax({
                           headers: {'x-csrf-token': _token},
                           method: 'POST',
                           url: config.url,
                           data: { ids: ids, _method: 'DELETE' }})
                           .done(function () { location.reload() })
                      }
                 }
            }
            dtButtons.push(deleteButton)
            <?php endif; ?>

            $.extend(true, $.fn.dataTable.defaults, {
                order: [[ 1, 'desc' ]],
                pageLength: 100,
           });
           $('.datatable-Employee:not(.ajaxTable)').DataTable({ buttons: dtButtons })
           $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
           });
});

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/admin/employees/index.blade.php ENDPATH**/ ?>