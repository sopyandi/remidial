<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title><?php echo e($title); ?></title>
    </head>
    <body>
            <?php echo $__env->make('partial/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('container'); ?>
        </div>
    </body>
    </html>
<style>
    b{
        color: red;
    }
</style>
<?php /**PATH C:\Users\Lenovo\Desktop\remedial_0051044626\resources\views/layouts/main.blade.php ENDPATH**/ ?>