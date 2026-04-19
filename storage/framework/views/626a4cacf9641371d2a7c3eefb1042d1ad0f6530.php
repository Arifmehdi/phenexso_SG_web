



<?php $__env->startSection('title', 'Shop - '. ($ws->name ?? env('APP_NAME'))); ?>

<?php $__env->startSection('body_class', 'shop'); ?>

<?php $__env->startSection('meta'); ?>
    <meta name="description" content="Browse our wide selection of products at <?php echo e($ws->name ?? 'Sungoods'); ?>. Find the best deals on quality items.">
    <meta name="keywords" content="shop, ecommerce, products, <?php echo e($ws->meta_keywords ?? ''); ?>">
    <meta property="og:title" content="Shop - <?php echo e($ws->name ?? env('APP_NAME')); ?>">
    <meta property="og:description" content="Explore our product collection and shop online.">
    <meta property="og:type" content="website">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('sungoods/css/style.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('sungoods/vendor/nouislider/nouislider.min.css')); ?>">
<style>
    .pagination {
        justify-content: center;
    }
    .widget-body {
        display: block !important;
    }
    .filter-price-slider {
        margin-bottom: 20px;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-header" style="background-image: url('<?php echo e(asset('sungoods/images/shop/page-header-back.jpg')); ?>'); background-color: #3C63A4;">
    <h1 class="page-title">Shop</h1>
    <ul class="breadcrumb">
        <li><a href="<?php echo e(route('home')); ?>"><i class="d-icon-home"></i></a></li>
        <li class="delimiter">/</li>
        <li>Shop</li>
    </ul>
</div>
<!-- End PageHeader -->

<div class="page-content mb-10 pb-3">
    <div class="container">
        <div class="row main-content-wrap gutter-lg">
            <aside class="col-lg-3 sidebar sidebar-fixed sidebar-toggle-remain shop-sidebar sticky-sidebar-wrapper">
                <div class="sidebar-overlay"></div>
                <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                <div class="sidebar-content">
                    <div class="sticky-sidebar" data-sticky-options="{'top': 10}">
                        <div class="filter-actions mb-4">
                            <a href="#" class="sidebar-toggle-btn toggle-remain btn btn-outline btn-primary btn-icon-right btn-rounded">Filter<i class="d-icon-arrow-left"></i></a>
                            <a href="<?php echo e(route('shop')); ?>" class="filter-clean">Clean All</a>
                        </div>
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">All Categories</h3>
                            <ul class="widget-body filter-items search-ul">
                                <li class="<?php echo e(!request()->route('slug') ? 'active' : ''); ?>"><a href="<?php echo e(route('shop')); ?>">All (<?php echo e($total_products); ?>)</a></li>
                                <?php $__currentLoopData = $allRootCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rootCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="<?php echo e(request()->route('slug') == $rootCategory->slug ? 'active' : ''); ?>">
                                        <a href="<?php echo e(route('productCategory', $rootCategory->slug)); ?>"><?php echo e($rootCategory->name_en); ?> (<?php echo e($rootCategory->products()->count()); ?>)</a>
                                        <?php if($rootCategory->children->count() > 0): ?>
                                        <ul style="<?php echo e((request()->route('slug') == $rootCategory->slug || $rootCategory->children->contains('slug', request()->route('slug'))) ? 'display: block' : ''); ?>">
                                            <?php $__currentLoopData = $rootCategory->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="<?php echo e(request()->route('slug') == $child->slug ? 'active' : ''); ?>"><a href="<?php echo e(route('productCategory', $child->slug)); ?>"><?php echo e($child->name_en); ?> (<?php echo e($child->products()->count()); ?>)</a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">Filter by Price</h3>
                            <div class="widget-body mt-3">
                                <form method="GET" action="<?php echo e(url()->current()); ?>">
                                    <?php if(request('search')): ?> <input type="hidden" name="search" value="<?php echo e(request('search')); ?>"> <?php endif; ?>
                                    <?php if(request('sort')): ?> <input type="hidden" name="sort" value="<?php echo e(request('sort')); ?>"> <?php endif; ?>
                                    
                                    <div class="filter-price-slider"></div>
                                    <input type="hidden" name="price" id="price-range-input" value="<?php echo e(request('price')); ?>">

                                    <div class="filter-actions">
                                        <div class="filter-price-text mb-4">Price:
                                            <span class="filter-price-range"></span>
                                        </div>
                                        <button type="submit" class="btn btn-dark btn-filter btn-rounded">Filter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="widget widget-collapsible">
                            <h4 class="widget-title">Top Rated Product</h4>
                            <div class="widget-body">
                                <?php $__currentLoopData = $topClickedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="product product-list-sm mb-4">
                                    <figure class="product-media">
                                        <a href="<?php echo e(route('productDetails', $topProduct->slug)); ?>">
                                            <img src="<?php echo e(route('imagecache', ['template' => 'sbism', 'filename' => $topProduct->fi()])); ?>" alt="<?php echo e($topProduct->name_en); ?>" width="100" height="114">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="<?php echo e(route('productDetails', $topProduct->slug)); ?>"><?php echo e($topProduct->name_en); ?></a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">৳<?php echo e(number_format($topProduct->selling_price - $topProduct->discount_price, 2)); ?></span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <div class="widget widget-collapsible">
                            <div class="widget-body">
                                <a href="#"><img src="<?php echo e(asset('sungoods/images/shop/banner.jpg')); ?>" alt="Banner"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="col-lg-9 main-content">
                <nav class="toolbox sticky-toolbox sticky-content fix-top">
                    <div class="toolbox-left">
                        <a href="#" class="toolbox-item left-sidebar-toggle btn btn-sm btn-outline btn-primary btn-rounded btn-icon-right d-lg-none">Filter<i class="d-icon-arrow-right"></i></a>
                        <div class="toolbox-item toolbox-sort select-box text-dark">
                            <label>Sort By :</label>
                            <form method="GET" action="<?php echo e(url()->current()); ?>" id="sort-form">
                                <?php if(request('search')): ?> <input type="hidden" name="search" value="<?php echo e(request('search')); ?>"> <?php endif; ?>
                                <?php if(request('price')): ?> <input type="hidden" name="price" value="<?php echo e(request('price')); ?>"> <?php endif; ?>
                                <select name="sort" class="form-control" onchange="this.form.submit()">
                                    <option value="">Default sorting</option>
                                    <option value="1" <?php echo e(request('sort') == 1 ? 'selected' : ''); ?>>Latest</option>
                                    <option value="2" <?php echo e(request('sort') == 2 ? 'selected' : ''); ?>>Oldest</option>
                                    <option value="3" <?php echo e(request('sort') == 3 ? 'selected' : ''); ?>>Price: High → Low</option>
                                    <option value="4" <?php echo e(request('sort') == 4 ? 'selected' : ''); ?>>Price: Low → High</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="toolbox-right">
                        <div class="toolbox-item toolbox-show select-box text-dark">
                            <label>Show :</label>
                            <select name="count" class="form-control">
                                <option value="12">12</option>
                                <option value="24">24</option>
                                <option value="36">36</option>
                            </select>
                        </div>
                        <div class="toolbox-item toolbox-layout">
                            <a href="#" class="d-icon-mode-list btn-layout"></a>
                            <a href="#" class="d-icon-mode-grid btn-layout active"></a>
                        </div>
                    </div>
                </nav>
                <div class="row cols-2 cols-sm-3 product-wrapper">
                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="product-wrap">
                        <div class="product">
                            <figure class="product-media">
                                <a href="<?php echo e(route('productDetails', $product->slug)); ?>">
                                    <img src="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $product->fi()])); ?>" alt="<?php echo e($product->name_en); ?>" width="280" height="315">
                                </a>
                                <div class="product-label-group">
                                    <?php if($product->final_price < $product->selling_price): ?>
                                    <label class="product-label label-sale"><?php echo e(calculateDiscountPercentage($product->selling_price, $product->discount_price)); ?>% off</label>
                                    <?php endif; ?>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart add-to-cart-btn" data-id="<?php echo e($product->id); ?>" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist add-to-wishlist" data-id="<?php echo e($product->id); ?>" title="Add to wishlist"><i class="d-icon-heart"></i></a>
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
                                        <span class="ratings" style="width:<?php echo e(($product->averageRating() / 5) * 100); ?>%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="<?php echo e(route('productDetails', $product->slug)); ?>" class="rating-reviews">( <?php echo e($product->reviews_count ?? 0); ?> reviews )</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-12">
                        <p class="text-center">No products found.</p>
                    </div>
                    <?php endif; ?>
                </div>
                
                <nav class="toolbox toolbox-pagination">
                    <p class="show-info">Showing <?php echo e($products->firstItem()); ?>-<?php echo e($products->lastItem()); ?> of <?php echo e($products->total()); ?> results</p>
                    <?php echo e($products->links('pagination.riode')); ?>

                </nav>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.sungoods', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/website/shop.blade.php ENDPATH**/ ?>