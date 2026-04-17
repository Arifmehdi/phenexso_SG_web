

<?php $__env->startSection('title'); ?>
   Admin Dashboard | Products All
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<!-- Custom CSS can be added here if needed -->
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body'); ?>
<section class="content py-3">
    <div class="row">
        <div class="col-md-11 mx-auto">

            
            <div class="card mb-2 shadow-lg">
                <div class="card-header px-2 py-2">
                    <h3 class="card-title w3-small text-bold text-muted pt-1">
                        <i class="fas fa-sitemap text-primary"></i> Products
                    </h3>
                    <div class="card-tools w3-small">
                        <a href="<?php echo e(route('admin.productCreate')); ?>" 
                           class="btn-create-from btn btn-outline-primary btn-xs pull-right mr-2 py-1">
                            <i class="fas fa-plus-square"></i> Add New Product
                        </a>
                    </div>
                </div>
            </div>

            
            <div class="card w3-round shadow-lg">
                <div class="card-header pl-2 py-2">
                    <h3 class="card-title w3-small text-bold text-muted">
                        <i class="fas fa-th text-primary pt-1"></i> All Products
                    </h3>
                    <div class="card-tools">
                        
                        <div class="input-group input-group-sm">
                            <input type="search" name="q" 
                                   class="product-search form-control border-right-0 border py-2" 
                                   data-url="<?php echo e(route('admin.productSearch', ['type' => 'product'])); ?>"  
                                   placeholder="Search name, price, id...">
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text bg-transparent">
                                    <i class="fa fa-search w3-text-orange"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="card-body bg-light px-0 pb-0 pt-2">
                    <div class="col-sm-12">
                        <div class="table-responsive table-responsive-sm data-container">
                            
                            <?php echo $__env->make('admin.products.searchData', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        
                        <div class="w3-small float-right pt-1">
                            <?php echo $products->links(); ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
    $(document).ready(function () {
        // Toggle product approval status via form submission
        $(document).on('change', '.custom-control-input[name="active"]', function(e) {
            var checkbox = $(this);
            var form = checkbox.closest('form');
            var isChecked = checkbox.is(':checked');
            var productRow = checkbox.closest('tr');
            
            // Get selling price from the table (assuming it's in the 6th column, index 5)
            // Or we can pass it via data attribute in searchData.blade.php
            var sellingPrice = checkbox.attr('data-price');

            if (isChecked && (!sellingPrice || sellingPrice == 0 || sellingPrice == '0.00')) {
                e.preventDefault();
                checkbox.prop('checked', false); // Uncheck until price is set

                Swal.fire({
                    title: 'Set Selling Price',
                    text: 'Please enter the selling price to approve this product.',
                    input: 'number',
                    inputAttributes: {
                        min: 0,
                        step: 'any'
                    },
                    showCancelButton: true,
                    confirmButtonText: 'Approve',
                    showLoaderOnConfirm: true,
                    preConfirm: (price) => {
                        if (!price || price <= 0) {
                            Swal.showValidationMessage('Please enter a valid selling price');
                            return false;
                        }
                        return price;
                    },
                    allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Re-check the checkbox so it sends 'active' value
                        checkbox.prop('checked', true);
                        
                        // Create a hidden input for selling_price and add to form
                        $('<input>').attr({
                            type: 'hidden',
                            name: 'selling_price',
                            value: result.value
                        }).appendTo(form);
                        
                        form.submit();
                    }
                });
            } else {
                form.submit();
            }
        });

        // Toggle product status active/inactive via AJAX (Old Status logic - keeping for compatibility if needed elsewhere)

        // Live search products with AJAX on keyup
        $(document).on('keyup', ".product-search", function(e){
            e.preventDefault();
            var that = $(this);
            var url = that.attr('data-url');
            var q = that.val();
            $.ajax({
                url: url,
                data : {q: q},
                method: "get",
                success: function(res) {
                    if(res.success) {
                        $(".data-container").empty().append(res.page);
                    }
                }
            });
        });
    });

    // Utility function to generate slug from string
    function makeSlug(val) {
        let str = val;
        let output = str.replace(/\s+/g, '-').toLowerCase();
        $('#slug').val(output);
    }
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/admin/products/productsAll.blade.php ENDPATH**/ ?>