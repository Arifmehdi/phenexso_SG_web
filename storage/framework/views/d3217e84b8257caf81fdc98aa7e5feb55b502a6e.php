<?php $__env->startSection('title'); ?>
    Admin Dashboard | <?php echo e(env('APP_NAME')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<section class="content py-5" style="min-height: 700px;">
    <div class="row g-4">
        
        <div class="col-xl-3 col-md-6">
            <div class="card w3-purple shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-end">
                    <div>
                        <h4 class="text-white mb-1"><?php echo e($productcount); ?></h4>
                        <h6 class="text-white mb-0">All Products</h6>
                    </div>
                    <div style="width: 45px; height: 50px;">
                        <canvas id="chart-products" height="50"></canvas>
                    </div>
                </div>
                <div class="card-footer text-center border-top border-light">
                    <a href="<?php echo e(route('admin.productsAll')); ?>" class="text-white">View All</a>
                </div>
            </div>
        </div>

        
        <div class="col-xl-3 col-md-6">
            <div class="card w3-deep-purple shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-end">
                    <div>
                        <h4 class="text-white mb-1"><?php echo e($orders); ?></h4>
                        <h6 class="text-white mb-0">All Orders</h6>
                    </div>
                    <div style="width: 45px; height: 50px;">
                        <canvas id="chart-orders" height="50"></canvas>
                    </div>
                </div>
                <div class="card-footer text-center border-top border-light">
                    <a href="<?php echo e(route('admin.orderList')); ?>" class="text-white">View All</a>
                </div>
            </div>
        </div>

        
        <div class="col-xl-3 col-md-6">
            <div class="card w3-teal shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-end">
                    <div>
                        <h4 class="text-white mb-1"><?php echo e($users); ?></h4>
                        <h6 class="text-white mb-0">All Users</h6>
                    </div>
                    <div style="width: 45px; height: 50px;">
                        <canvas id="chart-users" height="50"></canvas>
                    </div>
                </div>
                <div class="card-footer text-center border-top border-light">
                    <a href="<?php echo e(route('admin.all_user')); ?>" class="text-white">View All</a>
                </div>
            </div>
        </div>

        
        <div class="col-xl-3 col-md-6">
            <div class="card w3-indigo shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-end">
                    <div>
                        <h4 class="text-white mb-1"><?php echo e($cat); ?></h4>
                        <h6 class="text-white mb-0">All Categories</h6>
                    </div>
                    <div style="width: 45px; height: 50px;">
                        <canvas id="chart-doctors" height="50"></canvas>
                    </div>
                </div>
                <div class="card-footer text-center border-top border-light">
                    <a href="<?php echo e(route('admin.productCategoriesAll')); ?>" class="text-white">View All</a>
                </div>
            </div>
        </div>
    </div>

    
    <div class="card w3-round shadow-lg mt-5">
        <div class="card-header py-2 d-flex align-items-center">
            <h3 class="card-title w3-small fw-bold text-muted mb-0">
                <i class="fas fa-th text-primary me-1"></i> Top Products
            </h3>
        </div>

        <div class="card-body bg-light px-0 pb-0 pt-2">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover align-middle">
                    <thead class="w3-small text-muted bg-light">
                        <tr>
                            <th width="30">SL</th>
                            <th width="60">Action</th>
                            <th>Product Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary btn-xs dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="<?php echo e(route('admin.productEdit', $product)); ?>" class="dropdown-item">
                                                    <i class="fa fa-edit me-1"></i> Edit
                                                </a>
                                            </li>
                                            <li>
                                                <form action="<?php echo e(route('admin.productDelete', $product)); ?>" method="post"
                                                    onsubmit="return confirm('Are you sure to delete?')">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="fa fa-trash me-1"></i> Delete
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td><?php echo e(Str::limit($product->name_en, 30)); ?></td>
                                <td><?php echo e($product->stock ?? 'N/A'); ?></td>
                                <td><?php echo e($product->price); ?></td>
                                <td>
                                    <img src="<?php echo e(route('imagecache', ['template' => 'sbixs', 'filename' => $product->fi()])); ?>"
                                         width="40" height="30" alt="Product Image">
                                </td>
                                <td>
                                    <?php if($product->active == 1): ?>
                                        <button class="badge bg-primary border-0 productStatus"
                                            data-url="<?php echo e(route('admin.productStatus', ['product' => $product->id])); ?>">
                                            Active
                                        </button>
                                    <?php else: ?>
                                        <button class="badge bg-danger border-0 productStatus"
                                            data-url="<?php echo e(route('admin.productStatus', ['product' => $product->id])); ?>">
                                            Inactive
                                        </button>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="7" class="text-center text-danger fw-bold">No Product Found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/admin/index.blade.php ENDPATH**/ ?>