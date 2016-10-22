<?php $__env->startSection('content'); ?>
    <h1>Blog</h1>
    <a href="<?php echo e(url('/posts/create')); ?>" class="btn btn-success">Create Post</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($posts as $post): ?>
            <tr>
                <td><?php echo e($post->id); ?></td>
                <td><?php echo e($post->title); ?></td>
                <td><?php echo e($post->description); ?></td>
                <td><a href="<?php echo e(url('posts',$post->id)); ?>" class="btn btn-primary">Read</a></td>
                <td><a href="<?php echo e(route('posts.edit',$post->id)); ?>" class="btn btn-warning">Update</a></td>
                <td>
                    <?php echo Form::open(['method' => 'DELETE', 'route'=>['posts.destroy', $post->id]]); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>

    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>