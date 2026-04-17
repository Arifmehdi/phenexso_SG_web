<!-- BREADCRUMB START (moderately compact) -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image"
     data-bg="<?php echo e(asset($bgImage)); ?>"
     style="padding: 80px 0;"> <!-- slightly taller -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between align-items-center">
                    
                    <!-- Title Area -->
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color" style="font-size: 15px; margin-bottom: 8px;">
                            // Welcome to <?php echo e(env('APP_NAME')); ?> //
                        </h6>
                        <h1 class="section-title white-color" style="font-size: 32px; margin-bottom: 6px;">
                            <?php echo e($title); ?>

                        </h1>
                    </div>

                    <!-- Breadcrumb List -->
                    <div class="ltn__breadcrumb-list">
                        <ul style="font-size: 14px; margin-bottom: 0;">
                            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li><?php echo e($pageName ?? $title); ?></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB END -->
<?php /**PATH D:\laragon\laragon\www\phenexso_SG_web\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>