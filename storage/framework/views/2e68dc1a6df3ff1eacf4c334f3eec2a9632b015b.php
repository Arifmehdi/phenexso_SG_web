<table class="table table-striped table-bordered table-hover table-md">
    <thead class="w3-small text-muted thead-light">
        <tr>
            <th scope="col" width="30">SL</th>
            <th scope="col" width="60">Action</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Stock</th>
            <th scope="col">Purchase Price</th>
            <th scope="col">Selling Price</th>
            <th scope="col">Image</th>
            <th scope="col">Status</th>
            <th scope="col">Approval</th>
        </tr>
    </thead>
    <tbody class="">
        <?php $i = (($products->currentPage() - 1) * $products->perPage() + 1); ?>
        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            
            <tr>
                <td scope="row"><?php echo e($i++); ?></td>
                <td scope="row">
                   
                    <div class="dropdown show">
                        <a class="btn btn-primary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a href="<?php echo e(route('admin.productEdit',$product)); ?>" class="dropdown-item"><i class="fa fa-edit"></i> Edit</a>

                            <form action="<?php echo e(route('admin.productDelete',$product)); ?>" method="post" onclick="return confirm('Are you sure to delete?')">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="dropdown-item"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
               

                <td><?php echo e(Str::limit($product->name_en, 30)); ?></td>
                <td><?php echo e($product->stock ? $product->stock : 'N/A'); ?></td>
                <td><?php echo e($product->purchase_price); ?></td>
                <td><?php echo e($product->selling_price); ?></td>
                <td>
                    <img width="30px" height="20px"src="<?php echo e(route('imagecache', ['template' => 'sbixs', 'filename' => $product->fi()])); ?>"
                    alt="">
                </td>
<td scope="col">


        <?php if(empty($product->selling_price) || $product->selling_price == 0): ?>

            <button class="badge border-0 badge-danger productStatus"
                data-url="<?php echo e(route('admin.productStatus', ['product' => $product->id])); ?>">
                Set Price
            </button>

        <?php else: ?>

            <?php if($product->active == 1): ?>

                <button class="badge border-0 badge-primary productStatus"
                    data-url="<?php echo e(route('admin.productStatus', ['product' => $product->id])); ?>">
                    Active
                </button>

            <?php else: ?>

            <button class="badge border-0 badge-danger productStatus"
                data-url="<?php echo e(route('admin.productStatus', ['product' => $product->id])); ?>">
                Inactive
            </button>

        <?php endif; ?>

    <?php endif; ?>
</td>

<td>
    <form action="<?php echo e(route('admin.product.toggle-approval', $product->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="isActiveSwitch<?php echo e($product->id); ?>" name="active" data-price="<?php echo e($product->selling_price); ?>" <?php echo e($product->active ? 'checked' : ''); ?>>
            <label class="custom-control-label" for="isActiveSwitch<?php echo e($product->id); ?>"></label>
        </div>

    </form>
</td>
                
            
                
            </tr>

         
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="8" class="text-danger h5 text-center">No Product Found</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/admin/products/searchData.blade.php ENDPATH**/ ?>