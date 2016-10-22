<?php $__env->startSection('content'); ?>
    <h3>Update School Details</h3>
    <?php echo Form::model($school,['method' => 'PATCH','route'=>['school.update',$school->id]]); ?>

    <div class="form-group">
        <?php echo Form::label('school_name', 'School Name:'); ?>

        <?php echo Form::text('school_name',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('school_email', 'School Email'); ?>

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
        <?php echo Form::submit('Update', ['class' => 'btn btn-primary']); ?>

    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>