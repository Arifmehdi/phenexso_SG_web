<div class="widget ltn__popular-post-widget">
    <h4 class="ltn__widget-title ltn__widget-title-border">Popular Feeds</h4>
    <ul>
        <?php $__empty_1 = true; $__currentLoopData = $popular_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular_post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <li>
            <div class="popular-post-widget-item clearfix">
                <div class="popular-post-widget-img">
                    <a href="<?php echo e(route('singleNews', ['id' => $popular_post->id])); ?>"><img src="<?php echo e(route('imagecache', ['template'=>'cpmd','filename' => $popular_post->fi()])); ?>" alt="#"></a>
                </div>
                <div class="popular-post-widget-brief">
                    <h6><a href="<?php echo e(route('singleNews', ['id' => $popular_post->id])); ?>"><?php echo e($popular_post->title); ?></a></h6>
                    <div class="ltn__blog-meta">
                        <ul>
                            <li class="ltn__blog-date">
                                <a href="#"><i class="far fa-calendar-alt"></i><?php echo e($popular_post->created_at->format('M d , Y')); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
        <p>Here no popular post</p>
        <?php endif; ?>
    </ul>
</div>
<?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/components/blog-popular.blade.php ENDPATH**/ ?>