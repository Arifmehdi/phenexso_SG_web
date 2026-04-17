<table class="table table-striped table-bordered table-hover table-md">
    <thead class="w3-small text-muted thead-light">
        <tr>
            <th scope="col" width="30">SL</th>
            <th scope="col" width="60">Action</th>
            <th scope="col"> Category Name (English)</th>
            <th scope="col"> Category Name (Bangla)</th>
            <th scope="col">Image</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = (($categories->currentPage() - 1) * $categories->perPage() + 1); ?>
        
        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            
            <tr>
                <td scope="row"><?php echo e($i++); ?></td>
                <td scope="row">
                    <div class="dropdown show">
                        <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a href="<?php echo e(route('admin.productCategoryEdit', $category)); ?>" class="dropdown-item"><i class="fa fa-edit"></i> Edit</a>
                            <form action="<?php echo e(route('admin.productCategoryDelete', $category)); ?>" method="post" onclick="return confirm('Are you sure to delete?')">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="dropdown-item"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </td>

                <td><?php echo e(Str::limit($category->name_en, 30)); ?></td>
                <td><?php echo e(Str::limit($category->name_bn, 30)); ?></td>
                <td>
                    <img width="30" height="20"
                         src="<?php echo e(route('imagecache', ['template' => 'sbixs', 'filename' => $category->fi()])); ?>"
                         alt="">
                </td>

                <td>
                    <?php if($category->active == 1): ?>
                        <button class="badge border-0 badge-primary categoryStatus"
                            data-url="<?php echo e(route('admin.categoryStatus', ['category' => $category->id])); ?>">
                            Active
                        </button>
                    <?php else: ?>
                        <button class="badge border-0 badge-danger categoryStatus"
                            data-url="<?php echo e(route('admin.categoryStatus', ['category' => $category->id])); ?>">
                            Inactive
                        </button>
                    <?php endif; ?>
                </td>
            </tr>

            
            <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td></td> 
                    <td scope="row">
                        <div class="dropdown show">
                            <a class="btn btn-secondary btn-xs dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a href="<?php echo e(route('admin.productCategoryEdit', $child)); ?>" class="dropdown-item"><i class="fa fa-edit"></i> Edit</a>
                                <form action="<?php echo e(route('admin.productCategoryDelete', $child)); ?>" method="post" onclick="return confirm('Are you sure to delete?')">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="dropdown-item"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>

                    
                    <td>&nbsp;&nbsp;&nbsp;↳ <?php echo e(Str::limit($child->name_en, 30)); ?></td>
                    <td>&nbsp;&nbsp;&nbsp; <?php echo e(Str::limit($child->name_bn, 30)); ?></td>
                    <td>
                        <img width="30" height="20"
                             src="<?php echo e(route('imagecache', ['template' => 'sbixs', 'filename' => $child->fi()])); ?>"
                             alt="">
                    </td>

                    <td>
                        <?php if($child->active == 1): ?>
                            <button class="badge border-0 badge-primary categoryStatus"
                                data-url="<?php echo e(route('admin.categoryStatus', ['category' => $child->id])); ?>">
                                Active
                            </button>
                        <?php else: ?>
                            <button class="badge border-0 badge-danger categoryStatus"
                                data-url="<?php echo e(route('admin.categoryStatus', ['category' => $child->id])); ?>">
                                Inactive
                            </button>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="6" class="text-danger h5 text-center">No Category Found</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/admin/productCategories/searchData.blade.php ENDPATH**/ ?>