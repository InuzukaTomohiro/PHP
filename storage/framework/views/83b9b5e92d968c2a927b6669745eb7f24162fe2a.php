

<!DOCTYPE html>
<html lang='ja'>
  <head>
    <meta charset="utf-8">
    <title>My BBS</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
        <h1>MY BBS</h1>
        <ul>
            
            <li><?php echo e($posts[0]); ?></li>
            <li><?php echo e($posts[1]); ?></li>
            <li><?php echo e($posts[2]); ?></li>
        </ul>
    </div>
  </body>
<?php /**PATH /var/www/html/resources/views/index.blade.php ENDPATH**/ ?>