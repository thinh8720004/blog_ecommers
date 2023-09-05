<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs Ecommers</title>
</head>

<body>

    <h1>
        <?php
        include_once('system/lib/Main.php');
        include_once('system/lib/Dcontrollers.php');
        include_once('system/lib/Load.php');
        include_once('system/lib/Dmodels.php');
        include_once('system/lib/Database.php');

        //$main = new Main();

        $url = isset($_GET['url']) ? $_GET['url'] : NULL;
        if ($url != NULL) {
            $url = rtrim($url, '/');
            $url = explode('/', filter_var($url, FILTER_SANITIZE_URL));
        } else {
            unset($url);
        }

        if (isset($url[0])) {
            include_once('app/controllers/' . $url[0] . '.php');
            $strler = new $url[0]();
            if (isset($url[2])) {
                $strler->{$url[2]};
            } else {
                if (isset($url[1])) {
                    $strler->{$url[1]}();
                } else {
                }
            }
        } else {
            include_once('app/controllers/index.php');
            $index = new index();
            $index->homepage();
        }

        ?>
    </h1>

</body>

</html>