<?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card card-default" style="margin-bottom: 5px;">
        <div class="card-body">
            <div class="media">
                <div class="w3-display-container">
                    <img src="<?php echo e(route('imagecache', ['template' => 'slmd', 'filename' => $media->file_name])); ?>" alt="John Doe" class="mr-1 rounded" style="width:100px;">
                </div>
                <div class="media-body" style=" word-wrap: break-word;word-break: break-all;">
                    <p>
                        Orig.Name: <?php echo e($media->file_name); ?> <br>
                        Size: <?php echo e($media->size); ?>,
                        Width: <?php echo e($media->width); ?>px,
                        Height: <?php echo e($media->height); ?>px <br>
                        <small>
                                <?php echo e(asset('/storage/media_images/'.$media->file_name)); ?>

                        </small>
                        <br>
                        <button class="copyboard btn btn-primary btn-xs" data-text="<?php echo e(asset('/storage/media_images/'.$media->file_name)); ?>">Copy URL</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/admin/media/mediaAjax.blade.php ENDPATH**/ ?>