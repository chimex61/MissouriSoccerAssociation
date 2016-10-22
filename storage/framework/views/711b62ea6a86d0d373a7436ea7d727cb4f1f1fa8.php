<?php $__env->startSection('content'); ?>
    <h3>Add New Team</h3>
    <?php echo Form::open(['url' => 'team']); ?>

<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach($errors->all() as $error): ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

       <div class="form-group">
           <?php echo Form::label('school_id', 'School Name:'); ?>

           <?php echo Form::select('school_id', $schools); ?>

       </div>

    <div class="form-group">
        <?php echo Form::label('user_id', 'Coach Name:'); ?>

        <?php echo Form::select('user_id', $users); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('team_name', 'Team Name:'); ?>

        <?php echo Form::text('team_name',null,['class'=>'form-inline']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('coach_mobile', 'Coach Mobile Number:'); ?>

        <?php echo Form::text('coach_mobile',null,['class'=>'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>