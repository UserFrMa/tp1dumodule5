<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bob.css">
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    </head>
    <body class="body">
        <div class="container flex">
        <header>
            <div class="flex flexflow1">
                    <?php
                    include_once("menue.php");
                    ?>
            </div>
        </header>
        <main class="t-100">
            <div>
                <?php
                    if (isset($_GET['site'])){
                        switch ($_GET['site']){
                            case 'exo1':
                                include_once("exo/exo1.php");
                                break;
                            case 'exo2':
                                include_once("exo/exo2.php");
                                break;
                            case 'exo3':
                                include_once("exo/exo3.php");
                                break;
                            case 'exo4':
                                 include_once("exo/exo4.php");
                                break;
                            case 'exo5':
                                include_once("exo/exo5.php");
                                break;
                            case 'exo6':
                                include_once("exo/exo6.php");
                                break;
                            case 'exo7':
                                include_once("exo/exo7.php");
                                break;
                            case 'exo8':
                                include_once("exo/exo8.php");
                                break;
                            case 'exo9':
                                include_once("exo/exo9.php");
                                break;
                            case 'exo10':
                                include_once("exo/exo10.php");
                                break;
                            default:
                            echo 'error 404';
                            break;
                        }
                    }
                ?>
            </div>
        </div>
        </main> 
        


        <script src="" async defer></script>
    </body>
</html>