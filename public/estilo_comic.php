<?php include '..\src\navbar.php' ?>
  <section class="fondo-comic">
  <div class="texto-titulo-comic gap-5" >
  <h1>Selecciona un estilo para tu comic</h1>
  </div>  
  
    <div class="container-scroll">
        <div class="scroll-container">
          <div class="estilo-comic">Vintage: Cómics clásicos de los 60.</div>
          <div class="estilo-comic">Ciberpunk: Atmósfera futurista.</div>
          <div class="estilo-comic">Minimalista: Líneas y formas simples.</div>
          <div class="estilo-comic">Pixel Art: Usa gráficos en píxeles, apariencia retro.</div>
          <div class="estilo-comic">Western: Inspirado en los cómics de vaqueros.</div>
          <div class="estilo-comic">Fantasy Art: Inspirado en arte fantástico</div>
          <div class="estilo-comic">Pop Noir: Blanco y negro.</div>
          <div class="estilo-comic">Graffiti: Inspirado en el arte urbano.</div>
        </div>
          <div class="img-comic">
            <img src="img\img_comic.webp" alt="comic" id="img_comic">
          </div>
    </div>

    <div class="div-btn-back">
      <button type="submit" class="btn-general">
        <svg class ="svg-back" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>Atras          
       </button>
         </div>

         <div class="div-btn-next">
          <button type="submit" class="btn-general">Continuar
                <svg class="svg-next" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
           </button>
           </div>
  </section>
<?php include '..\src\footer.php' ?>