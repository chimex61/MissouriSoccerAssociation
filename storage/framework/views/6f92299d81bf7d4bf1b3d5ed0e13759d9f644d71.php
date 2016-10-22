<?php $__env->startSection('content'); ?>
    <h3>Teams</h3>
    <?php if((Auth::check())&&($role=='Official')): ?>
    <a href="<?php echo e(url('/team/create')); ?>" class="btn btn-success">Add New Team</a>
    <?php endif; ?>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>School Name</th>
            <th>Team Name</th>
            <th>Coach Name</th>
            <th>Coach Mobile</th>
            <th>Matches Won</th>
            <th>Matches Lost</th>
            <th colspan="3"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($teams as $team): ?>
            <tr>
                <td><?php echo e($team->school->school_name); ?></td>
                <td><?php echo e($team->team_name); ?></td>
                <td><?php echo e($team->user->name); ?></td>
                <td><?php echo e($team->coach_mobile); ?></td>
                <td><?php echo e($team->matches_won); ?></td>
                <td><?php echo e($team->matches_lost); ?></td>

                <td><a href="<?php echo e(url('team',$team->id)); ?>" class="btn btn-primary">View Details</a></td>
                <?php if((Auth::check())&&($role=='Official')): ?>
                <td><a href="<?php echo e(route('team.edit',$team->id)); ?>" class="btn btn-warning">Update Details</a></td>
                <td>
                    <?php echo Form::open(['method' => 'DELETE', 'route'=>['team.destroy', $team->id]]); ?>

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