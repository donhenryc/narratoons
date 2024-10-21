<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de cómic</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
        }
        .options {
            margin-top: 20px;
            text-align: left;
        }
        .options button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 18px;
            cursor: pointer;
            border: 2px solid #ccc;
            background-color: #f4f4f4;
            border-radius: 5px;
            transition: background-color 0.3s, border 0.3s;
        }
        .options button:hover {
            background-color: #ddd;
            border-color: #999;
        }
        .cost {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
    <script>
        function submitForm(option) {
            // Crear un formulario oculto y enviar el valor del botón clicado
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = 'Ejercicio44_procesarformulario.php';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'envio';
            input.value = option;

            form.appendChild(input);
            document.body.appendChild(form);
            form.submit();
        }

        function updateCost(option) {
            const costDisplay = document.getElementById('cost');

            if (option === 'digital') {
                costDisplay.textContent = "Coste: $5.00";
            } else if (option === 'impreso') {
                costDisplay.textContent = "Coste: $20.00";
            }
        }
    </script>
</head>
<body>

    <div class="container">
        <p class="title">¡Tu cómic está listo!</p>
        <div class="options">
            <button type="button" onclick="submitForm('digital'); updateCost('digital');">
                En formato digital, a través de correo electrónico.
            </button>
            <button type="button" onclick="submitForm('impreso'); updateCost('impreso');">
                Impreso, con pasta dura y papel de 100 g.
            </button>
        </div>
        <p class="cost" id="cost"></p>
    </div>

</body>
</html>
