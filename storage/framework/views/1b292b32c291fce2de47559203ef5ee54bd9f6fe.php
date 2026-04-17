

<?php $__env->startSection('title', 'Home - '. ($ws->name ?? env('APP_NAME'))); ?>

<?php $__env->startSection('meta'); ?>
<meta name="description" content="<?php echo e($ws->meta_description ?? 'Sungoods offers premium products and world-class services.'); ?>">
<meta name="keywords" content="<?php echo e($ws->meta_keywords ?? 'Sungoods, ecommerce, quality products'); ?>">
<meta property="og:title" content="Home - <?php echo e($ws->name ?? env('APP_NAME')); ?>">
<meta property="og:description" content="<?php echo e($ws->meta_description ?? 'Discover quality products at Sungoods.'); ?>">
<meta property="og:image" content="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $ws->logo()])); ?>">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-content">
    <section class="intro-section">
        <div class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 gutter-no"
            data-owl-options="{
            'nav': false,
            'dots': true,
            'loop': true,
            'items': 1,
            'autoplay': true,
            'autoplayTimeout': 8000
        }">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="banner banner-fixed intro-slide1" style="background-color: #46b2e8;">
                <figure>
                    <img src="<?php echo e(route('imagecache', ['template'=>'original','filename' => $slider->fi()])); ?>" alt="<?php echo e($slider->title); ?>" width="1903"
                        height="630" style="background-color: #34ace5;" />
                </figure>
                <div class="container">
                    <div class="banner-content y-50">
                        <h4 class="banner-subtitle font-weight-bold ls-l">
                            <!-- <span class="d-inline-block slide-animate"
                                data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">Premium</span>
                            <span class="d-inline-block label-star bg-white text-primary slide-animate"
                                data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.4s'}">Quality</span> -->
                        </h4>
                        <h2 class="banner-title font-weight-bold text-white lh-1 ls-md slide-animate"
                            data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                            <?php echo $slider->title; ?></h2>
                        <p class="slide-animate text-white ls-s mb-7"
                            data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                            <?php echo e($slider->description); ?></p>
                        <?php if($slider->link): ?>
                        <a href="<?php echo e($slider->link); ?>" class="btn btn-dark btn-rounded slide-animate"
                            data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">Shop
                            Now<i class="d-icon-arrow-right"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="container mt-6 appear-animate">
            <div class="service-list">
                <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                        'items': 3,
                        'nav': false,
                        'dots': false,
                        'loop': true,
                        'autoplay': true,
                        'autoplayTimeout': 5000,
                        'responsive': {
                            '0': {
                                'items': 1
                            },
                            '576': {
                                'items': 2
                            },
                            '768': {
                                'items': 3,
                                'loop': false
                            }
                        }
                    }">
                    <div class="icon-box icon-box-side icon-box1 appear-animate" data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'delay': '.3s'
                        }">
                        <i class="icon-box-icon d-icon-truck"></i>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title text-capitalize ls-normal lh-1">Free Shipping &amp;
                                Return
                            </h4>
                            <p class="ls-s lh-1">Free shipping on orders over ৳999</p>
                        </div>
                    </div>

                    <div class="icon-box icon-box-side icon-box2 appear-animate" data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'delay': '.4s'
                        }">
                        <i class="icon-box-icon d-icon-service"></i>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title text-capitalize ls-normal lh-1">Customer Support 24/7
                            </h4>
                            <p class="ls-s lh-1">Instant access to perfect support</p>
                        </div>
                    </div>

                    <div class="icon-box icon-box-side icon-box3 appear-animate" data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'delay': '.5s'
                        }">
                        <i class="icon-box-icon d-icon-secure"></i>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title text-capitalize ls-normal lh-1">100% Secure Payment
                            </h4>
                            <p class="ls-s lh-1">We ensure secure payment!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-10 mt-7 appear-animate" data-animation-options="{
        'delay': '.3s'
    }">
        <div class="container">
            <h2 class="title title-center mb-5">Our Categories</h2>
            <div class="row">
                <?php $__currentLoopData = $categories->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xs-6 col-lg-3 mb-4">
                    <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                        <a href="<?php echo e(route('productCategory', $cat->slug)); ?>">
                            <figure class="category-media">
                                <img src="<?php echo e(route('imagecache', ['template'=>'original','filename' => $cat->fi()])); ?>" alt="<?php echo e($cat->name_en); ?>" width="280"
                                    height="280" style="background-color: #8c8c8d;" />
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name font-weight-bold ls-l"><a href="<?php echo e(route('productCategory', $cat->slug)); ?>"><?php echo e($cat->name_en); ?></a></h4>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <section class="product-wrapper container appear-animate mt-6 mt-md-10 pt-4 pb-8"
        data-animation-options="{
        'delay': '.3s'
    }">
        <h2 class="title title-center mb-5">Featured Products</h2>
        <div class="owl-carousel owl-theme row owl-nav-full cols-2 cols-md-3 cols-lg-4" data-owl-options="{
            'items': 4,
            'nav': true,
            'loop': false,
            'dots': true,
            'margin': 20,
            'responsive': {
                '0': {
                    'items': 2
                },
                '768': {
                    'items': 3
                },
                '992': {
                    'items': 4
                }
            }
        }">
            <?php $__currentLoopData = $feature_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="product text-center">
                <figure class="product-media">
                    <a href="<?php echo e(route('productDetails', $product->slug)); ?>">
                        <img src="<?php echo e(route('imagecache', ['template'=>'original','filename' => $product->fi()])); ?>" alt="<?php echo e($product->name_en); ?>"
                            width="280" height="315" style="background-color: #f2f3f5;" />
                    </a>
                    <div class="product-label-group">
                        <?php if($product->final_price < $product->selling_price): ?>
                        <label class="product-label label-sale"><?php echo e(calculateDiscountPercentage($product->selling_price, $product->discount_price)); ?>% off</label>
                        <?php endif; ?>
                    </div>
                    <div class="product-action-vertical">
                        <a href="#" class="btn-product-icon btn-cart add-to-cart-btn" data-id="<?php echo e($product->id); ?>" title="Add to cart"><i class="d-icon-bag"></i></a>
                        <a href="#" class="btn-product-icon btn-wishlist add-to-wishlist" data-id="<?php echo e($product->id); ?>" title="Add to wishlist"><i
                                class="d-icon-heart"></i></a>
                    </div>
                    <div class="product-action">
                        <a href="<?php echo e(route('productDetails', $product->slug)); ?>" class="btn-product" title="Quick View">View Details</a>
                    </div>
                </figure>
                <div class="product-details">
                    <div class="product-cat">
                        <?php if($product->categories->first()): ?>
                        <a href="<?php echo e(route('productCategory', $product->categories->first()->slug)); ?>"><?php echo e($product->categories->first()->name_en); ?></a>
                        <?php endif; ?>
                    </div>
                    <h3 class="product-name">
                        <a href="<?php echo e(route('productDetails', $product->slug)); ?>"><?php echo e($product->name_en); ?></a>
                    </h3>
                    <div class="product-price">
                        <?php if($product->final_price < $product->selling_price): ?>
                        <ins class="new-price">৳<?php echo e(number_format($product->selling_price - $product->discount_price, 2)); ?></ins><del class="old-price">৳<?php echo e(number_format($product->selling_price, 2)); ?></del>
                        <?php else: ?>
                        <span class="price">৳<?php echo e(number_format($product->selling_price, 2)); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width:100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="<?php echo e(route('productDetails', $product->slug)); ?>" class="rating-reviews">( <?php echo e($product->reviews_count ?? 0); ?> reviews )</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    
    <section class="banner banner-background parallax text-center" data-option="{'offset': -60}"
        data-image-src="images/demos/demo1/parallax.jpg" style="background-color: #2d2f33;">
        <div class="container">
            <div class="banner-content appear-animate"
                data-animation-options="{'name': 'blurIn', 'duration': '1s', 'delay': '.2s'}">
                <h4 class="banner-subtitle text-white font-weight-bold ls-l">
                    Extra<span class="d-inline-block label-star bg-dark text-primary ml-4 mr-2">30%
                        Off</span>Online
                </h4>
                <h3 class="banner-title font-weight-bold text-white">Summer Season Sale</h3>
                <p class="text-white ls-s">Free shipping on orders over $99</p>
                <a href="shop.html" class="btn btn-primary btn-rounded btn-icon-right">Shop Now<i
                        class="d-icon-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <section class="blog-section mt-10 appear-animate">
        <div class="container">
            <h2 class="title title-center mb-5">Latest Articles</h2>
            <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                'nav': false,
                'dots': true,
                'items': 3,
                'margin': 20,
                'responsive': {
                    '0': {
                        'items': 1
                    },
                    '576': {
                        'items': 2
                    },
                    '992': {
                        'items': 3,
                        'dots': false
                    }
                }
            }">
                <?php $__currentLoopData = $newses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="blog-post mb-4">
                    <article class="post post-frame overlay-zoom">
                        <figure class="post-media">
                            <a href="<?php echo e(route('singleNews', $news->id)); ?>">
                                <img src="<?php echo e(route('imagecache', ['template'=>'original','filename' => $news->fi()])); ?>" alt="<?php echo e($news->title); ?>" width="340" height="206"
                                    style="background-color: #919fbc;" />
                            </a>
                            <div class="post-calendar">
                                <span class="post-day"><?php echo e($news->created_at->format('d')); ?></span>
                                <span class="post-month"><?php echo e($news->created_at->format('M')); ?></span>
                            </div>
                        </figure>
                        <div class="post-details">
                            <h4 class="post-title"><a href="<?php echo e(route('singleNews', $news->id)); ?>"><?php echo e($news->title); ?></a></h4>
                            <p class="post-content"><?php echo e(Str::limit(strip_tags($news->text_en), 100)); ?></p>
                            <a href="<?php echo e(route('singleNews', $news->id)); ?>" class="btn btn-primary btn-link btn-underline">Read
                                More<i class="d-icon-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <section class="brand-section mt-10 mb-10 appear-animate">
        <div class="container">
            <h2 class="title title-center mb-5">Our Brands</h2>
            <div class="owl-carousel owl-theme row brand-carousel cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2"
                data-owl-options="{
                'nav': false,
                'dots': false,
                'autoplay': true,
                'margin': 20,
                'loop': true,
                'responsive': {
                    '0': {
                        'items': 2
                    },
                    '576': {
                        'items': 3
                    },
                    '768': {
                        'items': 4
                    },
                    '992': {
                        'items': 5
                    },
                    '1200': {
                        'items': 6
                    }
                }
            }">
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <figure><img src="<?php echo e($brand->fi_url); ?>" alt="<?php echo e($brand->title); ?>" width="180" height="100" />
                </figure>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <section class="product-widget-wrapper pb-2 pb-md-10 appear-animate">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="widget widget-products appear-animate" data-animation-options="{
                        'name': 'fadeInLeftShorter',
                        'delay': '.5s'
                    }">
                        <h4 class="widget-title border-no lh-1 font-weight-bold">Sale Products</h4>
                        <div class="products-col">
                            <?php $__currentLoopData = $sale_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product product-list-sm">
                                <figure class="product-media">
                                    <a href="<?php echo e(route('productDetails', $product->slug)); ?>">
                                        <img src="<?php echo e(route('imagecache', ['template'=>'pnism','filename' => $product->fi()])); ?>" alt="<?php echo e($product->name_en); ?>"
                                            width="100" height="114" style="background-color: #f2f3f5;" />
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="<?php echo e(route('productDetails', $product->slug)); ?>"><?php echo e($product->name_en); ?></a>
                                    </h3>
                                    <div class="product-price">
                                        <?php if($product->final_price < $product->selling_price): ?>
                                        <ins class="new-price">৳<?php echo e(number_format($product->selling_price - $product->discount_price, 2)); ?></ins><del class="old-price">৳<?php echo e(number_format($product->selling_price, 2)); ?></del>
                                        <?php else: ?>
                                        <span class="price">৳<?php echo e(number_format($product->selling_price, 2)); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="widget widget-products appear-animate" data-animation-options="{
                        'name': 'fadeInLeftShorter',
                        'delay': '.3s'
                    }">
                        <h4 class="widget-title border-no lh-1 font-weight-bold">Latest Products</h4>
                        <div class="products-col">
                            <?php $__currentLoopData = $latest_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product product-list-sm">
                                <figure class="product-media">
                                    <a href="<?php echo e(route('productDetails', $product->slug)); ?>">
                                        <img src="<?php echo e(route('imagecache', ['template'=>'pnism','filename' => $product->fi()])); ?>" alt="<?php echo e($product->name_en); ?>"
                                            width="100" height="114" style="background-color: #f2f3f5;" />
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="<?php echo e(route('productDetails', $product->slug)); ?>"><?php echo e($product->name_en); ?></a>
                                    </h3>
                                    <div class="product-price">
                                        <?php if($product->final_price < $product->selling_price): ?>
                                        <ins class="new-price">৳<?php echo e(number_format($product->selling_price - $product->discount_price, 2)); ?></ins><del class="old-price">৳<?php echo e(number_format($product->selling_price, 2)); ?></del>
                                        <?php else: ?>
                                        <span class="price">৳<?php echo e(number_format($product->selling_price, 2)); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="widget widget-products appear-animate" data-animation-options="{
                        'name': 'fadeInRightShorter',
                        'delay': '.3s'
                    }">
                        <h4 class="widget-title border-no lh-1 font-weight-bold">Best of the Week</h4>
                        <div class="products-col">
                            <?php $__currentLoopData = $best_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product product-list-sm">
                                <figure class="product-media">
                                    <a href="<?php echo e(route('productDetails', $product->slug)); ?>">
                                        <img src="<?php echo e(route('imagecache', ['template'=>'pnism','filename' => $product->fi()])); ?>" alt="<?php echo e($product->name_en); ?>"
                                            width="100" height="114" style="background-color: #f2f3f5;" />
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="<?php echo e(route('productDetails', $product->slug)); ?>"><?php echo e($product->name_en); ?></a>
                                    </h3>
                                    <div class="product-price">
                                        <?php if($product->final_price < $product->selling_price): ?>
                                        <ins class="new-price">৳<?php echo e(number_format($product->selling_price - $product->discount_price, 2)); ?></ins><del class="old-price">৳<?php echo e(number_format($product->selling_price, 2)); ?></del>
                                        <?php else: ?>
                                        <span class="price">৳<?php echo e(number_format($product->selling_price, 2)); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="widget widget-products appear-animate" data-animation-options="{
                        'name': 'fadeInRightShorter',
                        'delay': '.5s'
                    }">
                        <h4 class="widget-title border-no lh-1 font-weight-bold">Popular</h4>
                        <div class="products-col">
                            <?php $__currentLoopData = $popular_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product product-list-sm">
                                <figure class="product-media">
                                    <a href="<?php echo e(route('productDetails', $product->slug)); ?>">
                                        <img src="<?php echo e(route('imagecache', ['template'=>'pnism','filename' => $product->fi()])); ?>" alt="<?php echo e($product->name_en); ?>"
                                            width="100" height="114" style="background-color: #f2f3f5;" />
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="<?php echo e(route('productDetails', $product->slug)); ?>"><?php echo e($product->name_en); ?></a>
                                    </h3>
                                    <div class="product-price">
                                        <?php if($product->final_price < $product->selling_price): ?>
                                        <ins class="new-price">৳<?php echo e(number_format($product->selling_price - $product->discount_price, 2)); ?></ins><del class="old-price">৳<?php echo e(number_format($product->selling_price, 2)); ?></del>
                                        <?php else: ?>
                                        <span class="price">৳<?php echo e(number_format($product->selling_price, 2)); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
$(document).on('click', '.add-to-cart-btn', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    $.ajax({
        url: "<?php echo e(route('cart.quick.add')); ?>",
        type: "GET",
        data: {
            id: id
        },
        success: function(res) {
            if(res.success) {
                // Update cart count in header
                $('.cart-count').text(res.cartCount);
                // Update cart price in header
                $('.cart-price').text('৳' + res.cartTotal.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
                // Update cart dropdown content
                $('.dropdown-box').html(res.cartDropdownHtml);
                // Show success message
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: res.message,
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: res.message,
                });
            }
        }
    });
});

$(document).on('click', '.add-to-wishlist', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    $.ajax({
        url: "<?php echo e(route('wishlist.add')); ?>",
        type: "POST",
        data: {
            product_id: id,
            _token: "<?php echo e(csrf_token()); ?>"
        },
        success: function(res) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: res.message,
            });
        }
    });
});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('website.layouts.sungoods', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/website/index.blade.php ENDPATH**/ ?>