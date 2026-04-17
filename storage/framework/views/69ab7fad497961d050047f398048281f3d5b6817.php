<div class="widget ltn__menu-widget ltn__menu-widget-2 ltn__menu-widget-2-color-2">
    <h4 class="ltn__widget-title ltn__widget-title-border">Categories</h4>
    <ul>
        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <li><a href="#"><?php echo e($category->name); ?> </a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
        <p>There have no categories</p>
        <?php endif; ?>
        <!-- <li><a href="#">Business <span>26</span></a></li>
        <li><a href="#">Consultant <span>30</span></a></li>
        <li><a href="#">Creative <span>71</span></a></li>
        <li><a href="#">UI/UX <span>56</span></a></li>
        <li><a href="#">Technology <span>60</span></a></li> -->
    </ul>
</div><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/components/blog-category.blade.php ENDPATH**/ ?>