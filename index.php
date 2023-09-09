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
//   spl_autoload_register(function ($class) {
//         include_once 'system/lib/' . $class . '.php';
//     });
//     $url = isset($_GET['url']) ? $_GET['url'] : NULL;
//     if($url !=NULL){
//         $url = rtrim($url, '/');
//         $url = explode('/', filter_var($url, FILTER_SANITIZE_URL));
//     }else {
//         unset($url);
//     }

//     if(isset($url[0])){
//         include 'app/controllers/'.$url.'php';
//         $ctlr = new $url[0]();
//         if(isset($url[2])){
//            $ctlr->{$url[1]}($url[2]);
//         }else {
//             if(isset($url[1])){
//            $ctlr->{$url[1]}();
//             }else{}
//         }
//     }else {
//         include 'app/controllers/indx.php';
//         $index = new index();
//         $index->homepage();
//     }


?>
<?php
            include './app/views/header.php';
    //         ?>

    <?php
    spl_autoload_register(function ($class) {
        include_once 'system/lib/' . $class . '.php';
    });
    $url = isset($_GET['url']) ? $_GET['url'] : NULL;
//     if($url !=NULL){
//         $url = rtrim($url, '/');
//         $url = explode('/', filter_var($url, FILTER_SANITIZE_URL));
//     }else {
//         unset($url);
//     }

//     if(isset($url[0])){
//         include 'app/controllers/'.$url.'php';
//         $ctlr = new $url[0]();
//         if(isset($url[2])){
//            $ctlr->{$url[1]}($url[2]);
//         }else {
//             if(isset($url[1])){
//            $ctlr->{$url[1]}();
//             }else{}
//         }
//     }else {
//         include 'app/controllers/indx.php';
//         $index = new index();
//         $index->homepage();
//     }
    include_once 'app/config/config.php';

    $main = new Main();

    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/',$url);
    include_once('app/controllers/'.$url[0].'php');


    ?>


<?php
            include './app/views/footer.php';
            // ?>

</body>

</html>
