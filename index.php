<?php include("includes/config.php"); ?><?php

session_start();

$db_host    = "mysql.agentex.net.br";
$db_user    = "agentex_add1";
$db_pass    = "develop123";
$db_table   = "agentex";

$conn = @mysql_connect($db_host, $db_user, $db_pass) or die ("MySQL Error: " . mysql_error());
$db = @mysql_select_db($db_table, $conn) or die ("MySQL Error: " . mysql_error());

//Ajusta para os posts terem acentuação
mysql_query("SET CHARACTER SET utf8");

ob_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <title><?php echo $title; ?></title>

        <meta name="description" content="<?php echo $description; ?>">
        <link rel="icon" href="<?php echo $pageurl; ?>/images/favicon.png?<?php echo rand(0, 9999); ?>" />
        <meta name="keywords" content="<?php echo  $keywords; ?>">
        <meta property="og:title" content="<?php echo $title; ?>">
        <meta property="og:description" content="<?php echo $description; ?>">

        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://copapel.com.br/assets/css/jquery.mmenu.all.css" />
        <link rel="stylesheet" href="<?php echo $pageurl; ?>/styles/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://copapel.com.br/assets/js/jquery.mmenu.all.min.js"></script>
    </head>

    <body>
        <div>
            <?php include("includes/header.php"); ?>
        
            <?php
                if($page != NULL){
                    include('includes/'.$page.'.php');
                }
            ?>

            <?php include("includes/footer.php"); ?>
        </div>

        <nav id="menu">
            <ul>
                <li><a href="<?php echo $pageurl; ?>/empresa">Empresa</a></li>
                <li><a href="<?php echo $pageurl; ?>/servicos">Serviços</a></li>
                <li><a href="<?php echo $pageurl; ?>/clientes">Clientes</a></li>
                <li><a href="<?php echo $pageurl; ?>/portifolio">Portifólio</a></li>
                <li><a href="<?php echo $pageurl; ?>/contato">Contato</a></li>
            </ul>
        </nav>

        <!-- Fire the plugin onDocumentReady -->
        <script type="text/javascript">
        jQuery(document).ready(function( $ ) {
            $("#menu").mmenu({
            "offCanvas": {
                "position": "right"
            },
            "extensions": [
                "theme-dark",
                "fx-menu-zoom",
                "pagedim-black",
                "fx-listitems-slide"
            ]
            });
        });
        </script>

        <style>
            /* Color of invalid field */
            .has-error input, .has-error textarea { box-shadow: none !important; }
            input:focus, textarea:focus, select:focus { box-shadow: none !important; outline: none !important; }
            .menu-mobile { display: inline-block; font-size: 30px; color: #537473; margin-top: 40px; display: none; }
            .mm-menu.mm-theme-dark { background: #537473 !important; box-shadow: 5px 0 35px rgba(0,0,0,0.3);}

            /* Dots do slick */
            .slick-dots { position: absolute; bottom: -45px; list-style: none; display: block; text-align: center; padding: 0px; width: 100%; margin-top: -30px !important; }
            .slick-dots li { position: relative; display: inline-block; height: 20px; width: 20px; margin: 0px 5px; padding: 0px; cursor: pointer; margin-top: -30px !important; }
            .slick-dots li button { border: 0; background: transparent; display: block; height: 20px; width: 20px; outline: none; line-height: 0; font-size: 0; color: transparent; padding: 5px; cursor: pointer; outline: none; margin-top: -30px !important; }
            .slick-dots li button:focus { outline: none; margin-top: -30px !important; }
            .slick-dots li button:before { position: absolute; top: 0; left: 0; content: '\2022'; width: 20px; height: 20px; font-family: "slick"; font-size: 6px; line-height: 20px; text-align: center; color: black; opacity: 0.25; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; margin-top: -30px !important; }
            .slick-dots li.slick-active button:before { opacity: 0.75; margin-top: -30px !important; }
        </style>
    </body>    
</html>




           