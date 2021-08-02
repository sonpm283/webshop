<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping cart</title>
</head>
<body>
    <div>
        <?php
        include_once ('system/libs/Main.php');
        include_once ('system/libs/DController.php');
        include_once ('system/libs/Database.php');
        include_once ('system/libs/DModel.php');
        include_once ('system/libs/Load.php');

        $url = isset($_GET['url']) ? $_GET['url'] : NULL;
        if($url!=NULL) {
            $url = rtrim($url,'/');
//            fillter_var -> validate $url phai la 1 duong dan
            $url = explode('/', filter_var($url,FILTER_SANITIZE_URL));
        }else {
            unset($url);
        }
        if(isset($url[0])) {
            include_once ('app/controllers/'.$url[0].'.php');
            $product = new product();
            $product->index();
            $ctrler = new $url[0]();
            if(isset($url[2])) {
                $ctrler -> {$url[1]}($url[2]);
            }else {
                if (isset($url[1])) {
                    $ctrler-> {$url[1]}();
                }
            }
        }else {
           include_once ('app/controllers/index.php');
           $home = new index();
           $home->home();
        }
        ?>
    </div>
</body>
</html>