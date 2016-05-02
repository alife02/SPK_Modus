<?php $__env->startSection('content'); ?>
    <div id="page-wrapper">
        <?php echo $__env->make('admin.contents.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script>
        $('.dashboard').click(function(){
            var element = $(this);
            $.ajax({
                url: '<?php echo e(url('admin/contents/dashboard')); ?>',
                success: function (results) {
                    $('.nav > li').removeClass('active');
                    element.parent().addClass('active');
                    $('#page-wrapper').html(results);
                }
            });
        });
        $('.employees').click(function(){
            var element = $(this);
            $.ajax({
                url: '<?php echo e(url('admin/contents/employees')); ?>',
                success: function (results) {
                    $('.nav > li').removeClass('active');
                    element.parent().addClass('active');
                    $('#page-wrapper').html(results);
                }
            });
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>