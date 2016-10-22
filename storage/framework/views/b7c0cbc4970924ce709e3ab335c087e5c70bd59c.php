<?php $__env->startSection('content'); ?>
    <h3>Players</h3>
    <a class="btn btn-primary">All Players</a>
    &nbsp; &nbsp;
    <?php if((Auth::check())&&($user_role=="Coach")): ?>
        <a href="<?php echo e(url('/player/create')); ?>" class="btn btn-success">Add Player</a>
        &nbsp; &nbsp;
        <a class="btn btn-warning">My Players</a>
    <?php endif; ?>
    <hr>

    <?php if(count($myPlayers)==0): ?>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Team Name</th>
            <th>Player Name</th>
            <th>Player Email</th>
            <th>Player Contact Number</th>
            <th colspan="3"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($myPlayers as $player): ?>
            <tr>
                <td><?php echo e($player->team->team_name); ?></td>
                <td><?php echo e($player->player_name); ?></td>
                <td><?php echo e($player->player_email); ?></td>
                <td><?php echo e($player->player_contactno); ?></td>
                <td><a href="<?php echo e(url('player',$player->id)); ?>" class="btn btn-primary">View Details</a></td>

                <td><a href="<?php echo e(route('player.edit',$player->id)); ?>" class="btn btn-warning">Update Details</a></td>
                <td>
                    <?php echo Form::open(['method' => 'DELETE', 'route'=>['player.destroy', $player->id]]); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                    <?php echo Form::close(); ?>

                </td>

            </tr>
        <?php endforeach; ?>

        </tbody>

    </table>
    <?php endif; ?>

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Team Name</th>
            <th>Player Name</th>
            <th>Player Email</th>
            <th>Player Contact Number</th>
            <th colspan="3"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($players as $player): ?>
            <tr>
                <td><?php echo e($player->team->team_name); ?></td>
                <td><?php echo e($player->player_name); ?></td>
                <td><?php echo e($player->player_email); ?></td>
                <td><?php echo e($player->player_contactno); ?></td>
                <td><a href="<?php echo e(url('player',$player->id)); ?>" class="btn btn-primary">View Details</a></td>
                <?php if((Auth::check())&&($user_role=="Coach")): ?>
                    <td><a href="<?php echo e(route('player.edit',$player->id)); ?>" class="btn btn-warning">Update Details</a></td>
                    <td>
                        <?php echo Form::open(['method' => 'DELETE', 'route'=>['player.destroy', $player->id]]); ?>

                        <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                        <?php echo Form::close(); ?>

                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>

        </tbody>

    </table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>