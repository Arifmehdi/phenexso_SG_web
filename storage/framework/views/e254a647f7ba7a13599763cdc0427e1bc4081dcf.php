<?php $__env->startSection('title',"Admin Dashboard | Front Sliders"); ?>

<?php $__env->startSection('body'); ?>
   <section class="pt-5">
    <div class="card shadow bg-info">
        <div class="card-header">
            <div class="card-title">Front Slider</div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-5 m-auto">
            <div class="card">
                <div class="card-header text-info">
                    <div class="card-title">Add Slider</div>
                </div>

                <div class="card-body">
                    <form action="<?php echo e(route('sliders.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" placeholder="Title  here" class="form-control">
                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="tag">Description</label>
                            <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="Description Here"></textarea>
                        </div>


                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" name="link" id="link" class="form-control" placeholder="Link here...">
                            <?php $__errorArgs = ['link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                        <div class="form-group">
                            <label for="featured_image">Featured Image</label>
                            <input type="file" name="featured_image" id="featured_image" class="form-control">
                            <?php $__errorArgs = ['featured_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                        <div class="form-group">
                            <label for="active"><input type="checkbox" name="active" id="active"> Active</label>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header bg-info">
            <div class="card-title">All Sliders</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderd table-sm">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Action</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Featured Image</th>
                            <th>Linik</th>
                            <th>Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = (($sliders->currentPage() - 1) * $sliders->perPage() + 1); ?>
                        <?php $__empty_1 = true; $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td class="d-flex">
                            <a href="<?php echo e(route('sliders.edit',$slider)); ?>" data-toggle="modal" data-target="#fsedit<?php echo e($slider->id); ?>" class="text-success mr-2"><i class="fas fa-edit"></i></a>

                            <form action="<?php echo e(route('sliders.destroy', $slider)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button href="<?php echo e(route('sliders.destroy', $slider)); ?>" class="text-danger" onclick="return confirm('Are you sure? you want to delete this Slider Item?')" style="all:unset; cursor: pointer;"><i class="fas fa-trash"></i></button>
                            </form>

                            </td>

                            <td><?php echo e($slider->title); ?></td>
                            <td><?php echo e($slider->description); ?></td>
                            <td><img src="<?php echo e(route('imagecache', [ 'template'=>'sbixs','filename' => $slider->fi() ])); ?>" alt=""></td>
                            <td><?php echo e($slider->link); ?></td>
                            <td>
                            <?php if($slider->active): ?>
                            <span class="badge badge-success">Actived</span>
                            <?php else: ?>
                            <span class="badge badge-danger">Inactived</span>
                            <?php endif; ?>
                            </td>
                        </tr>


                          
                          <div class="modal fade" id="fsedit<?php echo e($slider->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo e(route('sliders.update',$slider->id)); ?>" method="POST" enctype="multipart/form-data">
                                        <?php echo method_field('PATCH'); ?>
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" id="title" placeholder="Title  here"
                                                    class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($slider->title); ?>">
                                                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="tag">Description</label>
                                                <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="Description Here"> <?php echo e($slider->description); ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="link">Link</label>
                                                <input type="text" name="link" id="link" class="form-control" placeholder="Link here..." value="<?php echo e($slider->link ?? ""); ?>">
                                                <?php $__errorArgs = ['link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                        <div class="form-group">
                                            <label for="featured_image">Featured Iamge</label><br>
                                            <input type="file" name="featured_image" id="featured_image">
                                            <img src="<?php echo e(route('imagecache', [ 'template'=>'sbixs','filename' => $slider->fi() ])); ?>" alt="">
                                            <?php $__errorArgs = ['featured_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="active"><input type="checkbox" <?php echo e($slider->active? 'checked' : ''); ?> name="active" id="active"> Active</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Update" class="btn btn-info">
                                        </div>
                                    </form>
                                </div>

                              </div>
                            </div>
                        </div>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-danger h5 text-center">No Slider Found</td>
                        </tr>
                       <?php endif; ?>
                    </tbody>
                </table>
                <?php echo e($sliders->links()); ?>

            </div>
        </div>
    </div>
   </section>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/admin/sliders/index.blade.php ENDPATH**/ ?>