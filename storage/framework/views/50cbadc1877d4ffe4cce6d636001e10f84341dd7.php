<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('transaction_create')): ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route("admin.transactions.create")); ?>">
                <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.transaction.title_singular')); ?>

            </a>
        </div>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-header">
        <?php echo e(trans('cruds.transaction.title_singular')); ?> <?php echo e(trans('global.list')); ?>

    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Transaction">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            <?php echo e(trans('cruds.transaction.fields.id')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.transaction.fields.project')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.transaction.fields.transaction_type')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.transaction.fields.income_source')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.transaction.fields.amount')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.transaction.fields.currency')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.transaction.fields.transaction_date')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.transaction.fields.name')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.transaction.fields.description')); ?>

                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-entry-id="<?php echo e($transaction->id); ?>">
                            <td>

                            </td>
                            <td>
                                <?php echo e($transaction->id ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($transaction->project->name ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($transaction->transaction_type->name ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($transaction->income_source->name ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($transaction->amount ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($transaction->currency->name ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($transaction->transaction_date ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($transaction->name ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($transaction->description ?? ''); ?>

                            </td>
                            <td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('transaction_show')): ?>
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.transactions.show', $transaction->id)); ?>">
                                        <?php echo e(trans('global.view')); ?>

                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('transaction_edit')): ?>
                                    <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.transactions.edit', $transaction->id)); ?>">
                                        <?php echo e(trans('global.edit')); ?>

                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('transaction_delete')): ?>
                                    <form action="<?php echo e(route('admin.transactions.destroy', $transaction->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
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
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('transaction_delete')): ?>
  let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "<?php echo e(route('admin.transactions.massDestroy')); ?>",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('<?php echo e(trans('global.datatables.zero_selected')); ?>')

        return
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
  $('.datatable-Transaction:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/admin/transactions/index.blade.php ENDPATH**/ ?>