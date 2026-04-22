<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title><?php echo $__env->yieldContent('title', $ws->name ?? 'Sungoods'); ?></title>

    <?php echo $__env->yieldContent('meta'); ?>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()])); ?>">
    
    <script>
        WebFontConfig = {
            google: { families: [ 'Poppins:300,400,500,600,700,800' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = "<?php echo e(asset('sungoods/js/webfont.js')); ?>";
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('sungoods/vendor/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('sungoods/vendor/animate/animate.min.css')); ?>">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('sungoods/vendor/magnific-popup/magnific-popup.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('sungoods/vendor/owl-carousel/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('sungoods/vendor/sticky-icon/stickyicon.css')); ?>">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('sungoods/css/demo1.min.css')); ?>">
    
    <?php echo $__env->yieldPushContent('css'); ?>
    <style>
        .search-results-wrapper {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: #fff;
            z-index: 1000;
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid #eee;
            border-top: none;
            border-radius: 0 0 4px 4px;
        }
        .search-result-item {
            padding: 10px;
            border-bottom: 1px solid #f5f5f5;
            transition: background 0.2s;
            display: flex;
            align-items: center;
            text-decoration: none !important;
        }
        .search-result-item:hover {
            background: #f9f9f9;
        }
        .search-result-item:last-child {
            border-bottom: none;
        }
        .search-result-item img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-right: 15px;
            border-radius: 4px;
        }
        .search-result-item .info {
            flex: 1;
        }
        .search-result-item .name {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #333;
            margin-bottom: 2px;
        }
        .search-result-item .price {
            font-size: 13px;
            color: #222;
            font-weight: 600;
        }
        .no-results {
            padding: 15px;
            text-align: center;
            color: #999;
            font-size: 14px;
        }
    </style>
</head>

<body class="<?php echo $__env->yieldContent('body_class', 'home'); ?>">

    <div class="page-wrapper">
        <?php echo $__env->make('website.layouts.sungoods_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main class="main">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <!-- End Main -->

        <?php echo $__env->make('website.layouts.sungoods_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="<?php echo e(route('home')); ?>" class="sticky-link active">
            <i class="d-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="<?php echo e(route('shop')); ?>" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Categories</span>
        </a>
        <a href="<?php echo e(route('wishlist.index')); ?>" class="sticky-link">
            <i class="d-icon-heart"></i>
            <span>Wishlist</span>
        </a>
        <a href="<?php echo e(route('change.profile')); ?>" class="sticky-link">
            <i class="d-icon-user"></i>
            <span>Account</span>
        </a>
        <div class="header-search hs-toggle directory">
            <a href="#" class="search-toggle sticky-link">
                <i class="d-icon-search"></i>
                <span>Search</span>
            </a>
            <form action="<?php echo e(route('search')); ?>" method="GET" class="input-wrapper">
                <input type="text" class="form-control mobile-search-input" name="parameter" placeholder="Search your keyword..."
                    required autocomplete="off" />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
                <div class="search-results-wrapper shadow-sm mobile-search-results" style="display: none;">
                </div>
            </form>
        </div>
    </div>
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End of Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End of CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="<?php echo e(route('search')); ?>" method="GET" class="input-wrapper">
                <input type="text" class="form-control mobile-search-input" name="parameter" placeholder="Search your keyword..."
                    required autocomplete="off" />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
                <div class="search-results-wrapper shadow-sm mobile-search-results" style="display: none;">
                </div>
            </form>
            <!-- End of Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li>
                    <a href="#">Categories</a>
                    <ul>
                        <?php $__currentLoopData = $productCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('productCategory', $cat->slug)); ?>" class="d-flex align-items-center py-2">
                                <img src="<?php echo e(route('imagecache', ['template' => 'thumbnail', 'filename' => $cat->fi()])); ?>" 
                                     alt="<?php echo e($cat->name_en); ?>" 
                                     width="30" height="30" 
                                     class="mr-3 rounded shadow-sm"
                                     style="object-fit: cover; border: 1px solid #eee;">
                                <?php echo e($cat->name_en); ?>

                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo e(route('shop')); ?>">Products</a>
                </li>
                <li>
                    <a href="<?php echo e(route('about-us')); ?>">About Us</a>
                </li>
                <li>
                    <a href="<?php echo e(route('contact')); ?>">Contact Us</a>
                </li>
            </ul>
            <!-- End of MobileMenu -->
        </div>
    </div>

    <!-- Plugins JS File -->
    <script src="<?php echo e(asset('sungoods/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sungoods/vendor/sticky/sticky.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sungoods/vendor/parallax/parallax.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sungoods/vendor/imagesloaded/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sungoods/vendor/elevatezoom/jquery.elevatezoom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sungoods/vendor/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sungoods/vendor/owl-carousel/owl.carousel.min.js')); ?>"></script>
    <!-- Main JS File -->
    <script src="<?php echo e(asset('sungoods/js/main.min.js')); ?>"></script>

    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        $(document).on("click", ".add-to-cart-btn", function (e) {
            e.preventDefault();
            let id = $(this).data("id");
            let qty = $(this).closest('.product-form-group').find('.quantity').val() || 1;

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
                            actionTemplate: '<div class="action-group d-flex mt-3"><a href="<?php echo e(route("new.checkout")); ?>" class="btn btn-sm btn-outline btn-primary btn-rounded mr-2">View Cart</a><a href="<?php echo e(route("new.checkout")); ?>" class="btn btn-sm btn-primary btn-rounded">Check Out</a></div>'
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
                    // Check if theme has its own popup for wishlist or use simple alert
                    if (typeof Riode !== 'undefined' && Riode.Minipopup) {
                        Riode.Minipopup.open({
                            message: res.message,
                            productClass: ' product-cart',
                            name: 'Wishlist Update',
                            actionTemplate: '<div class="action-group d-flex mt-3"><a href="<?php echo e(route("wishlist.index")); ?>" class="btn btn-sm btn-primary btn-rounded">View Wishlist</a></div>'
                        });
                    } else {
                        alert(res.message);
                    }
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            let searchTimer;
            const $searchInput = $('#search-input');
            const $searchResults = $('#search-results');
            const $mobileSearchInputs = $('.mobile-search-input');

            function performSearch(query, $container) {
                if (query.length < 2) {
                    $container.hide().empty();
                    return;
                }

                $.ajax({
                    url: "<?php echo e(route('search.ajax')); ?>",
                    data: { parameter: query },
                    success: function(data) {
                        $container.empty();
                        if (data.length > 0) {
                            data.forEach(function(product) {
                                $container.append(`
                                    <a href="${product.url}" class="search-result-item">
                                        <img src="${product.image}" alt="${product.name}">
                                        <div class="info">
                                            <span class="name">${product.name}</span>
                                            <span class="price">${product.price_html}</span>
                                        </div>
                                    </a>
                                `);
                            });
                            $container.show();
                        } else {
                            $container.append('<div class="no-results">No products found</div>');
                            $container.show();
                        }
                    }
                });
            }

            $searchInput.on('input', function() {
                clearTimeout(searchTimer);
                const query = $(this).val();
                searchTimer = setTimeout(function() {
                    performSearch(query, $searchResults);
                }, 300);
            });

            $mobileSearchInputs.on('input', function() {
                clearTimeout(searchTimer);
                const query = $(this).val();
                const $container = $(this).siblings('.search-results-wrapper');
                searchTimer = setTimeout(function() {
                    performSearch(query, $container);
                }, 300);
            });

            // Close results when clicking outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('.header-search').length) {
                    $('.search-results-wrapper').hide();
                }
            });
        });
    </script>

    <?php echo $__env->yieldPushContent('js'); ?>
    
</body>

</html>
<?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/website/layouts/sungoods.blade.php ENDPATH**/ ?>