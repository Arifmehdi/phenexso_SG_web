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
</script><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/website/layouts/sungoods_add_to_cart_js.blade.php ENDPATH**/ ?>