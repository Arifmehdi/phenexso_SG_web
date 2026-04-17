<ul>
    <?php $__currentLoopData = $topClickedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <div class="top-rated-product-item clearfix">
            <div class="top-rated-product-img">
                <a href="<?php echo e(route('productDetails', $item->slug)); ?>">
                    <img src="<?php echo e(route('imagecache', ['template' => 'pnism', 'filename' => $item->fi()])); ?>" alt="<?php echo e($item->name_en); ?>">
                </a>
            </div>

            <div class="top-rated-product-info">
                <h6>
                    <a href="<?php echo e(route('productDetails', $item->slug)); ?>">
                        <?php echo e($item->name_en); ?>

                    </a>
                </h6>

                <div class="product-price">
                    <span><?php echo e(number_format($item->final_price, 2)); ?> ৳</span>
                </div>
            </div>
        </div>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH D:\laragon\laragon\www\phenexso_SG_web\resources\views/website/layouts/top_products.blade.php ENDPATH**/ ?>