<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs Ecommers</title>
</head>

<body>
    
<?php
            include './app/views/header.php';
            ?>

    <?php
    spl_autoload_register(function ($class) {
        include_once 'system/lib/' . $class . '.php';
    });
    include_once 'app/config/config.php';

    $main = new Main();

    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/',$url);
    include_once('app/controllers/'.$url[0].'php');


    ?>


<?php
            include './app/views/footer.php';
            ?>

</body>

</html>
