<?php include("includes/config.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <title><?php echo $title; ?></title>

        <meta name="description" content="<?php echo $description; ?>">
        <meta name="keywords" content="<?php echo  $keywords; ?>">
        <meta property="og:title" content="<?php echo $title; ?>">
        <meta property="og:description" content="<?php echo $description; ?>">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $pageurl; ?>/styles/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php include("includes/header.php"); ?>
    
        <?php
            if($page != NULL){
                include('includes/'.$page.'.php');
            }
        ?>

        <?php include("includes/footer.php"); ?>
    
    </body>    
</html>




           