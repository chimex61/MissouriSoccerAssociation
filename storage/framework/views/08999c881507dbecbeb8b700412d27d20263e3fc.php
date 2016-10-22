<?php $__env->startSection('content'); ?>

    <?php echo Form::open(['url' => 'player']); ?>

<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach($errors->all() as $error): ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

    <?php if(count($team)==0): ?>
        <div class="alert alert-danger">
            <h3>You do not have any team in MSA. Please contact any MSA official for creating your team, thereafter you can
                add players in your team.</h3>
        </div>
    <?php else: ?>
        <h3>Add New Player</h3>
    <div class="form-group">
        <?php echo Form::label('team_id', 'Team Name:'); ?>

        <?php echo Form::select('team_id', $team); ?>

    </div>
        <div class="form-group">
        <?php echo Form::label('player_name', 'Player Name:'); ?>

        <?php echo Form::text('player_name',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('player_email', 'Player Email Id:'); ?>

        <?php echo Form::text('player_email',null,['class'=>'form-control']); ?>

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
        <?php echo Form::label('player_contactno', 'Player Contact No:'); ?>

        <?php echo Form::text('player_contactno',null,['class'=>'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

    </div>

    <?php echo Form::close(); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>