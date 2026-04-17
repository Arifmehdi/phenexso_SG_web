

<?php $__env->startSection('title', 'Blog Details - '. env('APP_NAME') ); ?>

<?php $__env->startSection('meta'); ?>
<meta name="description"
    content="Contact North Bengal for inquiries, product details, or business queries. Get in touch via phone, email, or visit our office.">
<meta name="keywords" content="contact north bengal, contact us, north bengal inquiries, phone, email, office location">
<meta property="og:title" content="Contact Us - North Bengal">
<meta property="og:description" content="Reach North Bengal for product inquiries or business partnerships.">
<meta property="og:image" content="<?php echo e(asset('frontend/assets/img/northbengal/contact_banner.png')); ?>">
<meta property="og:type" content="website">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- BREADCRUMB AREA START -->
<?php if (isset($component)) { $__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280 = $component; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['title' => 'News Details','pageName' => 'Latest News','bgImage' => 'frontend/img/bg/9.jpg'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

<!-- PAGE DETAILS AREA START (blog-details) -->
<div class="ltn__page-details-area ltn__blog-details-area mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__blog-details-wrap">
                    <div class="ltn__page-details-inner ltn__blog-details-inner">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-category">
                                    <a href="#"><?php echo e($news->category->name); ?></a>
                                </li>
                            </ul>
                        </div>
                        <h2 class="ltn__blog-title"><?php echo e($news->title); ?></h2>
                        <img src="<?php echo e(route('imagecache', ['template'=>'cpmd','filename' => $news->fi()])); ?>" alt="<?php echo e($news->title); ?>">
                        <div class="ltn__blog-meta">
                            <ul>
                                <!-- <li class="ltn__blog-author">
                                    <a href="#"><img src="<?php echo e(asset('frontend/img/blog/author.jpg')); ?>" alt="#">By: Ethan</a>
                                </li> -->
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i><?php echo e($news->created_at->format('M d, Y')); ?>

                                </li>
                                <!-- <li>
                                    <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                                </li> -->
                            </ul>
                        </div>
                        <p><?php echo $news->description; ?></p>

                    </div>
                    <!-- blog-tags-social-media -->
                    <div class="ltn__blog-tags-social-media mt-80 row">
                        <div class="ltn__tagcloud-widget col-lg-8">
                            <h4>Releted Tags</h4>
                            <ul>
                                <li>
                                    <a href="#">Popular</a>
                                </li>
                                <li>
                                    <a href="#">Business</a>
                                </li>
                                <li>
                                    <a href="#">ux</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ltn__social-media text-right text-end col-lg-4">
                            <h4>Social Share</h4>
                            <?php if (isset($component)) { $__componentOriginale20442bb06609c0221d12095ab90f9058520d14f = $component; } ?>
<?php $component = App\View\Components\BlogMedia::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('blog-media'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BlogMedia::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale20442bb06609c0221d12095ab90f9058520d14f)): ?>
<?php $component = $__componentOriginale20442bb06609c0221d12095ab90f9058520d14f; ?>
<?php unset($__componentOriginale20442bb06609c0221d12095ab90f9058520d14f); ?>
<?php endif; ?>
                        </div>
                    </div>
                    <hr>
                    <!-- prev-next-btn --> 
                    <div class="ltn__prev-next-btn row mb-50">
                        <div class="blog-prev col-lg-6">
                            <h6>Prev Post</h6>
                            <h3 class="ltn__blog-title"><a href="#">Tips On Minimalist</a></h3>
                        </div>
                        <div class="blog-prev blog-next text-right text-end col-lg-6">
                            <h6>Next Post</h6>
                            <h3 class="ltn__blog-title"><a href="#">Less Is More</a></h3>
                        </div>
                    </div>
                    <hr>
                    <!-- related-post -->
                    <div class="related-post-area mb-50">
                        <h4 class="title-2">Related Post</h4>
                        <div class="row">
                            <?php $__empty_1 = true; $__currentLoopData = $relatedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="col-md-6">
                                <!-- Blog Item -->
                                <div class="ltn__blog-item ltn__blog-item-6">
                                    <div class="ltn__blog-img">
                                        <a href="<?php echo e(route('singleNews', ['id' => $relate->id])); ?>"><img src="<?php echo e(route('imagecache', ['template'=>'cpmd','filename' => $relate->fi()])); ?>"
                                                alt="<?php echo e($relate->title); ?>"></a>
                                    </div>
                                    <div class="ltn__blog-brief">
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date ltn__secondary-color">
                                                    <i class="far fa-calendar-alt"></i><?php echo e($relate->created_at->format('M d, Y')); ?>

                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="ltn__blog-title"><a href="<?php echo e(route('singleNews', ['id' => $relate->id])); ?>"><?php echo e($relate->title); ?></a></h3>
                                        <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed doing.</p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                            <p>There have no related post</p>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                    <!-- comment-area -->
                    <div class="ltn__comment-area mb-50">
                        <div class="ltn-author-introducing clearfix">
                            <div class="author-img">
                                <img src="<?php echo e(asset('frontend/img/blog/author.jpg')); ?>" alt="Author Image">
                            </div>
                            <div class="author-info">
                                <h6>Written by</h6>
                                <h1>Rosalina D. William</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation is enougn for today.</p>
                            </div>
                        </div>
                        <h4 class="title-2">03 Comments</h4>
                        <div class="ltn__comment-inner">
                            <ul>
                                <li>
                                    <div class="ltn__comment-item clearfix">
                                        <div class="ltn__commenter-img">
                                            <img src="<?php echo e(asset('frontend/img/testimonial/1.jpg')); ?>" alt="Image">
                                        </div>
                                        <div class="ltn__commenter-comment">
                                            <h6><a href="#">Adam Smit</a></h6>
                                            <span class="comment-date">20th May 2020</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus,
                                                omnis fugit corporis iste magnam ratione.</p>
                                            <a href="#" class="ltn__comment-reply-btn"><i
                                                    class="icon-reply-1"></i>Reply</a>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="ltn__comment-item clearfix">
                                                <div class="ltn__commenter-img">
                                                    <img src="<?php echo e(asset('frontend/img/testimonial/3.jpg')); ?>" alt="Image">
                                                </div>
                                                <div class="ltn__commenter-comment">
                                                    <h6><a href="#">Adam Smit</a></h6>
                                                    <span class="comment-date">21th May 2020</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                    <a href="#" class="ltn__comment-reply-btn"><i
                                                            class="icon-reply-1"></i>Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="ltn__comment-item clearfix">
                                        <div class="ltn__commenter-img">
                                            <img src="<?php echo e(asset('frontend/img/testimonial/4.jpg')); ?>" alt="Image">
                                        </div>
                                        <div class="ltn__commenter-comment">
                                            <h6><a href="#">Adam Smit</a></h6>
                                            <span class="comment-date">25th May 2020</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus,
                                                omnis fugit corporis iste magnam ratione.</p>
                                            <a href="#" class="ltn__comment-reply-btn"><i
                                                    class="icon-reply-1"></i>Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <!-- comment-reply -->
                    <div class="ltn__comment-reply-area ltn__form-box mb-10">
                        <h4 class="title-2">Post Comment</h4>
                        <form action="#">
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea placeholder="Type your comments...."></textarea>
                            </div>
                            <div class="input-item input-item-name ltn__custom-icon">
                                <input type="text" placeholder="Type your name....">
                            </div>
                            <div class="input-item input-item-email ltn__custom-icon">
                                <input type="email" placeholder="Type your email....">
                            </div>
                            <div class="input-item input-item-website ltn__custom-icon">
                                <input type="text" name="website" placeholder="Type your website....">
                            </div>
                            <label class="mb-0 input-info-save"><input type="checkbox" name="agree"> Save my name,
                                email, and website in this browser for the next time I comment.</label>
                            <div class="btn-wrapper">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit"><i
                                        class="far fa-comments"></i> Post Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area blog-sidebar ltn__right-sidebar">
                    <!-- Author Widget -->
                    <?php if (isset($component)) { $__componentOriginalfe03c04e628dd6016573f4c42fcf3aa3a6f143f9 = $component; } ?>
<?php $component = App\View\Components\BlogAuthor::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('blog-author'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BlogAuthor::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe03c04e628dd6016573f4c42fcf3aa3a6f143f9)): ?>
<?php $component = $__componentOriginalfe03c04e628dd6016573f4c42fcf3aa3a6f143f9; ?>
<?php unset($__componentOriginalfe03c04e628dd6016573f4c42fcf3aa3a6f143f9); ?>
<?php endif; ?>

                    <!-- Search Widget -->
                    <?php if (isset($component)) { $__componentOriginalc1231a3bfc486ff9f6c43977b5eba9c4a6d12cb1 = $component; } ?>
