<!-- Main Content -->
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <?php if(empty($user)): ?>
                <div class="panel-heading">Sorry! This email id is not registered in our database. Try again. </div>
                <?php else: ?>
                    <div class="panel-heading">Reset Password- Please answer the below security questions</div>
                    <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/ResetPassword')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label"> Your email id: </label>

                            <div class="col-md-6">
                                <input id="email" type="security_answer1" class="form-control" name="email" value="<?php echo ($user['email']); ?>" readonly="true">
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('security_question1') ? ' has-error' : ''); ?>">
                            <label for="security_question1" class="col-md-4 control-label"><?php echo ($user['security_question1']); ?></label>

                            <div class="col-md-6">
                                <input id="security_answer1" type="security_answer1" class="form-control" name="security_answer1" value="<?php echo e(old('security_answer1')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('security_question2') ? ' has-error' : ''); ?>">
                            <label for="security_question1" class="col-md-4 control-label"><?php echo ($user['security_question2']); ?></label>

                            <div class="col-md-6">
                                <input id="security_answer2" type="security_answer2" class="form-control" name="security_answer2" value="<?php echo e(old('security_answer2')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" >
                                     Submit
                                </button>
                            </div>
                        </div>



                    </form>
                </div>

                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>