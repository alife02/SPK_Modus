<?php $__env->startSection('content'); ?>
    <div id="page-wrapper">
        <div class="graphs">
            <h3 class="blank1">Basic Tables</h3>
            <div class="xs tabls">
                <div class="bs-example4" data-example-id="contextual-table">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php /*<?php foreach($employees as $employee): ?>*/ ?>
                        <?php /*<tr class="active">*/ ?>
                            <?php /*<th scope="row"><?php echo e($employee->id); ?></th>*/ ?>
                            <?php /*<td><?php echo e($employee->first_name); ?></td>*/ ?>
                            <?php /*<td><?php echo e($employee->last_name); ?></td>*/ ?>
                            <?php /*<td><?php echo e($employee->username); ?></td>*/ ?>
                            <?php /*<td><?php echo e($employee->email); ?></td>*/ ?>
                        <?php /*</tr>*/ ?>
                            <?php /*<?php endforeach; ?>*/ ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>