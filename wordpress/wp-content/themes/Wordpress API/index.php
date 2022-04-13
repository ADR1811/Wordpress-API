<!-- enctype="multipart/form-data" -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php header('Content-Type: application/json'); ?>
</head>

<body>
    <!-- on affiche un json de tous les articles -->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            
        <?php endwhile; ?>
    <?php endif; ?>
</body>
</html>