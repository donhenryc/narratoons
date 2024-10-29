<?php include '..\src\navbar.php' ?>

<div class="contacto-cont">
    <style>
        /* Contenedor principal del formulario de contacto */
        .contacto-cont {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Estilo para cada campo del formulario */
        .form-campo {
            margin-bottom: 15px;
        }

        /* Etiquetas de los campos del formulario */
        .form-etq {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        /* Campos de entrada de texto y correo */
        .form-input, .form-area {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        /* Botón de envío del formulario */
        .btn-enviar {
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
        .btn-enviar:hover {
            background-color: #45a049;
        }

        /* Adaptación para pantallas pequeñas */
        @media (max-width: 600px) {
            .contacto-cont {
                padding: 15px;
                border: none;
                box-shadow: none;
            }

            .btn-enviar {
                padding: 10px;
            }
        }
    </style>

    <h1>Contacto</h1>
    <form action="Procesar_contacta.php" method="post">
        <div class="form-campo">
            <label for="nombre" class="form-etq">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-input" required>
        </div>

        <div class="form-campo">
            <label for="email" class="form-etq">Correo Electrónico:</label>
            <input type="email" id="email" name="email" class="form-input" required>
        </div>

        <div class="form-campo">
            <label for="mensaje" class="form-etq">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" class="form-area" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn-enviar">Enviar</button>
    </form>
</div>


<?php include '..\src\footer.php' ?>
