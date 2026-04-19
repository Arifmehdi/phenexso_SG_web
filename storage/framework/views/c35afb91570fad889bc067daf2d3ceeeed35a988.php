<?php $__env->startSection('title', 'Product Details - '. env('APP_NAME')); ?>

<?php $__env->startSection('meta'); ?>
<meta name="description" content="<?php echo e($product->name_en); ?>">
<meta name="keywords" content="<?php echo e($product->name_en); ?>, product details">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
.product-gallery.pg-vertical { position: relative; }
.product-single-carousel .product-image { border-radius: 8px; overflow: hidden; }
.product-single-carousel img { width: 100%; height: auto; }
.product-thumbs { display: flex; gap: 10px; margin-top: 15px; }
.product-thumb { cursor: pointer; border-radius: 4px; overflow: hidden; opacity: 0.6; transition: opacity 0.3s; }
.product-thumb.active, .product-thumb:hover { opacity: 1; }
.product-thumb img { width: 80px; height: 80px; object-fit: cover; }
.product-details { padding: 20px 0; }
.product-name { font-size: 28px; font-weight: 700; margin-bottom: 10px; color: #333; }
.product-meta { font-size: 14px; color: #666; margin-bottom: 15px; }
.product-meta span { margin-right: 20px; }
.product-price { font-size: 24px; font-weight: 600; color: #333; margin-bottom: 20px; }
.product-price del { font-size: 16px; color: #999; margin-left: 10px; }
.ratings-container { margin-bottom: 15px; }
.ratings-full { display: inline-flex; }
.ratings-full .ratings { width: 80%; }
.product-short-desc { font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 20px; }
.product-form-group { display: flex; align-items: center; gap: 15px; flex-wrap: wrap; }
.product-form-group label { font-weight: 600; min-width: 80px; }
.product-form select { padding: 10px 15px; border: 1px solid #ddd; border-radius: 4px; min-width: 150px; }
.product-qty { display: flex; align-items: center; gap: 15px; margin: 20px 0; }
.product-qty .input-group { display: flex; align-items: center; border: 1px solid #ddd; border-radius: 4px; }
.product-qty .quantity-minus, .product-qty .quantity-plus { 
    background: none; border: none; padding: 10px 15px; cursor: pointer; font-size: 18px;
}
.product-qty .quantity { 
    width: 60px; text-align: center; border: none; border-left: 1px solid #ddd; border-right: 1px solid #ddd; padding: 10px; 
}
.btn-cart { 
    background: #333; color: #fff; padding: 12px 30px; border: none; border-radius: 25px; 
    font-weight: 600; cursor: pointer; transition: background 0.3s;
}
.btn-cart:hover { background: #555; }
.product-footer { display: flex; align-items: center; gap: 20px; margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee; }
.btn-wishlist, .btn-compare { 
    color: #666; text-decoration: none; display: flex; align-items: center; gap: 5px;
}
.btn-wishlist:hover, .btn-compare:hover { color: #333; }
.product-tabs { margin-top: 40px; }
.product-tabs .nav-tabs { border-bottom: 1px solid #eee; justify-content: center; gap: 30px; }
.product-tabs .nav-link { 
    border: none; padding: 15px 20px; color: #666; font-weight: 600; position: relative;
}
.product-tabs .nav-link.active { color: #333; }
.product-tabs .nav-link.active::after { 
    content: ''; position: absolute; bottom: -1px; left: 0; right: 0; height: 2px; background: #333; 
}
.tab-content { padding: 30px 0; }
.description-title { font-size: 18px; font-weight: 600; margin-bottom: 15px; }
.related-products-section { margin-top: 60px; }
.related-products-section h2 { font-size: 24px; font-weight: 700; margin-bottom: 30px; }
.related-product-card { 
    border: 1px solid #eee; border-radius: 8px; overflow: hidden; transition: box-shadow 0.3s;
}
.related-product-card:hover { box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
.related-product-card .product-img { position: relative; overflow: hidden; }
.related-product-card .product-img img { width: 100%; height: 200px; object-fit: cover; }
.related-product-card .product-info { padding: 15px; }
.related-product-card .product-title { font-size: 16px; font-weight: 600; margin-bottom: 10px; }
.related-product-card .product-title a { color: #333; text-decoration: none; }
.related-product-card .product-price { font-size: 16px; font-weight: 600; color: #333; }
.stock-badge { display: inline-block; padding: 5px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; }
.stock-badge.in-stock { background: #d4edda; color: #155724; }
.stock-badge.out-of-stock { background: #f8d7da; color: #721c24; }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- BREADCRUMB AREA START -->
<?php if (isset($component)) { $__componentOriginal40fe594eae3d7d27fa8bd9a508c1498f43cae280 = $component; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['title' => 'Product Details','pageName' => ''.e($product->name_en).'','bgImage' => 'frontend/img/bg/9.jpg'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

<main class="main mt-6 single-product">
    <div class="page-content mb-10 pb-6">
        <div class="container">
            <div class="product product-single row mb-7">
                <!-- Product Gallery -->
                <div class="col-md-6 sticky-sidebar-wrapper">
                    <div class="product-gallery pg-vertical sticky-sidebar" data-sticky-options="{'minWidth': 767}">
                        <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
                            <?php $__empty_1 = true; $__currentLoopData = $product->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <?php if($media->file_name): ?>
                                <figure class="product-image">
                                    <img src="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $media->file_name])); ?>" 
                                         alt="<?php echo e($product->name_en); ?>" 
                                         data-zoom-image="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $media->file_name])); ?>">
                                </figure>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <figure class="product-image">
                                    <img src="<?php echo e(route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()])); ?>" 
                                         alt="<?php echo e($product->name_en); ?>">
                                </figure>
                            <?php endif; ?>
                        </div>
                        <div class="product-thumbs-wrap">
                            <div class="product-thumbs">
                                <?php $__empty_1 = true; $__currentLoopData = $product->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php if($media->file_name): ?>
                                    <div class="product-thumb">
                                        <img src="<?php echo e(route('imagecache', ['template' => 'pnism', 'filename' => $media->file_name])); ?>" alt="product thumbnail">
                                    </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="product-thumb active">
                                    <img src="<?php echo e(route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()])); ?>" alt="product thumbnail">
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if($product->discount > 0): ?>
                        <div class="product-label-group">
                            <label class="product-label label-sale">Sale</label>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Product Details -->
                <div class="col-md-6">
                    <div class="product-details">
                        <div class="product-navigation mb-3">
                            <ul class="breadcrumb breadcrumb-lg">
                                <li><a href="<?php echo e(route('home')); ?>"><i class="d-icon-home"></i></a></li>
                                <li><a href="<?php echo e(route('shop')); ?>">Products</a></li>
                                <li class="active">Detail</li>
                            </ul>
                        </div>

                        <h1 class="product-name"><?php echo e($product->name_en); ?></h1>
                        
                        <div class="product-meta">
                            <?php if($product->sku): ?>
                            <span class="product-sku">SKU: <?php echo e($product->sku); ?></span>
                            <?php endif; ?>
                            <span class="product-brand">Brand: <?php echo e($product->brand ?? 'N/A'); ?></span>
                        </div>

                        <div class="product-price">
                            <?php echo e(number_format($product->final_price, 2)); ?> ৳
                            <?php if($product->discount > 0.00): ?>
                                <del><?php echo e(number_format($product->price, 2)); ?> ৳</del>
                            <?php endif; ?>
                        </div>

                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width: <?php echo e($product->reviews->avg('rating') ? $product->reviews->avg('rating') * 20 : 0); ?>%"></span>
                            </div>
                            <a href="#product-tab-reviews" class="link-to-tab rating-reviews">( <?php echo e($product->reviews->count()); ?> reviews )</a>
                        </div>

                        <p class="product-short-desc"><?php echo e($product->short_description_en ?? 'No description available.'); ?></p>

                        <div class="product-form product-variations mb-3">
                            <ul>
                                <li>
                                    <strong>Category:</strong>
                                    <span>
                                        <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="#"><?php echo e($cat->name_en); ?></a><?php if(!$loop->last): ?>, <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </span>
                                </li>
                                <li>
                                    <strong>Stock:</strong>
                                    <span>
                                        <?php if($product->stock > 0): ?>
                                            <span class="stock-badge in-stock">In Stock</span>
                                        <?php else: ?>
                                            <span class="stock-badge out-of-stock">Out of Stock</span>
                                        <?php endif; ?>
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <hr class="product-divider">

                        <form id="addToCartForm" method="POST" action="<?php echo e(route('addToCart')); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                            <input type="hidden" name="quantity" value="1">
                            
                            <div class="product-form product-qty">
                                <div class="product-form-group">
                                    <div class="input-group mr-2">
                                        <button type="button" class="quantity-minus" onclick="decreaseQty()">-</button>
                                        <input class="quantity form-control" type="number" id="productQty" name="quantity" value="1" min="1" max="<?php echo e($product->stock); ?>">
                                        <button type="button" class="quantity-plus" onclick="increaseQty()">+</button>
                                    </div>
                                    <button type="submit" class="btn-product btn-cart text-normal ls-normal font-weight-semi-bold">
                                        <i class="d-icon-bag"></i>Add to Cart
                                    </button>
                                </div>
                            </div>
                        </form>

                        <hr class="product-divider mb-3">

                        <div class="product-footer">
                            <div class="social-links mr-4">
                                <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                <a href="#" class="social-link social-pinterest fab fa-pinterest-p"></a>
                            </div>
                            <a href="#" class="btn-product btn-wishlist" onclick="addToWishlist(<?php echo e($product->id); ?>)">
                                <i class="d-icon-heart"></i>Add to wishlist
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Tabs -->
            <div class="tab tab-nav-simple product-tabs">
                <ul class="nav nav-tabs justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#product-tab-description">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product-tab-additional">Additional Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product-tab-reviews">Reviews (<?php echo e($product->reviews->count()); ?>)</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active in" id="product-tab-description">
                        <div class="row mt-6">
                            <div class="col-md-12">
                                <h5 class="description-title mb-4 font-weight-semi-bold ls-m">Product Description</h5>
                                <div class="product-description">
                                    <?php echo $product->description_en; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="product-tab-additional">
                        <ul class="list-none">
                            <?php if($product->sku): ?>
                            <li><label>SKU:</label> <p><?php echo e($product->sku); ?></p></li>
                            <?php endif; ?>
                            <li><label>Category:</label>
                                <p>
                                    <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($cat->name_en); ?><?php if(!$loop->last): ?>, <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </p>
                            </li>
                            <?php if($product->brand): ?>
                            <li><label>Brand:</label> <p><?php echo e($product->brand); ?></p></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="tab-pane" id="product-tab-reviews">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="description-title mb-4">Customer Reviews</h5>
                                <?php $__empty_1 = true; $__currentLoopData = $product->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="review-item mb-4">
                                    <div class="ratings-full mb-2">
                                        <span class="ratings" style="width: <?php echo e($review->rating * 20); ?>%"></span>
                                    </div>
                                    <h6><?php echo e($review->user->name ?? 'Anonymous'); ?></h6>
                                    <p><?php echo e($review->comment); ?></p>
                                    <small class="text-muted"><?php echo e($review->created_at->format('F d, Y')); ?></small>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p>No reviews yet. Be the first to review this product!</p>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <h5 class="description-title mb-4">Write a Review</h5>
                                <form action="#" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                    <div class="mb-3">
                                        <label>Rating</label>
                                        <select name="rating" class="form-control" required>
                                            <option value="5">5 Stars</option>
                                            <option value="4">4 Stars</option>
                                            <option value="3">3 Stars</option>
                                            <option value="2">2 Stars</option>
                                            <option value="1">1 Star</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Comment</label>
                                        <textarea name="comment" class="form-control" rows="4" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Submit Review</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            <?php if($relatedProducts->count() > 0): ?>
            <div class="related-products-section">
                <h2>Related Products</h2>
                <div class="row">
                    <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="related-product-card">
                            <div class="product-img">
                                <a href="<?php echo e(route('productDetails', $related->slug)); ?>">
                                    <img src="<?php echo e(route('imagecache', ['template' => 'pnism', 'filename' => $related->fi()])); ?>" alt="<?php echo e($related->name_en); ?>">
                                </a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">
                                    <a href="<?php echo e(route('productDetails', $related->slug)); ?>"><?php echo e(Str::limit($related->name_en, 30)); ?></a>
                                </h3>
                                <div class="product-price">
                                    <?php echo e(number_format($related->final_price, 2)); ?> ৳
                                    <?php if($related->discount > 0): ?>
                                        <del><?php echo e(number_format($related->price, 2)); ?> ৳</del>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Related Products -->
    <?php if($relatedProducts->count() > 0): ?>
    <div class="related-products-section">
        <h2>Related Products</h2>
        <div class="row">
            <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="related-product-card">
                    <div class="product-img">
                        <a href="<?php echo e(route('productDetails', $related->slug)); ?>">
                            <img src="<?php echo e(route('imagecache', ['template' => 'pnism', 'filename' => $related->fi()])); ?>" alt="<?php echo e($related->name_en); ?>">
                        </a>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">
                            <a href="<?php echo e(route('productDetails', $related->slug)); ?>"><?php echo e(Str::limit($related->name_en, 30)); ?></a>
                        </h3>
                        <div class="product-price">
                            <?php echo e(number_format($related->final_price, 2)); ?> ৳
                            <?php if($related->discount > 0): ?>
                                <del><?php echo e(number_format($related->price, 2)); ?> ৳</del>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <?php endif; ?>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
function decreaseQty() {
    var qty = document.getElementById('productQty');
    if(parseInt(qty.value) > 1) {
        qty.value = parseInt(qty.value) - 1;
    }
}

function increaseQty() {
    var qty = document.getElementById('productQty');
    if(parseInt(qty.value) < parseInt(qty.max)) {
        qty.value = parseInt(qty.value) + 1;
    }
}
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('website.layouts.sungoods', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/website/sungoods_product.blade.php ENDPATH**/ ?>