<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.expense.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.expenses.store")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group <?php echo e($errors->has('amount') ? 'has-error' : ''); ?>">
                <label for="name"><?php echo e(trans('cruds.expense.fields.amount')); ?>*</label>
                <input type="number" id="amount" name="amount" class="form-control" value="<?php echo e(old('amount', isset($expense) ? $expense->amount : '')); ?>" required>
                <?php if($errors->has('amount')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('amount')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.expense.fields.amount_helper')); ?>

                </p>
            </div>

            <div class="form-group <?php echo e($errors->has('expense_category_id') ? 'has-error' : ''); ?>">
                <label for="category"><?php echo e(trans('cruds.expense.fields.category')); ?>*</label>
                <select name="expense_category_id" id="category" class="form-control">
                     <?php $__currentLoopData = $expense_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($id); ?>"
                         <?php echo e((isset($expense) && $expense->expenseCategory ? $expense->expenseCategory->id: old('expense_category_id')) == $id ? 'selected': ''); ?>

                         >
                              <?php echo e($category); ?>

                         </option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('expense_category_id')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('expense_category_id')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.expense.fields.category_helper')); ?>

                </p>
            </div>


              <div class="form-group <?php echo e($errors->has('remark') ? 'has-error' : ''); ?>">
                 <label for="remark"><?php echo e(trans('cruds.expense.fields.remark')); ?>*</label>
                 <input type="text" id="remark" name="remark" class="form-control" value="<?php echo e(old('remark', isset($expense) ? $expense->remark : '')); ?>" required>
                 <?php if($errors->has('remark')): ?>
                      <p class="help-block">
                          <?php echo e($errors->first('remark')); ?>

                      </p>
                 <?php endif; ?>
                 <p class="helper-block">
                      <?php echo e(trans('cruds.expense.fields.remark_helper')); ?>

                 </p>
              </div>

            <div>
                <input class="btn btn-primary btn-block" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/admin/expenses/create.blade.php ENDPATH**/ ?>