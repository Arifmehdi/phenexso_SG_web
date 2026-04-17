<table id="example1" class="table table-sm table-bordered table-striped">
    <thead>
    <tr>
        <th width="20">SL</th>
        <th width="100">Action</th>
        <th>Title</th>
        <th>Image</th>
        <th>Active</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
        <?php $i = (($newses->currentPage() - 1) * $newses->perPage() + 1); ?>
    <?php $__currentLoopData = $newses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($i++); ?></td>
            <td>
                <a href="<?php echo e(route('news.show',$news->id)); ?>" class="btn btn-xs btn-outline-info mr-1 float-left"><i class="fa fa-eye"></i></a>
                <a href="<?php echo e(route('news.edit',$news->id)); ?>" class="btn btn-xs btn-outline-primary mr-1 float-left"><i class="fa fa-edit"></i></a>

                <form action="<?php echo e(route('news.destroy',$news->id)); ?>" method="post" onclick="return confirm('Are you sure you want to delete this item?');">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-xs btn-outline-danger mr-1 float-left" style="cursor: pointer;"><i class="fa fa-trash"></i></button>
                </form>
            </td>
            <td><?php echo e($news->title); ?></td>
            <td>
                <img  src="<?php echo e(route('imagecache', ['template' => 'ppsm', 'filename' => $news->fi()])); ?>" alt="post">
            </td>
            <td>
                <input type="checkbox" name="toogle" data-url="<?php echo e(route('news.active')); ?>" value="<?php echo e($news->id); ?>" data-toggle="toggle" data-size="sm" <?php echo e($news->active==1 ? 'checked' : ''); ?> data-on="On"  data-off="Off" data-onstyle="success" data-offstyle="danger">
            </td>
            <td><?php echo e($news->status); ?></td>

        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php echo e($newses->render()); ?>




<?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/admin/news/search_data.blade.php ENDPATH**/ ?>