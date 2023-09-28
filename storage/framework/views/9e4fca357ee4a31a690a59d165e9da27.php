<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post"  action="<?php echo e(route('BookingSchedule.update', $id)); ?> ">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    <?php $__currentLoopData = $bookingschedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookingschedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="form-group col-md-6">
                <label class="control-label">Start_time</label>
                <input class="form-control" type="text" name="start_time" value="<?php echo e($bookingschedule->start_time); ?>" >
            </div>


            <div class="form-group col-md-6">
                <label class="control-label">End_timee</label>
                <input class="form-control" type="text" name="end_time" value="<?php echo e($bookingschedule->end_time); ?>">
            </div>


            <div class="form-group col-md-6">
                <label class="control-label">Status</label>
                <input class="form-control" type="text" name="status" value="<?php echo e($bookingschedule->status); ?>">
            </div>


            <div class="form-group col-md-6">
                <label class="control-label">Employee_</label>
                <select  class="form-control"  name="employee_id">
                    <?php $__currentLoopData = $Employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Employees): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($Employees->id); ?>"
                        <?php if($Employees->id == $bookingschedule->employee_id): ?>
                            <?php echo e('selected'); ?>

                            <?php endif; ?>
                        >
                            <?php echo e($Employees -> name); ?>

                        </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label class="control-label">Customer_</label>
                <select  class="form-control"  name="customer_id">
                    <?php $__currentLoopData = $Customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Customers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($Customers->id); ?>"
                        <?php if($Customers->id == $bookingschedule->customer_id): ?>
                            <?php echo e('selected'); ?>

                            <?php endif; ?>
                        >
                            <?php echo e($Customers -> name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

        </div>

        <button class="btn btn-save">Update</button>
        <a class="btn btn-cancel" data-dismiss="modal" href="<?php echo e(route ('BookingSchedule.index')); ?>">Hủy bỏ</a>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
</form>

</body>
</html>




<?php /**PATH C:\xampp\htdocs\pitch\resources\views/BookingSchedule/edit.blade.php ENDPATH**/ ?>