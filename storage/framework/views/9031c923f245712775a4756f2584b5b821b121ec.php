<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.employee.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.employees.update", [$employee->id])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                <label for="name"><?php echo e(trans('cruds.employee.fields.name')); ?>*</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', isset($employee) ? $employee->name : '')); ?>" required>
                <?php if($errors->has('name')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('name')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.employee.fields.name_helper')); ?>

                </p>
            </div>

            <div class="form-group <?php echo e($errors->has('gender_id') ? 'has-error' : ''); ?>">
                <label for="gender"><?php echo e(trans('cruds.employee.fields.gender')); ?>*</label>
                <select name="gender_id" id="gender" class="form-control">
                     <?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($id); ?>" <?php echo e((isset($employee) && $employee->gender ? $employee->gender->id: old('gender_id')) == $id ? 'selected': ''); ?>>
                              <?php echo e($gender); ?>

                         </option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('gender_id')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('gender_id')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.employee.fields.gender_helper')); ?>

                </p>
            </div>

            <div class="form-group <?php echo e($errors->has('department_id') ? 'has-error' : ''); ?>">
                <label for="department"><?php echo e(trans('cruds.employee.fields.department')); ?>*</label>
                <select name="department_id" id="department" class="form-control">
                     <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($id); ?>" <?php echo e((isset($employee) && $employee->department ? $employee->department->id: old('department_id')) == $id ? 'selected': ''); ?>>
                              <?php echo e($department); ?>

                         </option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('department_id')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('department_id')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.employee.fields.department_helper')); ?>

                </p>
            </div>

            <div class="form-group <?php echo e($errors->has('jobtitle_id') ? 'has-error' : ''); ?>">
               <label for="jobtitle"><?php echo e(trans('cruds.employee.fields.jobtitle')); ?>*</label>
               <select name="jobtitle_id" id="jobtitle" class="form-control">
                    <?php $__currentLoopData = $jobtitles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $jobtitle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($id); ?>" <?php echo e((isset($employee) && $employee->jobtitle ? $employee->jobtitle->id: old('jobtitle_id')) == $id ? 'selected': ''); ?>>
                              <?php echo e($jobtitle); ?>

                         </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </select>
               <?php if($errors->has('jobtitle_id')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('jobtitle_id')); ?>

                    </p>
               <?php endif; ?>
               <p class="helper-block">
                    <?php echo e(trans('cruds.employee.fields.jobtitle_helper')); ?>

               </p>
            </div>

            <div class="form-group <?php echo e($errors->has('salary') ? 'has-error' : ''); ?>">
                <label for="salary"><?php echo e(trans('cruds.employee.fields.salary')); ?>*</label>
                <input type="number" id="salary" name="salary" class="form-control" value="<?php echo e(old('salary', isset($employee) ? $employee->salary : '')); ?>" required>
                <?php if($errors->has('salary')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('salary')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.employee.fields.salary_helper')); ?>

                </p>
            </div>

            <div class="form-group <?php echo e($errors->has('dob') ? 'has-error' : ''); ?>">
               <label for="dob"><?php echo e(trans('cruds.employee.fields.dob')); ?>*</label>
               <input type="date" id="dob" name="dob" class="form-control" value="<?php echo e(old('dob', isset($employee) ? $employee->dob : '')); ?>" required>
               <?php if($errors->has('dob')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('dob')); ?>

                    </p>
               <?php endif; ?>
               <p class="helper-block">
                    <?php echo e(trans('cruds.employee.fields.join_date_helper')); ?>

               </p>
            </div>

            <div class="form-group <?php echo e($errors->has('join_date') ? 'has-error' : ''); ?>">
               <label for="join_date"><?php echo e(trans('cruds.employee.fields.join_date')); ?>*</label>
               <input type="date" id="join_date" name="join_date" class="form-control" value="<?php echo e(old('join_date', isset($employee) ? $employee->join_date : '')); ?>" required>
               <?php if($errors->has('join_date')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('join_date')); ?>

                    </p>
               <?php endif; ?>
               <p class="helper-block">
                    <?php echo e(trans('cruds.employee.fields.join_date_helper')); ?>

               </p>
            </div>

            <div class="form-group <?php echo e($errors->has('leave_date') ? 'has-error' : ''); ?>">
               <label for="leave_date"><?php echo e(trans('cruds.employee.fields.leave_date')); ?>*</label>
               <input type="date" id="leave_date" name="leave_date" class="form-control" value="<?php echo e(old('leave_date', isset($employee) ? $employee->leave_date : '')); ?>" required>
               <?php if($errors->has('leave_date')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('leave_date')); ?>

                    </p>
               <?php endif; ?>
               <p class="helper-block">
                    <?php echo e(trans('cruds.employee.fields.leave_date_helper')); ?>

               </p>
            </div>

            <div>
                <input class="btn btn-primary btn-block" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/admin/employees/edit.blade.php ENDPATH**/ ?>