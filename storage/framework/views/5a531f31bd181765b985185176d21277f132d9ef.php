<div class="graphs">
    <h3 class="blank1">Employees Management</h3>
    <div class="xs tabls">
        <div class="bs-example4" data-example-id="contextual-table">
            <a href="<?php echo e(url('admin/employees/create')); ?>" class="btn btn-primary">Add Employee</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($users as $key => $user): ?>
                    <tr>
                        <th><?php echo e($key + 1); ?></th>
                        <td><?php echo e($user->first_name); ?></td>
                        <td><?php echo e($user->last_name); ?></td>
                        <td><?php echo e($user->username); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td>
                            <form action="<?php echo e(url('admin/employees/'.$user->id)); ?>" method="POST">
                                <?php /*<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">*/ ?>
                                <?php echo e(csrf_field()); ?>

                                <?php /*<input type="hidden" name="_method" value="DELETE">*/ ?>
                                <?php echo e(method_field('DELETE')); ?>

                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>