<?php

$rota = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

function route($rota)
{
    $path = preg_split("/\//", $rota['path']);

    $opcoes = array('contato', 'empresa', 'home', 'produtos', 'servicos');

    if($path[1]){

        if(in_array($path[1], $opcoes)){

            return "src/".$path[1].".php";

        } else {

            $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');

            header($protocol . ' ' . 404 . ' Pagina nao encontrada');

            return "404.php";

        }
    }

    return "src/home.php";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Site Exemplo</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/css.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container-fluid">

    <div class="row">
        <div class="col-md-2">
            <img src="/img/logo.png" class="logo">
        </div>
        <div class="col-md-10">
            <h1>Site de Exemplo</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?php require_once("src/menu.php"); ?>
        </div>
    </div>

    <?php
    require_once(route($rota));
    ?>

    <div class="row">
        <div class="col-md-12" style="text-align: center;">
            <h6>Todos os direitos reservados - <?php echo date('Y'); ?></h6>
        </div>
    </div>

</div>

</body>
</html>