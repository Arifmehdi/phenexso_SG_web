

<?php $__env->startSection('title'); ?>
   Admin Dashboard | Product Category Edit
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<!-- Add any page-specific CSS here -->
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body'); ?>
<section class="content py-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card mb-2 shadow-lg">
                <div class="card-header px-2 py-2">
                    <h3 class="card-title text-muted"><i class="fas fa-edit text-primary"></i> Edit Product Category</h3>
                    <a href="<?php echo e(route('admin.productCategoriesAll')); ?>" class="btn btn-outline-secondary btn-xs float-right">Back</a>
                </div>
            </div>

            <div class="card shadow-lg card-outline card-primary">
                <div class="card-body p-3">

                    <form action="<?php echo e(route('admin.productCategoryUpdate', $category)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>

                        
                        <div class="form-group">
                            <label for="name_en">Category Name (English) <span class="text-danger">*</span></label>
                            <input type="text" name="name_en" id="name_en" value="<?php echo e(old('name_en', $category->name_en)); ?>" 
                                class="form-control <?php $__errorArgs = ['name_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter  Category Name (English)" 
                                onkeyup="makeSlug(this.value)">
                            <?php $__errorArgs = ['name_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        
                        <div class="form-group">
                            <label for="name_bn">Category Name (Bangla) <span class="text-danger">*</span></label>
                            <input type="text" name="name_bn" id="name_bn" value="<?php echo e(old('name_bn', $category->name_bn)); ?>" 
                                class="form-control <?php $__errorArgs = ['name_bn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter Category Name (Bangla)" >
                            <?php $__errorArgs = ['name_bn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                       

                        
                        <div class="form-group">
                            <label for="slug">Slug <span class="text-danger">*</span></label>
                            <input type="text" name="slug" id="slug" value="<?php echo e(old('slug', $category->slug)); ?>" 
                                class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter slug">
                            <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

<div class="form-group ">
    <label for="parent_id">
        Parent Category (Optional)
    </label>
    <div >
        <select name="parent_id" id="parent_id" class="form-control">
            <option value="">-- None (Main Category) --</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($cat->parent_id === null && $cat->id != $category->id): ?>
                    <option value="<?php echo e($cat->id); ?>" 
                        <?php echo e(old('parent_id', $category->parent_id) == $cat->id ? 'selected' : ''); ?>>
                        <?php echo e($cat->name_en); ?>

                    </option>
                    
                    
                    <?php $__currentLoopData = $cat->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($child->id != $category->id): ?>
                            <option value="<?php echo e($child->id); ?>" 
                                <?php echo e(old('parent_id', $category->parent_id) == $child->id ? 'selected' : ''); ?>>
                                &nbsp;&nbsp;├─ <?php echo e($child->name_en); ?>

                            </option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php $__errorArgs = ['parent_id'];
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

                        
                        <div class="form-group">
                            <label for="excerpt">Excerpt</label>
                            <textarea name="excerpt" id="excerpt" rows="3" class="form-control" placeholder="Short description"><?php echo e(old('excerpt', $category->excerpt)); ?></textarea>
                        </div>

                        
                        <div class="form-group">
                            <label>Current Image</label>
                            <div>
                                <?php if($category->image): ?>
                                    <img src="<?php echo e(asset('storage/product_categories_images/' . $category->image)); ?>" 
                                        alt="<?php echo e($category->name_en); ?>" class="img-thumbnail" style="max-height:150px;">
                                <?php else: ?>
                                    <p>No image uploaded</p>
                                <?php endif; ?>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label for="image">Change Image</label>
                            <input type="file" name="image" id="image" class="form-control-file <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback d-block"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        
                        <div class="form-check mb-3">
                            <input type="checkbox" name="active" id="active" class="form-check-input" <?php echo e(old('active', $category->active) ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="active">Active</label>
                        </div>

                        <button type="submit" class="btn btn-primary float-right">Update Category</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
    function makeSlug(val) {
        let str = val.trim().toLowerCase();
        let slug = str.replace(/\s+/g, '-').replace(/[^\w\-]+/g, '');
        document.getElementById('slug').value = slug;
    }
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/admin/productCategories/productCategoryEdit.blade.php ENDPATH**/ ?>