<?php $component = App\View\Components\BlogSearch::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('blog-search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BlogSearch::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1231a3bfc486ff9f6c43977b5eba9c4a6d12cb1)): ?>
<?php $component = $__componentOriginalc1231a3bfc486ff9f6c43977b5eba9c4a6d12cb1; ?>
<?php unset($__componentOriginalc1231a3bfc486ff9f6c43977b5eba9c4a6d12cb1); ?>
<?php endif; ?>

                    <!-- Menu Widget (Category) -->
                    <?php if (isset($component)) { $__componentOriginal03b6e51c0efaeafe4cfe1d6edf376dd4821cf925 = $component; } ?>
<?php $component = App\View\Components\BlogCategory::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('blog-category'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BlogCategory::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal03b6e51c0efaeafe4cfe1d6edf376dd4821cf925)): ?>
<?php $component = $__componentOriginal03b6e51c0efaeafe4cfe1d6edf376dd4821cf925; ?>
<?php unset($__componentOriginal03b6e51c0efaeafe4cfe1d6edf376dd4821cf925); ?>
<?php endif; ?>

                    <!-- Popular Post Widget -->
                    <?php if (isset($component)) { $__componentOriginalb6161aaa0e9772d828787a3da644961ded7762f3 = $component; } ?>
<?php $component = App\View\Components\BlogPopular::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('blog-popular'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BlogPopular::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb6161aaa0e9772d828787a3da644961ded7762f3)): ?>
<?php $component = $__componentOriginalb6161aaa0e9772d828787a3da644961ded7762f3; ?>
<?php unset($__componentOriginalb6161aaa0e9772d828787a3da644961ded7762f3); ?>
<?php endif; ?>

                    <!-- Social Media Widget -->
                    <?php if (isset($component)) { $__componentOriginale20442bb06609c0221d12095ab90f9058520d14f = $component; } ?>
