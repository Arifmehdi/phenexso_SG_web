

<?php $__env->startSection('title'); ?>
   Admin Dashboard | Product Create
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <style>
        /* Custom styling for product tags select box */
        .productTags {
            width: 100%;
        }
        /* Margin bottom utility class */
        .margin-bottom {
            margin-bottom: 20px;
        }
        /* Initially hide subcategory containers */
        .subcat-add {
            display: none;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body'); ?>
<section class="content py-3">
    <div class="row">
        <div class="col-md-11 mx-auto">
            
            <div class="card mb-2 shadow-lg">
                <div class="card-header px-2 py-2">
                    <h3 class="card-title w3-small text-bold text-muted pt-1">
                        <i class="fas fa-plus-circle text-primary"></i>&nbsp; Add New Product
                    </h3>
                    <div class="card-tools w3-small">
                        <a href="<?php echo e(route('admin.productsAll')); ?>" class="btn-create-from btn btn-outline-primary btn-xs pull-right mr-2 py-1">
                            <i class="fa fa-arrow-left"></i> Back
                        </a>
                    </div>
                </div>
            </div>

            
            <form action="<?php echo e(route('admin.productStore')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="row">
                    
                    <div class="col-sm-7">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label for="name_en">Product Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name_en" value="<?php echo e(old('name_en')); ?>" class="form-control" placeholder="Product Name (English)" onkeyup="makeSlug(this.value)" required>
                                    <?php $__errorArgs = ['name_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                
                                <div class="form-group">
                                    <label for="slug">Slug <span class="text-danger">*</span></label>
                                    <input type="text" id="slug" name="slug" value="<?php echo e(old('slug')); ?>" placeholder="URL" class="form-control" required>
                                    <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                
                                

                                
                                
                                <div class="form-group">
                                    <label for="purchase_price">Purchase Price <span class="text-danger">*</span></label>
                                    <input type="number" name="purchase_price" value="<?php echo e(old('purchase_price')); ?>" class="form-control" placeholder="Enter purchase price">
                                    <?php $__errorArgs = ['purchase_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="selling_price">Selling Price <span class="text-danger">*</span></label>
                                    <input type="number" name="selling_price" value="<?php echo e(old('selling_price')); ?>" class="form-control" placeholder="Enter selling price">
                                    <?php $__errorArgs = ['selling_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group">
                                    <label for="price">Product Stock <span class="text-danger"></span></label>
                                    <input type="number" name="stock" value="<?php echo e(old('stock')); ?>" class="form-control" placeholder="Enter stock">
                                    <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                
                                <div class="form-group">
                                    <label for="unit">Unit</label>
                                    <select name="unit" id="unit" class="form-control">
                                        <option value="">Select Unit</option>
                                        <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($unit->name_en); ?>" <?php echo e(old('unit') == $unit->name_en ? 'selected' : ''); ?>>
                                                <?php echo e($unit->name_en); ?> <?php echo e($unit->name_bn ? '(' . $unit->name_bn . ')' : ''); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['unit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                
                                <div class="form-group">
                                    <label for="discount">Product Discount (flat)</label>
                                    <input type="number" name="discount" value="<?php echo e(old('discount')); ?>" class="form-control" placeholder="Enter discount">
                                </div>

                                
                                <div class="form-group">
                                    <label for="rider_id">Assign Rider (Driver)</label>
                                    <select name="rider_id" id="rider_id" class="form-control select2">
                                        <option value="">Select Rider</option>
                                        <?php $__currentLoopData = $riders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($rider->id); ?>" <?php echo e(old('rider_id') == $rider->id ? 'selected' : ''); ?>>
                                                <?php echo e($rider->name); ?> (<?php echo e($rider->mobile); ?>)
                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['rider_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>


                            </div>
                        </div>

                        
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label for="excerpt_en">Excerpt</label>
                                    <textarea name="excerpt_en" id="excerpt_en" class="form-control" rows="2" placeholder="Excerpt"><?php echo e(old('excerpt_en')); ?></textarea>
                                </div>

                                
                                <div class="form-group">
                                    <label for="description_en">Description</label>
                                    <textarea name="description_en" id="summernote" class="form-control summernote" rows="5" placeholder="Description"><?php echo e(old('description_en')); ?></textarea>
                                </div>

                                
                                <div class="form-group">
                                    <label class="mr-3">
                                        <input type="checkbox" name="active" <?php echo e(old('active', 1) ? 'checked' : ''); ?>>
                                        Active
                                    </label>
                                </div>

                                
                                <div class="form-group">
                                    <label class="mr-3">
                                        <input type="checkbox" name="feature" <?php echo e(old('feature', 1) ? 'checked' : ''); ?>>
                                        Featured
                                    </label>
                                </div>

                                
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="editor" <?php echo e(old('editor', 1) ? 'checked' : ''); ?>>
                                        Editor
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-sm-5">
                        <div class="card card-primary card-outline margin-bottom">
                            <div class="card-header">
                                <h3 class="card-title">Add Featured Image</h3>
                                <span class="text-danger">&nbsp;&nbsp;Better Size(210x210px)</span>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="feature_image" class="col-sm-4 col-form-label">Featured Image</label>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control-file" id="feature_image" name="featured_image" value="<?php echo e(old('feature_image')); ?>">
                                    </div>
                                    <?php $__errorArgs = ['feature_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group row">
                                    <label for="additional_images" class="col-sm-4 col-form-label">Additional Images</label>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control-file" id="additional_images" name="additional_images[]" multiple>
                                    </div>
                                    <?php $__errorArgs = ['additional_images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        
                        <?php if ($__env->exists('admin.media.mediaContainer')) echo $__env->make('admin.media.mediaContainer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>

                
                <?php if($categories->count() > 0): ?>
                <div class="row">
                    <div class="col-12">
                        <div class="add-categories-subcategories">
                            <div class="card card-primary card-outline">
                                <div class="card-header with-border">
                                    <h3 class="card-title">Add Category</h3>
                                </div>
                                <div class="card-body p-2">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="category-area">
                                            
                                            <div class="custom-control custom-checkbox bg-light rounded-lg mb-1">
                                                <input type="checkbox" class="custom-control-input toggle-category-checkbox" id="customCheckId_<?php echo e($cat->id); ?>" name="categories[]" value="<?php echo e($cat->id); ?>">
                                                <label class="custom-control-label" for="customCheckId_<?php echo e($cat->id); ?>"><?php echo e($cat->name_en ?? $cat->name_bn); ?></label>
                                            </div>

                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                
                <div class="card-footer text-right">
                    <input type="submit" class="btn btn-primary px-5" value="Save Product">
                </div>
            </form>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
    $(document).ready(function () {
        // Toggle product status active/inactive (if used somewhere)
        $(document).on('click', ".productStatus", function(e){
            e.preventDefault();
            var that = $(this);
            var url = that.attr('data-url');
            $.ajax({
                url: url,
                method: "get",
                success: function(res) {
                    if(res.active == true) {
                        that.removeClass('badge-danger').addClass('badge-primary').text('Active');
                    } else {
                        that.removeClass('badge-primary').addClass('badge-danger').text('Inactive');
                    }
                }
            });
        });

        // Product search input AJAX call (if used somewhere)
        $(document).on('keyup', ".product-search", function(e){
            e.preventDefault();
            var that = $(this);
            var url = that.attr('data-url');
            var q = that.val();
            $.ajax({
                url: url,
                data: {q:q},
                method: "get",
                success: function(res) {
                    if(res.success) {
                        $(".data-container").empty().append(res.page);
                    }
                }
            });
        });


        // Show/hide subcategories on category checkbox toggle
        $(document).on('click', '.toggle-category-checkbox', function() {
            var that = $(this);
            if(that.is(":checked")) {
                that.closest('.category-area').find('.subcat-add').show();
            } else {
                that.closest('.category-area').find('.subcat-add').hide();
            }
        });

    });

    // Slug generator from product name input
    function makeSlug(val) {
        let str = val;
        let output = str.replace(/\s+/g, '-').toLowerCase();
        $('#slug').val(output);
    }
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/admin/products/productCreate.blade.php ENDPATH**/ ?>