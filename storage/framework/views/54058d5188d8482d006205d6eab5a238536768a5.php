<?php $__env->startSection('content'); ?>
    <?php if($flag): ?>
    <h3>Update Player Details</h3>
    <?php echo Form::model($player,['method' => 'PATCH','route'=>['player.update',$player->id]]); ?>

       <div class="form-group">
        <?php echo Form::label('player_name', 'Player Name:'); ?>

        <?php echo Form::text('player_name',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('player_address', 'Player Address:'); ?>

        <?php echo Form::text('player_address',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('player_city', 'Player City:'); ?>

        <?php echo Form::text('player_city',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('player_state', 'Player State:'); ?>

        <?php echo Form::text('player_state',null,['class'=>'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('player_zipcode', 'Player Zipcode:'); ?>

        <?php echo Form::text('player_zipcode',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('player_contactno', 'Player Contact Number:'); ?>

        <?php echo Form::text('player_contactno',null,['class'=>'form-control']); ?>

    </div>

        <div class="form-group">
        <?php echo Form::submit('Update', ['class' => 'btn btn-primary']); ?>

    </div>
    <?php echo Form::close(); ?>


        <?php else: ?>
    <div class="alert alert-danger">
        <h3>You are not authorized to update player information of players of the other team.</h3>
    </div>

    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>