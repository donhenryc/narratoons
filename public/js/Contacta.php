
    <style>
        /* Contenedor principal del formulario de contacto */
.formulario-contacto-contenedor {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Estilo para cada campo del formulario */
.formulario-campo {
    margin-bottom: 15px;
}

/* Etiquetas de los campos del formulario */
.formulario-etiqueta {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

/* Campos de entrada de texto y correo */
.formulario-entrada, .formulario-area-mensaje {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
}

/* Botón de envío del formulario */
.boton-enviar-formulario {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 1rem;
    font-weight: bold;
}

/* Efecto hover para el botón */
.boton-enviar-formulario:hover {
    background-color: #45a049;
}

/* Adaptación para pantallas pequeñas */
@media (max-width: 600px) {
    .formulario-contacto-contenedor {
        padding: 15px;
        border: none;
        box-shadow: none;
    }

    .boton-enviar-formulario {
        padding: 10px;
    }
}

    </style>
<?php include 'header.php'; ?>

<div class="formulario-contacto-contenedor">
    <h1>Contacto</h1>
    <form action="procesar_formulario.php" method="post">
        <div class="formulario-campo">
            <label for="nombre" class="formulario-etiqueta">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="formulario-entrada" required>
        </div>

        <div class="formulario-campo">
            <label for="email" class="formulario-etiqueta">Correo Electrónico:</label>
            <input type="email" id="email" name="email" class="formulario-entrada" required>
        </div>

        <div class="formulario-campo">
            <label for="mensaje" class="formulario-etiqueta">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" class="formulario-area-mensaje" rows="4" required></textarea>
        </div>

        <button type="submit" class="boton-enviar-formulario">Enviar</button>
    </form>
</div>

<?php include 'footer.php'; ?>
