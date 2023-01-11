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
        <center>
            <div class="box">
            <h1 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">UJIKOM</h1>
            <hr>
            <?php echo $__env->yieldContent('container'); ?>
            <br><hr>
            <?php echo $__env->make('partial/link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <br>
        </div>
    </center>
    </body>
    </html><?php /**PATH C:\Users\Username\Desktop\ujikom\resources\views/layouts/main.blade.php ENDPATH**/ ?>