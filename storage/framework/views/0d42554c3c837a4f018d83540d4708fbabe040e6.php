<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>

<script src="<?php echo e(asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

 <section class="pt-3">

    <div class="container pt-3 pb-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="mb-4">
                <nav class="w-100 w-md-50 w-lg-30" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item ">
                           <span class="" style="font-size:20px;">Cahnge Paasword</span>
                        </li>
                    </ol>
                </nav>
            </div>
           </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                    <?php if(Auth::user()->member): ?>
                    <a href="<?php echo e(route('agent.dashboard')); ?>" class="btn btn-info">back</a>
                    <?php elseif(Auth::user()->doctor): ?>
                    <a href="<?php echo e(route('doctor.dashboard')); ?>" class="btn btn-info">back</a>
                    <?php elseif(auth()->user()->visits()->count()): ?>
                    <a href="<?php echo e(route('patient.dashboard')); ?>" class="btn btn-info">back</a>
                    <?php endif; ?>
            </div>
        </div>




        <div class="row pt-2 justify-content-center">
            <div class="col-lg-8">
                <form  id="updatePasswordForm" action="<?php echo e(route('member.update_password')); ?>" method="post">
                  <?php echo csrf_field(); ?>
                        <div class="input-group input-group-static mb-4">
                            <label>Old Password</label>
                            <input type="password" class="form-control" id="old_password" name="old_password" data-url="<?php echo e(route('member.old_password')); ?>" placeholder="Enter Old Password">
                            <span id="checkOldPwd" style="font-weight: bold"></span>
                            <?php $__errorArgs = ['old_password'];
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


                        <div class="input-group input-group-static mb-4">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Enter New Password">
                            <?php $__errorArgs = ['new_password'];
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




                        <div class="input-group input-group-static mb-4">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter Confirm Password">
                            <span id="checkOldPwd" style="font-weight: bold"></span>
                            <?php $__errorArgs = ['old_password'];
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


                        <div class="row">
                            <div class="text-left">
                                <button type="submit" class="btn bg-gradient-primary my-4 mb-2">Change Password</button>
                            </div>
                        </div>

                </form>

            </div>
        </div>

    </div>
 </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


       $( document ).ready(function() {
          $('#old_password').keyup(function(){
             var that = $(this);
             let old_pwd = $(this).val();
             let url = $(this).attr('data-url');
              $.ajax({
                url: url,
                method: 'post',
                data: { old_pwd : old_pwd },
                success: function(result){
                  if(result.success == true){
                    $('#checkOldPwd').html("<font style='color: green;'>password is correct</font>");
                  }else if(result.success == false){
                    $('#checkOldPwd').html("<font style='color: red;'>password is iscorrect</font>");
                  }
                },error:function(error){
                   console.log(error)
                }
            });
          });


          $("#updatePasswordForm").validate({
              rules: {
                new_pwd: {
                  required: true,
                  minlength: 6
                },
                confirm_password: {
                  required: true,
                  minlength: 6,
                  equalTo: "#new_password"
                },

              },
              messages: {
                new_password: {
                  required: "Please choose a password",
                  minlength: "Your password must be at least 6 characters long"
                },
                confirm_password: {
                  required: "Please choose a password",
                  minlength: "Your password must be at least 6 characters long",
                },
              }
            });


          //image show
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload=function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.pageMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/frontend/home/profile.blade.php ENDPATH**/ ?>