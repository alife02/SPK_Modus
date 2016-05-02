<?php $__env->startSection('content'); ?>
    <div id="page-wrapper">
        <div class="graphs">
            <h3 class="blank1">Edit Akun</h3>
            <div class="panel-body1">
                <form role="form" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-8">
                            <div class="input-group in-grp1">
						<span class="input-group-addon">
							<i class="fa fa-edit"></i>
						</span>
                                <input type="text" class="form-control1" placeholder="Email Address">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>