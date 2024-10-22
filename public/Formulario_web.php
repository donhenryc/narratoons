<?php include '..\src\navbar.php' ?>
    <script>
        function submitForm(option) {
            // Crear un formulario oculto y enviar el valor del botón clicado
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = 'procesar_formulario.php';

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
<section class= "cuerpo-pago">

    <div class="container formulario-pago" >
        <p class="titulo-pago">¡Tu cómic está listo!</p>
        <div class="opciones-formulario">
            <button type="boton-pago" onclick="submitForm('digital'); updateCost('digital');">
                En formato digital, a través de correo electrónico.
            </button>
            <button type="boton-pago" onclick="submitForm('impreso'); updateCost('impreso');">
                Impreso, con pasta dura y papel de 100 g.
            </button>
        </div>
        <p class="coste-pago" id="coste-pago"></p>
    </div>

</section>
<?php include '..\src\footer.php' ?>
