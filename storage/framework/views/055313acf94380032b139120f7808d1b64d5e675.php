<?php $__env->startSection('content'); ?>
    <h1>Create Post</h1>
    <?php echo Form::open(['url' => 'posts']); ?>

    <div class="form-group">
        <?php echo Form::label('Title', 'Title:'); ?>

        <?php echo Form::text('title',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Description', 'Description:'); ?>

        <?php echo Form::text('description',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>