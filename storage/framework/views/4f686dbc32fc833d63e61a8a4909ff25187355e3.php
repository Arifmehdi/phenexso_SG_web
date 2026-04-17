<?php $__env->startSection('title',"Admin Dashboard | Edit Gallery"); ?>

<?php $__env->startSection('body'); ?>
    <section class="pt-5">
        <div class="card">
            <div class="card-header bg-info">
                <div class="card-title">Edit Gallery </div>
            </div>
            <div class="card-body w3-light-gray">
                <form action="<?php echo e(route('galleries.update',$gallery)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("PATCH"); ?>
                    <div class="row py-2">
                        <div class="col-12 col-md-12 m-auto card p-4">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="" placeholder="Title.." name="title" value=" <?php echo e($gallery->title); ?>">
                                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label for="featuredImage">File</label>
                               <input type="file" name="featured_image" class="form-control" id="featured_image_input"><br>
                               <?php if($gallery->featured_image): ?>
                               <img src="<?php echo e(route('imagecache', [ 'template'=>'sbixs','filename' => $gallery->featured_image ])); ?>" alt="">
                               <?php endif; ?>
                            </div>

                            <div class="form-group" id="thumbnail_image_group" <?php if($gallery->file_type != 'video'): ?> style="display: none;" <?php endif; ?>>
                                <label for="thumbnail_image">Thumbnail Image (for videos)</label>
                               <input type="file" name="thumbnail_image" class="form-control"><br>
                               <?php if($gallery->thumbnail_image): ?>
                               <img src="<?php echo e(route('imagecache', [ 'template'=>'sbixs','filename' => $gallery->thumbnail_image ])); ?>" alt="">
                               <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label for="priority">Priority</label>
                                <input type="number" class="form-control" id="priority" placeholder="Priority.." name="priority" value="<?php echo e(old('priority', $gallery->priority)); ?>">
                            </div>

                            

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="active" name="active" <?php echo e($gallery->active ? "checked" : ""); ?>>
                                <label class="form-check-label" for="active">Active</label>
                            </div>

                            

                            <input type="submit" class="btn btn-success mt-2" value="Update">

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const featuredImageInput = document.getElementById('featured_image_input');
        const thumbnailImageGroup = document.getElementById('thumbnail_image_group');

        featuredImageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const fileType = file.type;
                if (fileType.startsWith('video/')) {
                    thumbnailImageGroup.style.display = 'block';
                } else {
                    thumbnailImageGroup.style.display = 'none';
                }
            } else {
                thumbnailImageGroup.style.display = 'none';
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/admin/galleries/edit.blade.php ENDPATH**/ ?>