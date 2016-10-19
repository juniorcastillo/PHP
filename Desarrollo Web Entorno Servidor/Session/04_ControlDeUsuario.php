<?php
session_start();
$_SESSION['accesopermitido'] = false;
if (!isset($_SESSION['contadoracceso'])) {

    $_SESSION['pas'] = 1234;
    $_SESSION['contadoracceso'] = 0;
    $_SESSION['user'] = "usuario";
    $_SESSION['mal'] = false;
}
?>

<!DOCTYPE html>
<!--
Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los
programas de la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión
con un nombre de usuario y contraseña correctos.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>

            *{
                margin: 0xp;
                padding: 0px;
            }
            body{
                background-color: aqua;
            }
            div{
                background-color:#ccccff; 
                width: 450px;
                border:1px aqua solid;
                margin-left: 32%;
                margin-top: 10%;
                text-align: center;  

            }



        </style>
        <?php
        if (isset($_REQUEST['clave'])) {
            $_SESSION['contadoracceso'] += 1;
            $claveintro = $_REQUEST['clave'];
            $usuariointro = $_REQUEST['usuario'];

            if ($claveintro == $_SESSION['pas'] && ($usuariointro == $_SESSION['user'])) {



                $_SESSION['accesopermitido'] = true;
                $_SESSION['mal'] == false;
                if ($_SESSION['pagina1'] == true) {
                    echo '<script type="text/javascript">
                                alert("Has iniciado sesion correctamente");
                                window.location="01_mediaNumeros.php";
                            </script>';
                }else if($_SESSION['pagina2']==true){
                    
                     echo '<script type="text/javascript">
                                alert("Has iniciado sesion correctamente");
                                window.location="02_MediaImpares_MayorPares.php";
                            </script>';
                }
            }
            if (!$_SESSION['mal'] == false) {
                echo '<h1>Contraseña incorrecta</h1>';
            }

            if (isset($_REQUEST['cerrar'])) {


                session_destroy();
                header("refresh: 0;"); // refresca la página
            }
        }
        ?>
    </head>
    <body>
        <?php
        if ($_SESSION['accesopermitido'] == false) {
            ?>
            <div>
                <h1>Iniciar sesion</h1>
                <form action="#" method="GET">

                    <input type="text" name="usuario" placeholder="Usuario" autofocus required><br> 
                    <input type="password" name="clave" placeholder="Clave" required><br>   
                    <input type="submit" value="Aceptar">

                </form>   
    <?php
}
?>
            <br><form action="#" method="GET">  

                <button name="cerrar" > close session</button>     

            </form>
        </div>
    </body>
</html>