<?php $component = App\View\Components\BlogMedia::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('blog-media'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BlogMedia::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale20442bb06609c0221d12095ab90f9058520d14f)): ?>
<?php $component = $__componentOriginale20442bb06609c0221d12095ab90f9058520d14f; ?>
<?php unset($__componentOriginale20442bb06609c0221d12095ab90f9058520d14f); ?>
<?php endif; ?>

                    <!-- Tagcloud Widget -->
                    <?php if (isset($component)) { $__componentOriginal51d65b1a9dff28900b2d0adc15594181aca2d374 = $component; } ?>
<?php $component = App\View\Components\BlogTag::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('blog-tag'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BlogTag::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal51d65b1a9dff28900b2d0adc15594181aca2d374)): ?>
<?php $component = $__componentOriginal51d65b1a9dff28900b2d0adc15594181aca2d374; ?>
<?php unset($__componentOriginal51d65b1a9dff28900b2d0adc15594181aca2d374); ?>
<?php endif; ?> 

                    <!-- Banner Widget -->
                    <?php if (isset($component)) { $__componentOriginal962bfa21448c3c169db4e9884d4d71a18fc56921 = $component; } ?>
<?php $component = App\View\Components\BlogBanner::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('blog-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BlogBanner::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal962bfa21448c3c169db4e9884d4d71a18fc56921)): ?>
<?php $component = $__componentOriginal962bfa21448c3c169db4e9884d4d71a18fc56921; ?>
<?php unset($__componentOriginal962bfa21448c3c169db4e9884d4d71a18fc56921); ?>
<?php endif; ?>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- PAGE DETAILS AREA END -->

<!-- FEATURE AREA START ( Feature - 3) -->
<?php if (isset($component)) { $__componentOriginala893910ca94b1c9a1f60143fccd2dc960d74ad76 = $component; } ?>
<?php $component = App\View\Components\FooterFeature::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer-feature'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FooterFeature::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala893910ca94b1c9a1f60143fccd2dc960d74ad76)): ?>
<?php $component = $__componentOriginala893910ca94b1c9a1f60143fccd2dc960d74ad76; ?>
<?php unset($__componentOriginala893910ca94b1c9a1f60143fccd2dc960d74ad76); ?>
<?php endif; ?>
<!-- FEATURE AREA END -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/website/blog_details.blade.php ENDPATH**/ ?>