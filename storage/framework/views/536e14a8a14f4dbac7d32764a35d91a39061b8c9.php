<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sign-up</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                            <label for="address" class="col-md-4 control-label">Address Line</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="<?php echo e(old('address')); ?>">

                                <?php if($errors->has('address')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('address')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="<?php echo e(old('city')); ?>">

                                <?php if($errors->has('city')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('city')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('state') ? ' has-error' : ''); ?>">
                            <label for="state" class="col-md-4 control-label">State</label>

                            <div class="col-md-6">
                            <select class="form-control" name="state" value="<?php echo e(old('state')); ?>">
                                <option value="none">--Select--</option>
                                <option value="AZ">AZ</option>
                                <option value="NE">NE</option>
                                <option value="MS">MS</option>
                            </select>
                                <?php if($errors->has('state')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('state')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('zipcode') ? ' has-error' : ''); ?>">
                            <label for="zipcode" class="col-md-4 control-label">Zip code</label>

                            <div class="col-md-6">
                                <input id="zipcode" type="text" class="form-control" name="zipcode" value="<?php echo e(old('zipcode')); ?>">

                                <?php if($errors->has('zipcode')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('zipcode')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('contactno') ? ' has-error' : ''); ?>">
                            <label for="state" class="col-md-4 control-label">Contact number</label>

                            <div class="col-md-6">
                                <input id="contactno" type="text" class="form-control" name="contactno" value="<?php echo e(old('contactno')); ?>">

                                <?php if($errors->has('contactno')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('contactno')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('role') ? ' has-error' : ''); ?>">
                            <label for="role" class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">
                            <select class="form-control" name="role" value="<?php echo e(old('role')); ?>">
                                <option value="none">--Select--</option>
                                <option value="Coach">Coach</option>
                                <option value="Official">Official</option>
                                <option value="Referee">Referee</option>
                            </select>

                            <?php if($errors->has('role')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('role')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('security_question1') ? ' has-error' : ''); ?>">
                            <label for="security_question1" class="col-md-4 control-label">Security Question 1</label>

                            <div class="col-md-6">
                                <select class="form-control" name="security_question1" value="<?php echo e(old('security_question1')); ?>">
                                    <option value="none">--Select--</option>
                                    <option value="Your first employer">Your first employer</option>
                                    <option value="Your mother maiden name">Your mother maiden name</option>
                                    <option value="Your first car">Your first car</option>
                                    <option value="Your favourite city">Your favourite city</option>
                                    <option value="Your favourite holiday destination">Your favourite holiday destination</option>

                                </select>

                                <?php if($errors->has('security_question1')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('security_question1')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('security_answer1') ? ' has-error' : ''); ?>">
                            <label for="state" class="col-md-4 control-label">Security Answer 1</label>

                            <div class="col-md-6">
                                <input id="security_answer1" type="text" class="form-control" name="security_answer1" value="<?php echo e(old('security_answer1')); ?>">

                                <?php if($errors->has('security_answer1')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('security_answer1')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('security_question2') ? ' has-error' : ''); ?>">
                            <label for="security_question2" class="col-md-4 control-label">Security Question 2</label>

                            <div class="col-md-6">
                                <select class="form-control" name="security_question2">
                                    <option value="none">--Select--</option>
                                    <option value="Your first employer">Your first employer</option>
                                    <option value="Your mother maiden name">Your mother maiden name</option>
                                    <option value="Your first car">Your first car</option>
                                    <option value="Your favourite city">Your favourite city</option>
                                    <option value="Your favourite holiday destination">Your favourite holiday destination</option>

                                </select>

                                <?php if($errors->has('security_question2')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('security_question2')); ?></strong>
                            </div>
                        </div>
                    </form>
                    </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('security_answer2') ? ' has-error' : ''); ?>">
                <label for="state" class="col-md-4 control-label">Security Answer 2</label>

                <div class="col-md-6">
                    <input id="security_answer2" type="text" class="form-control" name="security_answer2" value="<?php echo e(old('security_answer2')); ?>">

                    <?php if($errors->has('security_answer2')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('security_answer2')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-user"></i> Register
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>