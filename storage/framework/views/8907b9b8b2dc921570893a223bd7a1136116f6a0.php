

<?php $__env->startSection('title', 'Shop - Hubli'); ?>

<?php $__env->startSection('meta'); ?>
    <meta name="description" content="Contact North Bengal for inquiries, product details, or business queries. Get in touch via phone, email, or visit our office.">
    <meta name="keywords" content="contact north bengal, contact us, north bengal inquiries, phone, email, office location">
    <meta property="og:title" content="Contact Us - North Bengal">
    <meta property="og:description" content="Reach North Bengal for product inquiries or business partnerships.">
    <meta property="og:image" content="<?php echo e(asset('frontend/assets/img/northbengal/contact_banner.png')); ?>">
    <meta property="og:type" content="website">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <!-- BREADCRUMB AREA START -->
    <?php if (isset($component)) { $__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280 = $component; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['title' => 'Shop','pageName' => 'Shop','bgImage' => 'frontend/img/bg/9.jpg'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
    
    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter">
        <div class="container-fluid px-5">
            <div class="row">
                <div class="col-lg-9 order-lg-2 mb-120">
                    <div class="ltn__shop-options">
                        <ul>
                            <li>
                                <div class="ltn__grid-list-tab-menu ">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="d-none d-mg-block d-lg-block">
                                <div class="header-search-2">
                                    <form method="GET" action="<?php echo e(route('shop')); ?>">
                                        <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Search here..."/>

                                        <button type="submit">
                                            <span><i class="icon-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </li>
                            <li>
                               <div class="short-by text-center">
                                    <form method="GET" class="d-flex align-items-center gap-2">
                                        <select class="nice-select" name="sort" id="sort" class="form-select w-auto" onchange="this.form.submit()">
                                            <option >Default sorting</option>
                                            <option value="1" <?php if(request()->get('sort')==1): ?> selected <?php endif; ?>>Sort by Latest</option>
                                            <option value="2" <?php if(request()->get('sort')==2): ?> selected <?php endif; ?>>Sort by Oldest</option>
                                            <option value="3" <?php if(request()->get('sort')==3): ?> selected <?php endif; ?>>Sort by Price: High → Low</option>
                                            <option value="4" <?php if(request()->get('sort')==4): ?> selected <?php endif; ?>>Sort by Price: Low → High</option>
                                            <!-- <option value="1">Sort by price: high to low</option> -->
                                        </select>
                                    </form>
                                </div> 
                            </li>
                            <li>
                               <div class="showing-product-number text-right text-end">
                                    <span>Showing <?php echo e($products->firstItem()); ?> - <?php echo e($products->lastItem()); ?> of <?php echo e($products->total()); ?> results</span>
                                </div> 
                            </li>                
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">


                                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-3 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="<?php echo e(route('productDetails', $product->slug)); ?>">
                                                    <img src="<?php echo e(route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()])); ?>" alt="<?php echo e($product->name_en); ?>">
                                                </a>
                                                <!-- <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div> -->
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View"  class="quick-view-btn" data-id="<?php echo e($product->id); ?>" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" class="add-to-wishlist" data-id="<?php echo e($product->id); ?>" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="<?php echo e(route('productDetails', $product->slug)); ?>"><?php echo e($product->name_en); ?></a></h2>
                                                <small class="d-block text-uppercase mb-1">
                                                    <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <span class="font-weight-bold" style="color: #0e1573ff">
                                                            <?php echo e($cat->name_en); ?>

                                                        </span><?php if(!$loop->last): ?>, <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </small>
                                                <div class="product-price">
                                                    <span><?php echo e(number_format($product->final_price, 2)); ?> ৳</span> 
                                                    <?php if($product->discount > 0.00): ?>
                                                        <small style="font-size: 8px !important;"><del><?php echo e(number_format($product->price, 2)); ?> ৳</del></small>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                                    <p>There have no product here</p>
                                    <?php endif; ?> 
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_product_list">
                            <div class="ltn__product-tab-content-inner ltn__product-list-view">
                                <div class="row">

                                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3">
                                            <div class="product-img">
                                                <a href="<?php echo e(route('productDetails', $product->slug)); ?>">
                                                    <img src="<?php echo e(route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()])); ?>" alt="<?php echo e($product->name_en); ?>">
                                                </a>
                                                <!-- <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="<?php echo e(route('productDetails', $product->slug)); ?>"><?php echo e($product->name_en); ?></a></h2>
                                                    <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <span class="font-weight-bold" style="color: #0e1573ff">
                                                            <?php echo e($cat->name_en); ?>

                                                        </span><?php if(!$loop->last): ?>, <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span><?php echo e(number_format($product->final_price, 2)); ?> ৳</span> 
                                                    <?php if($product->discount > 0.00): ?>
                                                        <small style="font-size: 8px !important;"><del><?php echo e(number_format($product->price, 2)); ?> ৳</del></small>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="product-brief">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit nesciunt,  aliquid, deleniti non et ut dolorem!</p>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" class="quick-view-btn" data-id="<?php echo e($product->id); ?>" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" class="add-to-wishlist" data-id="<?php echo e($product->id); ?>" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                                    <p>There have no product here</p>
                                    <?php endif; ?> 
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__pagination-area text-center">
                        <div class="ltn__pagination">
                            <ul>
                                <?php echo e($products->links('pagination.ltn')); ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  mb-120">
                    <aside class="sidebar ltn__shop-sidebar">
                        <!-- Category Widget -->
                        <div class="widget ltn__menu-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
                            <ul>
                                <li><a href="<?php echo e(route('shop')); ?>">All (<?php echo e($total_products); ?>) <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(route('productCategory', $subcategory->slug)); ?>"><?php echo e($subcategory->name_en); ?> (<?php echo e($subcategory->products()->count()); ?>) 
                                            <span><i class="fas fa-long-arrow-alt-right"></i></span>
                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        
                        <!-- Price Filter Widget -->
                        <form method="GET" action="<?php echo e(url()->current()); ?>">
                            <div class="widget ltn__price-filter-widget">
                                <h4 class="ltn__widget-title ltn__widget-title-border">Filter by price</h4>
                                <div class="price_filter">
                                    <div class="price_slider_amount">
                                        <input type="submit"  value="Your range:"/> 
                                        <input type="text" class="amount" name="price"  placeholder="Add Your Price" /> 
                                    </div>
                                    <div class="slider-range"></div>
                                </div>
                            </div>
                        </form>
                        <!-- Top Rated Product Widget -->
                        <div class="widget ltn__top-rated-product-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Top Rated Product</h4>
                            <?php echo $__env->make('website.layouts.top_products', [ 'topClickedProducts' => $topClickedProducts ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <!-- Tagcloud Widget -->
                        
                        <!-- Size Widget -->
                        
                        <!-- Color Widget -->
                        
                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget">
                            <a href="shop.html"><img src="<?php echo e(asset('frontend/img/banner/banner-1.jpg')); ?>" alt="#"></a>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->
<?php $__env->stopSection(); ?> 
<?php $__env->startPush('js'); ?>
<script>
$(document).on('click', '.add-to-wishlist', function() {
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
</script>
<script>
    $(document).ready(function() {
        var priceRange = '<?php echo e(request()->get("price")); ?>';
        var minPrice = 0;
        var maxPrice = 5000;

        if (priceRange) {
            var priceParts = priceRange.split('-');
            if (priceParts.length === 2) {
                minPrice = parseInt(priceParts[0]);
                maxPrice = parseInt(priceParts[1]);
            }
        }

        $('.slider-range').slider({
            range: true,
            min: 0,
            max: 5000,
            values: [minPrice, maxPrice],
            slide: function(event, ui) {
                $('.amount').val('৳' + ui.values[0] + ' - ৳' + ui.values[1]);
            },
            stop: function(event, ui) {
                $('input[name="price"]').val(ui.values[0] + '-' + ui.values[1]);
                $(this).closest('form').submit();
            }
        });
        $('.amount').val('৳' + $('.slider-range').slider('values', 0) + ' - ৳' + $('.slider-range').slider('values', 1));
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('website.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\phenexso_SG_web\resources\views/website/shop_category.blade.php ENDPATH**/ ?>