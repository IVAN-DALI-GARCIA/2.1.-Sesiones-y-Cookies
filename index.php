<?php
session_start();
date_default_timezone_set("America/Mexico_City");
$UltimoAcc = date("F j, Y, g:i a");
setcookie("MiCookie", $UltimoAcc,time()+(86400 * 30), "/" );

if (isset($_POST['email'])) {

    $nombre  = $_POST['nombre'];
    $email   = $_POST['email'];
    $date    = $_POST['fecha'];
    $clave   = $_POST['clave'];

    $_SESSION["usuario"] = $email;
    $VarSesion = $_SESSION["usuario"];
} else {
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COCINA FÁCIL</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="IMAGENES/logo_favicon_cocina_facil.png" type="image/x-icon">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="https://i.icomoon.io/public/temp/86e94563f9/UntitledProject/style.css">
    <link rel="stylesheet" href="">
</head>

<body>
    <header>
        <div>
            <div class="caja_logo">
                <img class="logo" src="IMAGENES/logo_favicon_cocina_facil.png" alt="Logo de cocina facil">
            </div>
            <h1> COCINA FACIL</h1>
            <P>Escuela GASTRONIMICA.</P>
        </div>
        <nav>
            <ul class="menu">
                <li>
                    <a href="#"><span class="icon-home">INICIO</span> </a>
                </li>
                <li>
                    <P>BIENVENIDO: <span><?php echo $_SESSION['usuario'] ?></span> </P>
                </li>

            </ul>
            <div class="search_bar">
                <a href="#" class="icon-search"></a>
                <input type="text" id="bar">
            </div>
        </nav>
    </header>
    <Section class="main">
        <section>
            <article>
                <p>
                    <a href="" class="icon-envelop"></a> PERFIL DE USUARIO.
                </p>
            </article>

            <div class="registro">
                <div class="regform2">
                    <h1>TUS DATOS DE REGISTRO SON:</h1>
                </div>
                <div class="main2">
                    <form action="cerrar_sesion.php" method="POST">
                        <h2 class="name">TU NOMBRE ES:</h2>
                        <P class="email">
                            <?php echo $nombre ?>
                        </P>

                        <h2 class="name">TU Email ES:</h2>
                        <P class="email">
                            <?php echo $_SESSION['usuario'] ?>
                        </P>

                        <h2 class="name">TU FECHA DE NACIM. ES:</h2>
                        <P class="email">
                            <?php echo $date ?>
                        </P>

                        <h2 class="name">TU PASSWORD ES:</h2>
                        <P class="email">
                            <?php echo $clave ?>
                        </P>
                        <h2 class="name">ULTIMO ACCESO:</h2>
                        <P class="email">
                            <?php if (!isset($_COOKIE['MiCookie'])) {
                                echo "No se ha encontrado Cookie";
                            } else
                            echo $_COOKIE['MiCookie'];  ?>
                        </P>

                        <button type="submit" name="submit">SALIR DE SESION</button>

                    </form>
                </div>
            </div>

        </section>


        <aside>

        </aside>

    </Section>
    <footer>
        <div class="piePagina">
            <h3>
                SISTEMA DE UNIVERSIDAD VIRTUAL
            </h3>
            <p>
                Av. La Paz No. 2453, Col. Arcos Sur, C.P. 44130 Tel: +52 33 3268 8888‏ ext. 18801
            </p>
            <p>
                IVAN DALI GARCIA TORRES IVANDALIGARCIA@GMAIL.COM LICENCIATURA EN DESARROLLO DE SISTEMAS WEB

            </p>
            <p>
                Av. Enrique Díaz de León No. 782, Col. Moderna, C.P. 44190 Tel: +52 33 3268 8888‏ ext. 18802.

            </p>
            <h3>
                Guadalajara, Jalisco, México.
            </h3>
            <p>
                Centro de Atención Personalizada Tel: ‎+52 33 3268‎ 8888, opción 1 Llamadas sin costo nacional Tel: 800 5819111 Llamadas sin costo desde Estados Unidos Tel: +1877 4490230 WhatsApp: +52-33-32688880

            </p>

        </div>
    </footer>


</body>

</html>