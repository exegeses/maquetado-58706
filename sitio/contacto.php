<?php
    /* capturamos datos enviados por el form */
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];

    /* configuramos datos de email a enviar */
    $destinatario = 'goku@drop.com';
    $asunto = 'Email enviado desde mi sitio';
    $cuerpo = '<div style="width: 500px; font-family: sans-serif; ';
    $cuerpo .= 'border-radius: 16px; background-color: #82fae4; ';
    $cuerpo .= 'color: #152830; font-size: 18px; padding: 24px">';
    $cuerpo .= 'Nombre: <b>'.$nombre.'</b><br>';
    $cuerpo .= 'Email: <b>'.$email.'</b><br>';
    $cuerpo .= 'Consulta: <b>'.$consulta.'</b>';
    $cuerpo .= '</div>';

    ## encabezados adicionales
    $headers = 'From: consultas@empresa.com' . "\r\n";
    $headers .= 'Reply-To: '.$email."\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    mail( $destinatario, $asunto, $cuerpo, $headers );
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Morningstar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="top">
    <!-- fondo con gradiente -->
        <header>
            <!-- logo + empresa -->
            <a href="index.html">
                <img src="imgs/m-iso.png">
                Morningstar
            </a>
            <!-- barra de navegación -->
            <nav>
                <a href="index.html">Inicio</a>
                <a href="features.html">Features</a>
                <a href="contratar.html">Contratar</a>
                <a href="nosotros.html">Nosotros</a>
                <a href="contacto.html">Contacto</a>
            </nav>

        </header>

    <!-- fin fondo con gradiente -->
    </div>

    <main id="contacto">
        <!-- contenido -->
        <section>
            Gracias <?= $nombre ?> por contactarmos.
        </section>


    </main>
    <div id="bottom">
        <footer>
            <!-- logo + empresa -->
            <a href="index.html">
                <img src="imgs/m-iso.png">
                Morningstar
            </a>
            <!-- links a redes sociales -->
            <div id="redes">
                <a href="#">
                    <img src="imgs/twitter-w.png">
                </a>
                <a href="#">
                    <img src="imgs/linkedin-w.png">
                </a>
                <a href="#">
                    <img src="imgs/instagram-w.png">
                </a>
                <a href="#">
                    <img src="imgs/facebook-w.png">
                </a>
            </div>
        </footer>
    </div>
</body>
</html>