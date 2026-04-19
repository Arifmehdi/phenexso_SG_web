

<?php $__env->startSection('title', $product->name_en . ' - Sungoods'); ?>

<?php $__env->startSection('meta'); ?>
<meta name="description" content="<?php echo e(Str::limit(strip_tags($product->description_en), 160)); ?>">
<meta property="og:title" content="<?php echo e($product->name_en); ?>">
<meta property="og:description" content="<?php echo e(Str::limit(strip_tags($product->description_en), 160)); ?>">
<meta property="og:image" content="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $product->fi()])); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
    .breadcrumb {
        display: flex !important;
        flex-wrap: wrap;
        align-items: center;
        list-style: none;
        padding: 0;
        margin: 0 0 20px 0;
    }
    .breadcrumb li {
        display: flex;
        align-items: center;
    }
    .breadcrumb li a {
        display: inline-flex;
        align-items: center;
    }
    .breadcrumb .delimiter {
        margin: 0 10px;
        color: #999;
    }
    .product-navigation {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-content mb-10 pb-6">
    <div class="container">
        <div class="product product-single row mb-7">
            <div class="col-md-6 sticky-sidebar-wrapper">
                <div class="product-gallery pg-vertical sticky-sidebar">
                    <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
                        <figure class="product-image">
                            <img src="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $product->fi()])); ?>"
                                data-zoom-image="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $product->fi()])); ?>"
                                alt="<?php echo e($product->name_en); ?>" width="800" height="900">
                        </figure>
                        <?php $__currentLoopData = $product->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <figure class="product-image">
                            <img src="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $media->file_name])); ?>"
                                data-zoom-image="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $media->file_name])); ?>"
                                alt="<?php echo e($product->name_en); ?>" width="800" height="900">
                        </figure>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="product-thumbs-wrap">
                        <div class="product-thumbs">
                            <div class="product-thumb active">
                                <img src="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $product->fi()])); ?>"
                                    alt="product thumbnail" width="109" height="122">
                            </div>
                            <?php $__currentLoopData = $product->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product-thumb">
                                <img src="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $media->file_name])); ?>"
                                    alt="product thumbnail" width="109" height="122">
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
                        <button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
                    </div>
                    <?php if($product->final_price < $product->selling_price): ?>
                    <div class="product-label-group">
                        <label class="product-label label-sale"><?php echo e(calculateDiscountPercentage($product->selling_price, $product->discount_price)); ?>% off</label>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-details">
                    <div class="product-navigation">
                        <ul class="breadcrumb breadcrumb-lg">
                            <li><a href="<?php echo e(route('home')); ?>"><i class="d-icon-home"></i></a></li>
                            <li class="delimiter">/</li>
                            <li><a href="<?php echo e(route('shop')); ?>" class="active">Products</a></li>
                            <li class="delimiter">/</li>
                            <li>Detail</li>
                        </ul>
                    </div>

                    <h1 class="product-name"><?php echo e($product->name_en); ?></h1>
                    <div class="product-meta">
                        SKU: <span class="product-sku"><?php echo e($product->sku ?? 'N/A'); ?></span>
                        CATEGORIES: <span class="product-brand">
                            <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('productCategory', $cat->slug)); ?>"><?php echo e($cat->name_en); ?></a><?php if(!$loop->last): ?>, <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </span>
                    </div>
                    <div class="product-price">
                        <span class="price">৳<?php echo e(number_format($product->selling_price - $product->discount_price, 2)); ?></span>
                        <?php if($product->discount_price > 0): ?>
                            <del class="old-price">৳<?php echo e(number_format($product->selling_price, 2)); ?></del>
                        <?php endif; ?>
                    </div>
                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width:80%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="#" class="rating-reviews">( 0 reviews )</a>
                    </div>
                    <p class="product-short-desc">
                        <?php echo Str::limit(strip_tags($product->description_en), 200); ?>

                    </p>

                    <hr class="product-divider">

                    <div class="product-form product-qty">
                        <div class="product-form-group">
                            <div class="input-group mr-2">
                                <button class="quantity-minus d-icon-minus"></button>
                                <input class="quantity form-control" type="number" min="1" max="1000000" value="1">
                                <button class="quantity-plus d-icon-plus"></button>
                            </div>
                            <button class="btn-product btn-cart text-normal ls-normal font-weight-semi-bold add-to-cart-btn" 
                                data-id="<?php echo e($product->id); ?>">
                                <i class="d-icon-bag"></i>Add to Cart
                            </button>
                        </div>
                    </div>

                    <hr class="product-divider mb-3">

                    <div class="product-footer">
                        <div class="social-links mr-4">
                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                            <a href="#" class="social-link social-pinterest fab fa-pinterest-p"></a>
                        </div>
                        <span class="divider d-lg-show"></span>
                        <a href="#" class="btn-product btn-wishlist mr-6 add-to-wishlist" data-id="<?php echo e($product->id); ?>">
                            <i class="d-icon-heart"></i>Add to wishlist</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab tab-nav-simple product-tabs">
            <ul class="nav nav-tabs justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#product-tab-description">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#product-tab-reviews">Reviews (0)</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active in" id="product-tab-description">
                    <div class="row mt-6">
                        <div class="col-md-12">
                            <?php echo $product->description_en; ?>

                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="product-tab-reviews">
                    <div class="row">
                        <div class="col-lg-4 mb-6">
                            <div class="avg-rating-container">
                                <mark>0.0</mark>
                                <div class="avg-rating">
                                    <span class="avg-rating-title">Average Rating</span>
                                    <div class="ratings-container mb-0">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:0%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <span class="rating-reviews">( 0 Reviews )</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 mb-6">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if($relatedProducts->count() > 0): ?>
        <section class="pt-3 mt-10">
            <h2 class="title justify-content-center">Related Products</h2>

            <div class="owl-carousel owl-theme owl-nav-full row cols-2 cols-md-3 cols-lg-4"
                data-owl-options="{
                'items': 5,
                'nav': false,
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
                        'items': 4,
                        'dots': false,
                        'nav': true
                    }
                }
            }">
                <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product">
                    <figure class="product-media">
                        <a href="<?php echo e(route('productDetails', $related->slug)); ?>">
                            <img src="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $related->fi()])); ?>" alt="product" width="280" height="315">
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon add-to-cart-btn" title="Add to cart" data-id="<?php echo e($related->id); ?>" >
                                <i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon add-to-wishlist" title="Add to wishlist" data-id="<?php echo e($related->id); ?>">
                                <i class="d-icon-heart"></i></a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="product-cat">
                            <?php $__currentLoopData = $related->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('productCategory', $cat->slug)); ?>"><?php echo e($cat->name_en); ?></a><?php if(!$loop->last): ?>, <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <h3 class="product-name">
                            <a href="<?php echo e(route('productDetails', $related->slug)); ?>"><?php echo e($related->name_en); ?></a>
                        </h3>
                        <div class="product-price">
                            <span class="price">৳<?php echo e(number_format($related->selling_price - $related->discount_price, 2)); ?></span>
                            <?php if($related->discount_price > 0): ?>
                                <del class="old-price">৳<?php echo e(number_format($related->selling_price, 2)); ?></del>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>
        <?php endif; ?>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
    $(document).on("click", ".add-to-cart-btn", function (e) {
        e.preventDefault();
        let id = $(this).data("id");
        let qty = $(".quantity").val() || 1;

        $.ajax({
            url: "<?php echo e(route('cart.quick.add')); ?>",
            type: "GET",
            data: { id: id, quantity: qty },
            success: function (res) {
                if (typeof Riode !== 'undefined' && Riode.Minipopup) {
                    Riode.Minipopup.open({
                        message: 'Successfully added to cart',
                        productClass: ' product-cart',
                        name: res.name,
                        nameLink: "<?php echo e(route('productDetails', '')); ?>/" + res.slug,
                        imageSrc: res.image,
                        imageLink: "<?php echo e(route('productDetails', '')); ?>/" + res.slug,
                        price: '৳' + res.price,
                        count: qty,
                        actionTemplate: '<div class="action-group d-flex mt-3"><a href="<?php echo e(route("cart")); ?>" class="btn btn-sm btn-outline btn-primary btn-rounded mr-2">View Cart</a><a href="<?php echo e(route("new.checkout")); ?>" class="btn btn-sm btn-primary btn-rounded">Check Out</a></div>'
                    });
                }
                
                if(res.cartCount !== undefined) {
                    $(".cart-count").text(res.cartCount);
                }
                if(res.cartTotal !== undefined) {
                    $(".cart-price").text('৳' + parseFloat(res.cartTotal).toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2}));
                }
                if(res.cartDropdownHtml) {
                    $(".cart-dropdown .dropdown-box").html(res.cartDropdownHtml);
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
                $("#liton_wishlist_modal .added-cart").text(res.message);
                $("#liton_wishlist_modal").modal('show');
            }
        });
    });

    $(document).on("click", ".cart-dropdown .btn-close", function (e) {
        e.preventDefault();
        let removeUrl = $(this).attr('href');
        
        $.ajax({
            url: removeUrl,
            type: "GET",
            success: function (res) {
                if(res.cartCount !== undefined) {
                    $(".cart-count").text(res.cartCount);
                }
                if(res.cartTotal !== undefined) {
                    $(".cart-price").text('৳' + parseFloat(res.cartTotal).toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2}));
                }
                if(res.cartDropdownHtml) {
                    $(".cart-dropdown .dropdown-box").html(res.cartDropdownHtml);
                }
            }
        });
    });

    // Quantity buttons logic
    // $(document).on('click', '.quantity-plus', function() {
    //     let $input = $(this).closest('.input-group').find('input.quantity');
    //     $input.val(parseInt($input.val()) + 1);
    // });

    // $(document).on('click', '.quantity-minus', function() {
    //     let $input = $(this).closest('.input-group').find('input.quantity');
    //     if (parseInt($input.val()) > 1) {
    //         $input.val(parseInt($input.val()) - 1);
    //     }
    // });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('website.layouts.sungoods', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/website/shop_details.blade.php ENDPATH**/ ?>