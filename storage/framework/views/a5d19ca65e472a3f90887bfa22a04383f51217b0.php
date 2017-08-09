<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Belajar CRUD</title>
        		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
        <body>

            <?php echo $__env->make('include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /.navbar-collapse -->
            <!-- Page Heading -->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- /.row --> 
        </body>
</html>