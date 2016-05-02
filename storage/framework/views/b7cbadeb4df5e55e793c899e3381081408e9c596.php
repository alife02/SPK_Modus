<?php $__env->startSection('content'); ?>
    <div id="page-wrapper">
        <div class="graphs">
            <h3 class="blank1">Add Employee</h3>
            <div class="panel-body1">
                <h3 style="margin:0 0 1em 1em">Headings</h3>
                <form role="form" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-8">
                            <div class="input-group in-grp1">
						<span class="input-group-addon">
							<i class="fa fa-edit"></i>
						</span>
                                <input type="text" class="form-control1" placeholder="First Name">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <div class="input-group in-grp1">
						<span class="input-group-addon">
							<i class="fa fa-edit"></i>
						</span>
                                <input type="text" class="form-control1" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <div class="input-group in-grp1">
						<span class="input-group-addon">
							<i class="fa fa-edit"></i>
						</span>
                                <input type="text" class="form-control1" placeholder="Email Adress">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <div class="input-group in-grp1">
						<span class="input-group-addon">
							<i class="fa fa-key"></i>
						</span>
                                <input type="password" class="form-control1" id="exampleInputPassword1"
                                       placeholder="Password">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php /*<div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
            <div class="sign-up">
                <form action="<?php echo e(url('admin/employees')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <h3>Register Here</h3>
                    <p class="creating">Having hands on experience in creating innovative designs,I do offer design
                        solutions which harness.</p>
                    <h5>Personal Information</h5>
                    <div class=" sign-u<?php echo e($errors->has('first_name') ? ' has-error' : ''); ?>">
                        <div class="sign-up1">
                            <h4>First Name* :</h4>
                        </div>
                        <div class="sign-up2">
                            <input id="fname" type="text" name="first_name" value="<?php echo e(old('first_name')); ?>"/>
                            <?php if($errors->has('first_name')): ?>
                                <style>
                                    #fname{
                                        border: 1px solid #dd191d;
                                    }
                                </style>

                            <?php endif; ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sign-u<?php echo e($errors->has('last_name') ? ' has-error' : ''); ?>">
                        <div class="sign-up1">
                            <h4>Last Name* :</h4>
                        </div>
                        <div class="sign-up2">
                            <input id="lname" type="text" name="last_name" value="<?php echo e(old('last_name')); ?>"/>
                            <?php if($errors->has('last_name')): ?>
                                <style>
                                    #lname{
                                        border: 1px solid #dd191d;
                                    }
                                </style>
                            <?php endif; ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sign-u<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <div class="sign-up1">
                            <h4>Email Address* :</h4>
                        </div>
                        <div class="sign-up2">
                            <input type="email" name="email" value="<?php echo e(old('email')); ?>"/>
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <h6>Login Information</h6>
                    <div class="sign-u<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                        <div class="sign-up1">
                            <h4>Username* :</h4>
                        </div>
                        <div class="sign-up2">
                            <input type="text" name="username" value="<?php echo e(old('username')); ?>"/>
                            <?php if($errors->has('username')): ?>
                                <span class="help-block">
                                                <strong><?php echo e($errors->first('username')); ?></strong>
                                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sign-u<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <div class="sign-up1">
                            <h4>Password* :</h4>
                        </div>
                        <div class="sign-up2">
                            <input type="password" name="password" value="<?php echo e(old('password')); ?>"/>
                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sign-u<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                        <div class="sign-up1">
                            <h4>Confirm Password* :</h4>
                        </div>
                        <div class="sign-up2">
                            <input type="password" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>"/>
                            <?php if($errors->has('password_confirmation')): ?>
                                <span class="help-block">
                                                <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sub_home">
                        <div class="sub_home_left">
                            <input type="submit" name="btn-signup" value="Submit">
                        </div>
                        */ ?><?php /*<div class="sub_home_right">*/ ?><?php /*
                        */ ?><?php /*</div>*/ ?><?php /*
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>*/ ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>