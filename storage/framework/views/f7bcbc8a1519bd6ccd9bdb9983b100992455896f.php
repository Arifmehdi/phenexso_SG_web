<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    
    <link rel="shortcut icon" href="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()])); ?>" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/font-icons.css')); ?>">
    <!-- plugins css -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/plugins.css')); ?>">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/responsive.css')); ?>">

        <!-- Analytics -->
    <?php if(!empty($ws->google_analytics_code)): ?><?php echo $ws->google_analytics_code; ?><?php endif; ?>
    <?php if(!empty($ws->google_search_console)): ?><?php echo $ws->google_search_console; ?><?php endif; ?>
    <?php if(!empty($ws->facebook_pixel_code)): ?><?php echo $ws->facebook_pixel_code; ?><?php endif; ?>
    <?php echo $__env->yieldPushContent('css'); ?>
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">
<?php 
$count_info = \App\Models\Cart::when(Auth::check(), fn($q) => $q->where('user_id', Auth::id()))
    ->when(!Auth::check(), fn($q) => $q->where('session_id', session('session_id')));
$count_data = $count_info->count();
$totalCartPrice = \App\Models\Cart::totalCartPrice();
?>
    <!-- HEADER AREA START (header-5) -->
    <?php echo $__env->make('website.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- HEADER AREA END -->


    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('website.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="<?php echo e(asset('frontend/js/plugins.js')); ?>"></script>
    <!-- Main JS -->
    <script src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php echo $__env->yieldPushContent('js'); ?>

<script>

<!-- ✅ Floating WhatsApp Icon -->
<a class="floating-message-icon" href="https://wa.me/8801334927985?text=Hello%20there!" target="_blank">
    <img src="<?php echo e(asset('frontend/assets/img/icons/whatsapp.svg')); ?>" alt="WhatsApp">
</a>
    <?php echo $__env->yieldPushContent('js'); ?>

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
    $(document).on("click", ".add-to-cart-btn", function (e) {
    e.preventDefault();

    let id = $(this).data("id");

    // Set ID in hidden input
    $("#cart_product_id").val(id);

    // Loading UI
    $("#cart_modal_name").html("Loading...");
    $("#cart_modal_img").attr("src", "");
    $("#cart_modal_message").html("Adding product...");

    // Ajax Request
    $.ajax({
        url: "<?php echo e(route('cart.quick.add')); ?>", // You must create this route
        type: "GET",
        data: { id: id },
        success: function (res) {

            $("#cart_modal_img").attr("src", res.image);
            $("#cart_modal_name").html(res.name);
            $("#cart_modal_message").html("Successfully added to your Cart");
            $("#add_to_cart_modal").modal('show');
        }
    });
});

</script>
</body>
</html>

<?php /**PATH D:\laragon\laragon\www\phenexso_SG_web\resources\views/website/layouts/master.blade.php ENDPATH**/ ?>