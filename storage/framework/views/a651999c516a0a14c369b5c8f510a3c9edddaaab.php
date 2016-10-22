<?php $__env->startSection('content'); ?>
    <h3>Update Team Details</h3>
    <?php echo Form::model($team,['method' => 'PATCH','route'=>['team.update',$team->id]]); ?>


    <div class="form-group">
        <?php echo Form::label('team_name', 'Team Name:'); ?>

        <?php echo Form::text('team_name',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('coach_mobile', 'Coach Mobile:'); ?>

        <?php echo Form::text('coach_mobile',null,['class'=>'form-control']); ?>

    </div>

        <div class="form-group">
        <?php echo Form::submit('Update', ['class' => 'btn btn-primary']); ?>

    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>