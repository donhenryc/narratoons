<?php include '..\src\navbar.php' ?>
<div class="resultado-contacto">
    <style>
        /* Contenedor principal del mensaje */
        .resultado-contacto {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
        }

        /* Estilo para el mensaje de confirmación */
        .msg-conf {
            background-color: #e8f5e9;
            border: 1px solid #c8e6c9;
            border-radius: 8px;
            text-align: center;
            color: #2e7d32;
            padding: 20px;
        }

        /* Estilo para el mensaje de error */
        .msg-err {
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
        // Recibimos y sanitizamos los datos
        $nombre = htmlspecialchars(trim($_POST["nombre"]));
        $email = htmlspecialchars(trim($_POST["email"]));
        $mensaje = htmlspecialchars(trim($_POST["mensaje"]));

        // Mostramos el mensaje de confirmación
        echo "<div class='msg-conf'>";
        echo "<h1>Gracias por tu mensaje, $nombre</h1>";
        echo "<p>Hemos recibido tu mensaje y te responderemos pronto.</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Mensaje:</strong> $mensaje</p>";
        echo "</div>";
    } else {
        // Mostramos el mensaje de error
        echo "<div class='msg-err'>";
        echo "<p>Hubo un problema con el envío del formulario. Inténtalo de nuevo.</p>";
        echo "</div>";
    }
    ?>
</div>

<?php include '..\src\footer.php' ?>
