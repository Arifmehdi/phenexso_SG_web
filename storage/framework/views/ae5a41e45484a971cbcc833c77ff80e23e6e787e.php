<?php $__env->startSection('title', 'Contact Us - ' . config('app.name')); ?>
<?php $__env->startSection('meta'); ?>
    <meta name="description" content="Contact North Bengal for inquiries, product details, or business queries. Get in touch via phone, email, or visit our office.">
    <meta name="keywords" content="contact north bengal, contact us, north bengal inquiries, phone, email, office location">
    <meta property="og:title" content="Contact Us - North Bengal">
    <meta property="og:description" content="Reach North Bengal for product inquiries or business partnerships.">
    <meta property="og:image" content="<?php echo e(asset('frontend/assets/img/northbengal/contact_banner.png')); ?>">
    <meta property="og:type" content="website">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<style>
    
</style>
<!-- BREADCRUMB AREA START -->
<?php if (isset($component)) { $__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280 = $component; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['title' => 'Contact Us','pageName' => 'Contact Us','bgImage' => 'frontend/img/bg/9.jpg'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Breadcrumb::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280)): ?>
<?php $component = $__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280; ?>
<?php unset($__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280); ?>
<?php endif; ?>
<!-- BREADCRUMB AREA END -->

<!-- CONTACT ADDRESS AREA START -->
<div class="ltn__contact-address-area mb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="<?php echo e(asset('frontend/img/icons/10.png')); ?>" alt="Icon Image">
                    </div>
                    <h3>Email Address</h3>
                    <p><?php echo e($ws->contact_email); ?> </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="<?php echo e(asset('frontend/img/icons/11.png')); ?>" alt="Icon Image">
                    </div>
                    <h3>Phone Number</h3>
                    <p><?php echo e($ws->contact_mobile); ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="<?php echo e(asset('frontend/img/icons/12.png')); ?>" alt="Icon Image">
                    </div>
                    <h3>Office Address</h3>
                    <p><?php echo e($ws->contact_address); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT ADDRESS AREA END -->

<!-- CONTACT MESSAGE AREA START -->
<div class="ltn__contact-message-area mb-120 mb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__form-box contact-form-box box-shadow white-bg">
                    <h4 class="title-2">Help Desk Form</h4>
                    <?php if(session('success')): ?>
                        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                    <?php endif; ?>

                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form id="contact-form" action="<?php echo e(route('contact.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="name" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-email ltn__custom-icon">
                                    <input type="email" name="email" placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item">
                                    <select class="nice-select" name="subject">
                                        <option value="">Select Service Type</option>
                                        <option value="Transport">Transport</option>
                                        <option value="Product Delay">Product Delay</option>
                                        <option value="Update Product/Price">Update Product/Price</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-phone ltn__custom-icon">
                                    <input type="text" name="phone" placeholder="Enter phone number">
                                </div>
                            </div>
                        </div>
                        <div class="input-item input-item-textarea ltn__custom-icon">
                            <textarea name="message" placeholder="Enter message"></textarea>
                        </div>
                        <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label></p>
                        <div class="btn-wrapper mt-0">
                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit For Help</button>
                        </div>
                        <p class="form-messege mb-0 mt-20"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT MESSAGE AREA END -->
<br>
<!-- GOOGLE MAP AREA START -->
<div class="google-map mb-120">
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14602.79920425715!2d90.39505561023496!3d23.793702090776875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70e61c0dcf3%3A0xfc162eac4282aa4a!2sDhaka%201213!5e0!3m2!1sen!2sbd!4v1763294719745!5m2!1sen!2sbd" 
            frameborder="0" 
            allowfullscreen="" 
            aria-hidden="false" 
            tabindex="0">
        </iframe>
    </div>
</div>
<!-- GOOGLE MAP AREA END -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
.map-container {
    width: 100%;
    /* max-width: 800px;  */
      /* max width of map */
    height: 400px;      /* height of map */
    margin: 0 auto;     /* center map */
    border-radius: 8px; /* optional rounded corners */
    overflow: hidden;
}

.map-container iframe {
    width: 100%;
    height: 100%;
    border: 0;
}

/* Optional: make responsive for mobile */
@media (max-width: 767px) {
    .map-container {
        height: 300px;
    }
}
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('website.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/website/contact.blade.php ENDPATH**/ ?>