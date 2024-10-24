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
                costDisplay.textContent = "Coste: $25.00";
            } else if (option === 'impreso') {
                costDisplay.textContent = "Coste: $75.00";
            }
        }
    </script>
<section class="fondo-pago"> 
  <div class="titulo-pago">
    <h1 class="texto-pago">Tu comic esta listo</h1>
</div> 
<section class= "cuerpo-pago gap-4" >
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..\public/img/Pago-Digital.png" alt="Card image cap">
  <div class="card-body py-1">
    <h5 class="card-title fw-bolder text-center">Formato digital</h5>
    <p>Lo recibiras de inmediato a través de correo electrónico.</p>
    <button class="boton-pago" onclick="submitForm('digital'); updateCost('digital');">
    Seleccionar
    </button>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..\public\img\Pago-Impreso.png" alt="Card image cap">
  <div class="card-body py-1">
    <h5 class="card-title fw-bolder text-center">Comic pasta dura</h5>
    <p> Formato comic con diseño de pasta dura y portada de carton reciclado.</p>
    <button class="boton-pago" onclick="submitForm('impreso'); updateCost('impreso');">
                Seleccionar
    </button>
  </div>
</div>
</section>

   <!--  <div class="formulario-pago">
    <div class="opciones-formulario">
        <img id= "img-pago" src="..\public/img/Pago-Digital.png">
        <img id= "img-pago" src="..\public\img\Pago-Impreso.png">
    </div>
    <div class="opciones-formulario">
    <button class="boton-pago" onclick="submitForm('digital'); updateCost('digital');">
    En formato digital, a través de correo electrónico.
    </button>
    <button class="boton-pago" onclick="submitForm('impreso'); updateCost('impreso');">
                Impreso, con pasta dura y papel de 100 g.
    </button>
    </div>
</div>

        <p class="coste-pago" id="coste-pago"></p>
    </div>
 -->
</section>
<?php include '..\src\footer.php' ?>
