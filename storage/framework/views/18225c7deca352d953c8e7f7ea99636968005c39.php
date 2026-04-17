<?php if($paginator->hasPages()): ?>
    <div class="ltn__pagination-area text-center">
        <div class="ltn__pagination">
            <ul>
                
                <?php if($paginator->onFirstPage()): ?>
                    <li class="disabled"><span><i class="fas fa-angle-double-left"></i></span></li>
                <?php else: ?>
                    <li><a href="<?php echo e($paginator->previousPageUrl()); ?>"><i class="fas fa-angle-double-left"></i></a></li>
                <?php endif; ?>

                
                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if(is_string($element)): ?>
                        <li><span><?php echo e($element); ?></span></li>
                    <?php endif; ?>

                    
                    <?php if(is_array($element)): ?>
                        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page == $paginator->currentPage()): ?>
                                <li class="active"><a href="#"><?php echo e($page); ?></a></li>
                            <?php else: ?>
                                <li><a href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                <?php if($paginator->hasMorePages()): ?>
                    <li><a href="<?php echo e($paginator->nextPageUrl()); ?>"><i class="fas fa-angle-double-right"></i></a></li>
                <?php else: ?>
                    <li class="disabled"><span><i class="fas fa-angle-double-right"></i></span></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH D:\laragon\laragon\www\phenexso_SG_web\resources\views/pagination/ltn.blade.php ENDPATH**/ ?>