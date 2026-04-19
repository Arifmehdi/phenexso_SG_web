<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <p class="welcome-msg"><?php echo e($ws->header_text ?? 'Welcome to our store!'); ?></p>
            </div>
            <div class="header-right">
                <div class="dropdown">
                    <a href="#currency">BDT</a>
                </div>
                <!-- End DropDown Menu -->
                <div class="dropdown ml-5">
                    <a href="#language">ENG</a>
                </div>
                <!-- End DropDown Menu -->
                <span class="divider"></span>
                <a href="<?php echo e(route('contact')); ?>" class="contact d-lg-show"><i class="d-icon-map"></i>Contact</a>
                <a href="<?php echo e(route('about-us')); ?>" class="help d-lg-show"><i class="d-icon-info"></i> Need Help</a>
                <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('user.dashboard')); ?>" class="login-toggle link-to-tab d-md-show"><i class="d-icon-user"></i>Dashboard</a>
                <span class="delimiter">/</span>
                <a href="<?php echo e(route('logout')); ?>" class="register-toggle link-to-tab d-md-show ml-0">Logout</a>
                <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="login-toggle link-to-tab d-md-show"><i class="d-icon-user"></i>Sign in</a>
                <span class="delimiter">/</span>
                <a href="<?php echo e(route('registration')); ?>" class="register-toggle link-to-tab d-md-show ml-0">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- End HeaderTop -->
    <div class="header-middle sticky-header fix-top sticky-content">
        <div class="container">
            <div class="header-left">
                <a href="#" class="mobile-menu-toggle">
                    <i class="d-icon-bars2"></i>
                </a>
                <a href="<?php echo e(route('home')); ?>" class="logo">
                    <img src="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $ws->logo_alt()])); ?>" alt="logo" width="153" height="44" />
                </a>
                <!-- End Logo -->

                <div class="header-search hs-simple">
                    <form action="<?php echo e(route('search')); ?>" method="GET" class="input-wrapper">
                        <input type="text" class="form-control" name="parameter" autocomplete="off"
                            placeholder="Search..." required />
                        <button class="btn btn-search" type="submit" title="submit-button">
                            <i class="d-icon-search"></i>
                        </button>
                    </form>
                </div>
                <!-- End Header Search -->
            </div>
            <div class="header-right">

                <div class="dropdown wishlist wishlist-dropdown off-canvas">
                    <a href="<?php echo e(route('wishlist.index')); ?>" class="wishlist-toggle">
                        <i class="d-icon-heart"></i>
                    </a>
                </div>
                <span class="divider"></span>
                <div class="dropdown cart-dropdown type2 off-canvas mr-0 mr-lg-2">
                    <a href="<?php echo e(route('cart')); ?>" class="cart-toggle label-block link">
                        <div class="cart-label d-lg-show">
                            <span class="cart-name">Shopping Cart:</span>
                            <span class="cart-price">
                                ৳<?php echo e(number_format($cartItems->sum(function($item) {
                                    if (!$item->product) return 0;

                                    $product = $item->product;

                                    if ($product->final_price < $product->selling_price) {
                                        $price = $product->selling_price - $product->discount_price;
                                    } else {
                                        $price = $product->selling_price;
                                    }

                                    return $price * $item->quantity;
                                }), 2)); ?>

                            </span>
                        </div>
                        <i class="d-icon-bag"><span class="cart-count"><?php echo e($cartCount); ?></span></i>
                    </a>
                    <div class="canvas-overlay"></div>
                    <!-- End Cart Toggle -->
                    <div class="dropdown-box">
                        <div class="canvas-header">
                            <h4 class="canvas-title">Shopping Cart</h4>
                            <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">
                                close<i class="d-icon-arrow-right"></i><span class="sr-only">Cart</span>
                            </a>
                        </div>

                        <div class="products scrollable">
                            <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product product-cart">
                                <figure class="product-media">
                                    <a href="<?php echo e(route('productDetails', $item->product->slug)); ?>">
                                        <img src="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $item->product->fi()])); ?>"
                                            alt="product" width="80" height="88" />
                                    </a>

                                    <a href="<?php echo e(route('cart.remove', $item->id)); ?>" class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i>
                                        <span class="sr-only">Close</span>
                                    </a>
                                </figure>

                                <div class="product-detail">
                                    <a href="<?php echo e(route('productDetails', $item->product->slug)); ?>" class="product-name">
                                        <?php echo e($item->product->name_en); ?>

                                    </a>

                                    <div class="price-box">
                                        <span class="product-quantity"><?php echo e($item->quantity); ?></span>
                                        <span class="product-price">
                                            <?php
                                                $product = $item->product;
                                                if ($product->final_price < $product->selling_price) {
                                                    $price = $product->selling_price - $product->discount_price;
                                                } else {
                                                    $price = $product->selling_price;
                                                }
                                            ?>
                                            ৳<?php echo e(number_format($price, 2)); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <!-- Subtotal -->
                        <div class="cart-total">
                            <label>Subtotal:</label>
                            <span class="price">
                                ৳<?php echo e(number_format(
                                    $cartItems->sum(function($item) {
                                        $product = $item->product;
                                        if ($product->final_price < $product->selling_price) {
                                            $price = $product->selling_price - $product->discount_price;
                                        } else {
                                            $price = $product->selling_price;
                                        }
                                        return $price * $item->quantity;
                                    }),
                                2)); ?>

                            </span>
                        </div>

                        <div class="cart-action">
                            <a href="<?php echo e(route('cart')); ?>" class="btn btn-dark btn-link">View Cart</a>
                            <a href="<?php echo e(route('new.checkout')); ?>" class="btn btn-dark">
                                <span>Go To Checkout</span>
                            </a>
                        </div>
                    </div>
                    <!-- End Dropdown Box -->
                </div>
                <span class="divider"></span>
                <a href="<?php echo e(route('login')); ?>" class="icon-box icon-box-side">
                    <div class="icon-box-icon mr-0 mr-lg-2">
                        <i class="d-icon-user"></i>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <div class="header-bottom d-lg-show">
        <div class="container">
            <div class="header-left">
                <nav class="main-nav">
                    <ul class="menu">
                        <li class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('home')); ?>">Home</a>
                        </li>
                        <li class="<?php echo e(request()->routeIs('shop') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('shop')); ?>">Shop</a>
                        </li>
                        <li>
                            <a href="#">Categories</a>
                            <div class="megamenu">
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="menu-title">Product Categories</h4>
                                        <ul>
                                            <?php $__currentLoopData = $productCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e(route('productCategory', $cat->slug)); ?>"><?php echo e($cat->name_en); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php $__currentLoopData = $headerMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e($menu->link); ?>"><?php echo e($menu->name_en); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('contact')); ?>">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/website/layouts/sungoods_header.blade.php ENDPATH**/ ?>