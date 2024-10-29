<?php include '..\src\navbar.php' ?>
<section id = estilo-cuerpo>
  <img src="img/left.webp" alt="Imagen estilo cómic" class="top-left-image"> </body>
    <div class="container" id="trama-cont">
        <div class="title" id="titulo">Trama o Escenario</div>
        <div class="box" id="escenario">
            <textarea id="texto-escenario" placeholder="Un mundo donde las ciudades flotan sobre un océano interminable. Los habitantes de estas ciudades están divididos en aquellos que habitan la superficie y los que viven bajo el agua, en ciudades submarinas. La protagonista, Sofía, es una exploradora de las profundidades que se embarca en una misión para descubrir el secreto de las misteriosas desapariciones de barcos que cruzan la línea entre los dos mundos.
            " rows="8" cols="80"></textarea>
        </div>
        <div class="div-btn-back">
            <button type="submit" class="btn-back">
              <svg class ="svg-back" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>Atras          
             </button>
               </div>
      
               <div class="div-btn-next">
                <button type="submit" class="btn-next">Continuar
                      <svg class="svg-next" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                 </button>
                 </div> 
    </div>
</section>
<?php include '..\src\footer.php' ?>
