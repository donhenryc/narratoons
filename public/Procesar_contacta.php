<?php include '..\src\navbar.php' ?>

<div class="resultado-contacto">
    <style>
        /* Estilos para mostrar mensajes de confirmación o error */
        .resultado-contacto {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
        }
        .msg-conf { /* Mensaje de confirmación */
            background-color: #e8f5e9;
            border: 1px solid #c8e6c9;
            border-radius: 8px;
            text-align: center;
            color: #2e7d32;
            padding: 20px;
        }
        .msg-err { /* Mensaje de error */
            background-color: #ffebee;
            border: 1px solid #ffcdd2;
            border-radius: 8px;
            text-align: center;
            color: #c62828;
            padding: 20px;
        }
    </style>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 1. Recibir y sanitizar los datos del formulario
        $nombre = htmlspecialchars(trim($_POST["nombre"])); // Nombre del remitente
        $email = htmlspecialchars(trim($_POST["email"])); // Email del remitente
        $mensaje = htmlspecialchars(trim($_POST["mensaje"])); // Contenido del mensaje

        // 2. Configuración del correo
        $destinatario = "info@xmlacademy.org"; // Cambia este valor a tu correo
        $asunto = "Nuevo mensaje de contacto de $nombre"; // Asunto del correo
        $contenido = "Has recibido un nuevo mensaje de contacto.\n\n"; // Cuerpo del mensaje
        $contenido .= "Nombre: $nombre\n";
        $contenido .= "Email: $email\n";
        $contenido .= "Mensaje:\n$mensaje\n";

        // 3. Encabezados del correo
        $headers = "From: $email\r\n"; // Configura el remitente
        $headers .= "Reply-To: $email\r\n"; // Configura el email para responder
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n"; // Especifica formato de texto y codificación

        // 4. Enviar el correo
        if (mail($destinatario, $asunto, $contenido, $headers)) {
            // Si el correo se envía correctamente, muestra un mensaje de éxito
            echo "<div class='msg-conf'>";
            echo "<h1>Gracias por tu mensaje, $nombre</h1>";
            echo "<p>Hemos recibido tu mensaje y te responderemos pronto.</p>";
            echo "</div>";
        } else {
            // Si hay un error en el envío, muestra un mensaje de error
            echo "<div class='msg-err'>";
            echo "<p>No se pudo enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.</p>";
            echo "</div>";
        }
    } else {
        // Si el formulario no se envió correctamente, muestra un mensaje de error
        echo "<div class='msg-err'>";
        echo "<p>Hubo un problema con el envío del formulario. Inténtalo de nuevo.</p>";
        echo "</div>";
    }
    ?>
</div>


<?php include '..\src\footer.php' ?>
