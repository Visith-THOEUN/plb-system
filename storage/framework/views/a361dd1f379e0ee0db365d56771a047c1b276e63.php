<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.document.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.documents.store")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group <?php echo e($errors->has('project_id') ? 'has-error' : ''); ?>">
                <label for="project"><?php echo e(trans('cruds.document.fields.project')); ?>*</label>
                <select name="project_id" id="project" class="form-control select2" required>
                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e((isset($document) && $document->project ? $document->project->id : old('project_id')) == $id ? 'selected' : ''); ?>><?php echo e($project); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('project_id')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('project_id')); ?>

                    </p>
                <?php endif; ?>
            </div>
            <div class="form-group <?php echo e($errors->has('document_file') ? 'has-error' : ''); ?>">
                <label for="document_file"><?php echo e(trans('cruds.document.fields.document_file')); ?>*</label>
                <div class="needsclick dropzone" id="document_file-dropzone">

                </div>
                <?php if($errors->has('document_file')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('document_file')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.document.fields.document_file_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                <label for="name"><?php echo e(trans('cruds.document.fields.name')); ?></label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', isset($document) ? $document->name : '')); ?>">
                <?php if($errors->has('name')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('name')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.document.fields.name_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
                <label for="description"><?php echo e(trans('cruds.document.fields.description')); ?></label>
                <textarea id="description" name="description" class="form-control "><?php echo e(old('description', isset($document) ? $document->description : '')); ?></textarea>
                <?php if($errors->has('description')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('description')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.document.fields.description_helper')); ?>

                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    Dropzone.options.documentFileDropzone = {
    url: '<?php echo e(route('admin.documents.storeMedia')); ?>',
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').find('input[name="document_file"]').remove()
      $('form').append('<input type="hidden" name="document_file" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="document_file"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
<?php if(isset($document) && $document->document_file): ?>
      var file = <?php echo json_encode($document->document_file); ?>

          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="document_file" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
<?php endif; ?>
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/admin/documents/create.blade.php ENDPATH**/ ?>