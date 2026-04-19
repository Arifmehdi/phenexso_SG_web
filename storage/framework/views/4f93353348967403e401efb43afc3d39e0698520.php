<footer class="footer">
    <div class="container">
        
        <!-- End FooterTop -->
        <div class="footer-middle">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget-info">
                        <h4 class="widget-title">Contact Info</h4>
                        <ul class="widget-body">
                            <li>
                                <label>Phone:</label>
                                <a href="tel:<?php echo e($ws->contact_mobile); ?>"><?php echo e($ws->contact_mobile); ?></a>
                            </li>
                            <li>
                                <label>Email:</label>
                                <a href="mailto:<?php echo e($ws->contact_email); ?>"><?php echo e($ws->contact_email); ?></a>
                            </li>
                            <li>
                                <label>Address:</label>
                                <a href="#"><?php echo e($ws->contact_address); ?></a>
                            </li>
                            <li>
                                <label>WORKING DAYS / HOURS:</label>
                            </li>
                            <li>
                                <a href="#"><?php echo e($ws->working_day ?? 'Mon - Sun / 9:00 AM - 8:00 PM'); ?></a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget ml-lg-4">
                        <h4 class="widget-title">My Account</h4>
                        <ul class="widget-body">
                            <li>
                                <a href="<?php echo e(route('about-us')); ?>">About Us</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('user.orders', 'all')); ?>">Order History</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('return-policy')); ?>">Returns</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('contact')); ?>">Custom Service</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('terms')); ?>">Terms &amp; Condition</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget ml-lg-4">
                        <h4 class="widget-title">Quick Links</h4>
                        <ul class="widget-body">
                            <?php $__currentLoopData = $footerMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e($menu->link); ?>"><?php echo e($menu->name_en); ?></a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route('cart')); ?>">View Cart</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('wishlist.index')); ?>">My Wishlist</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Widget -->
                </div>
                
            </div>
        </div>
        <!-- End FooterMiddle -->
        <div class="footer-bottom">
            <div class="footer-left">
                <figure class="payment">
                    <img src="<?php echo e(asset('sungoods/images/payment.png')); ?>" alt="payment" width="159" height="29" />
                </figure>
            </div>
            <div class="footer-center">
                <p class="copyright"><?php echo e($ws->copyright_text ?? 'Sungoods eCommerce © 2026. All Rights Reserved'); ?></p>
            </div>
            <div class="footer-right">
                <div class="social-links">
                    <a href="<?php echo e($ws->facebook_link ?? '#'); ?>" title="social-link" class="social-link social-facebook fab fa-facebook-f"></a>
                    <a href="<?php echo e($ws->twitter_link ?? '#'); ?>" title="social-link" class="social-link social-twitter fab fa-twitter"></a>
                    <a href="<?php echo e($ws->linkedin_link ?? '#'); ?>" title="social-link" class="social-link social-linkedin fab fa-linkedin-in"></a>
                </div>
            </div>
        </div>
        <!-- End FooterBottom -->
    </div>
</footer>
<?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/website/layouts/sungoods_footer.blade.php ENDPATH**/ ?>