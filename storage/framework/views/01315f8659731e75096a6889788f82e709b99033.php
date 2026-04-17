<?php $__env->startSection('title',"Admin Dashboard | Edit News"); ?>
<?php $__env->startSection('body'); ?>

<section class="pt-3">
    <div class="card ">
        <div class="card-header">
            <h3 class="card-title">Edit News</h3>
        </div>

        <form action="<?php echo e(route('news.update',$news->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="card-body" style="background-color: rgba(128, 128, 128, 0.37)">
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-sm-7">
                        <div class="card card-default" style="margin-bottom: 5px;">
                            <div class="card-body">
                               
                                 <div class="form-group">
                                     <label for="title">Title</label>
                                    <input type="text" name="title"  value="<?php echo e($news->title); ?>" class="form-control" placeholder="Enter Title">
                                     <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <span style="color:red"><?php echo e($message); ?></span>
                                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                 </div>

                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select name="category_id"  class="form-control select2">
                                        <option value="">Choose Category</option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>" <?php echo e($news->category_id == $category->id ? 'selected' : ' '); ?>><?php echo e($category->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group">
                                    <label for="excerpt">Excerpt</label>
                                    <textarea name="excerpt" class="form-control" id=""><?php echo e($news->excerpt); ?></textarea>
                                    <?php $__errorArgs = ['excerpt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span style="color:red"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description"
                                    <?php if($news->editor): ?>
                                     id="summernote"
                                     <?php else: ?>
                                     id="summernote-"
                                     <?php endif; ?>
                                      class="form-control" rows="5"><?php echo e($news->description); ?></textarea>
                                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span style="color:red"><?php echo e($message); ?></span>
                                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                



                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" id="" class="form-control">
                                    <option value="">Choose Status</option>
                                    <option value="published" <?php echo e($news->status === 'published' ? 'selected' : ' '); ?>>Published</option>
                                    <option value="pending" <?php echo e($news->status === 'pending' ? 'selected' : ' '); ?>>Pending</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="mr-3"><input type="checkbox"  name="active" value="1" <?php echo e($news->active === 1 ? 'checked' : ' '); ?>> Active</label>
                                </div>

                                    <div class="form-group">
                                    <label class="mr-3"><input type="checkbox"  name="featured_slider" value="1" <?php echo e($news->featured_slider === 1 ? 'checked' : ' '); ?>> Feature Slider</label>
                                </div>
                                
                                
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"  name="editor" value="1" <?php echo e($news->editor == 1 ? 'checked' : ''); ?>> Editor
                                        </label>
                                    </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="card card-default" style="margin-bottom: 20px;">
                            <div class="card-header">
                                <h3 class="card-title">Add Feature Image</h3>
                            </div>
                              <div class="card-body">
                                <div class="form-group row">
                                    <label for="feature_image" class="col-sm-4 col-form-label">Feature Image</label>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control-file" id="feature_image" name="feature_image">
                                    </div>
                                   <img  src="<?php echo e(route('imagecache', ['template' => 'ppsm', 'filename' => $news->fi()])); ?>" alt="news">
                                    <?php $__errorArgs = ['feature_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span style="color: red"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        <?php echo $__env->make('admin.media.mediaContainer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </div>
                </div>

            </div>

            <div class="card-footer text-right">
                 <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('js'); ?>
<script>
    $(document).ready(function(){
     $('[data-category-id]').on('change',function(){
        console.clear();
        if(this.checked){
            $('[data-id=' + $(this).data('category-id') + ']').prop('checked',true);
        }
     });


     $(document).on('click', '.copyboard', function(e) {
            e.preventDefault();

            $(".copyboard").text('Copy URL');

            $(this).text('Coppied!');
            var copyText = $(this).attr('data-text');

            var textarea = document.createElement("textarea");
            textarea.textContent = copyText;
            textarea.style.position = "fixed";
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand("copy");

            document.body.removeChild(textarea);
     });



     $(document).on('click', '.deleteFile', function(e) {
            e.preventDefault();
            var that = $(this);
            var url = that.attr('href');
            alert(url);
            $.ajax({
                url: url,
                method: 'GET',
                success: function(res) {
                    if (res.success) {
                        that.closest('li').remove();
                    }
                }
            })
    });

    $('.select2').select2({});

    $('.select2bs4').select2({
            minimumInputLength: 1,
            tags:true,
            tokenSeparators: [','],
            ajax: {
            data: function (params) {
                return {
                q: params.term, // search term
                page: params.page
                };
            },
            processResults: function (data, params) {
                params.page = params.page || 1;
                var data = $.map(data, function (obj) {
                obj.id = obj.id || obj.name;
                return obj;
                });
                var data = $.map(data, function (obj) {
                obj.text = obj.text || obj.name;
                return obj;
                });
                return {
                results: data,
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            }
            },
        });



        $('.selectAuthors').select2({
            minimumInputLength: 1,
            tags:true,
            tokenSeparators: [','],
            ajax: {
            data: function (params) {
                return {
                q: params.term, // search term
                page: params.page
                };
            },
            processResults: function (data, params) {
                params.page = params.page || 1;
                var data = $.map(data, function (obj) {
                obj.id = obj.id || obj.name;
                return obj;
                });
                var data = $.map(data, function (obj) {
                obj.text = obj.text || obj.name;
                return obj;
                });
                return {
                results: data,
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            }
            },
        });


    });

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/admin/news/edit.blade.php ENDPATH**/ ?>