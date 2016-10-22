<?php $__env->startSection('content'); ?>
    <h3>Add New School</h3>
    <?php echo Form::open(['url' => 'school']); ?>


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
        <?php echo Form::label('school_name', 'School Name:'); ?>

        <?php echo Form::text('school_name',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('school_email', 'School email'); ?>

        <?php echo Form::text('school_email',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('school_address', 'School Address:'); ?>

        <?php echo Form::text('school_address',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('school_city', 'School City:'); ?>

        <?php echo Form::text('school_city',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('school_state', 'School State:'); ?>

        <?php echo Form::text('school_state',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('school_zipcode', 'School Zip:'); ?>

        <?php echo Form::text('school_zipcode',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('school_contactno', 'School Contact Number:'); ?>

        <?php echo Form::text('school_contactno',null,['class'=>'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>