<?php $__env->startSection('title',"Admin Dashboard | All Galleries"); ?>

<?php $__env->startSection('body'); ?>
    <section class="pt-5">
        <div class="card">
            <div class="card mb-2 shadow-lg">
                <div class="card-header- px-2 py-2 d-flex justify-content-between align-items-center">
                    <h3 class="card-title w3-small text-bold text-muted pt-1">
                        <i class="fas fa-sitemap text-primary"></i> Galleries
                    </h3>
                    <a href="<?php echo e(route('galleries.create')); ?>" class="btn btn-outline-primary btn-xs py-1">
                        <i class="fas fa-plus-square"></i> Add New Galleries
                    </a>
                </div>
           
            </div>
            <div class="card-body">
                 <div class="table-responsive">
                    <table class="table table-borderd table-sm">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Action</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>File</th>
                                <th>Priority</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = (($galleries->currentPage() - 1) * $galleries->perPage() + 1); ?>
                            <?php $__empty_1 = true; $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($loop->index+1); ?></td>

                                    <td class="d-flex">
                                    <a href="<?php echo e(route('galleries.edit',$gallery)); ?>" class="text-success mr-2"><i class="fas fa-edit"></i></a>

                                        <form action="<?php echo e(route('galleries.destroy', $gallery)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button href="<?php echo e(route('galleries.destroy', $gallery)); ?>" class="text-danger" onclick="return confirm('Are you sure? you want to delete this gallery Item?')" style="all:unset; cursor: pointer;"><i class="fas fa-trash"></i></button>
                                        </form>

                                    </td>
                                    <td><?php echo e($gallery->title); ?></td>
                                    <td><?php echo e($gallery->file_type); ?></td>
                                    <td>
                                        <?php if($gallery->file_type == 'image'): ?>
                                            <img src="<?php echo e(route('imagecache', [ 'template'=>'sbixs','filename' => $gallery->featured_image ])); ?>" alt="" width="50">
                                        <?php elseif($gallery->file_type == 'video'): ?>
                                            <?php if($gallery->thumbnail_image): ?>
                                                <img src="<?php echo e(route('imagecache', [ 'template'=>'sbixs','filename' => $gallery->thumbnail_image ])); ?>" alt="" width="50">
                                            <?php else: ?>
                                                <video width="50" controls>
                                                    <source src="<?php echo e(asset('storage/galleries/' . $gallery->featured_image)); ?>" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($gallery->priority); ?></td>
                                    <td>
                                        <?php if($gallery->active): ?>
                                        <span class="badge badge-primary">Active</span>
                                        <?php endif; ?>

                                    </td>
                                 
                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="6" class="text-danger h5 text-center">No gallery Found</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    <?php echo e($galleries->links()); ?>

                 </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/admin/galleries/index.blade.php ENDPATH**/ ?>