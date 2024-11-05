<?php include '..\src\navbar.php' ?>
  <section class="fondo-emociones">
  <div class="texto-titulo gap-5" >
  <h1>Selecciona una emoción para tu cuento</h1>
  </div>  
  
    <div class="container-scroll">
        <div class="scroll-container">
          <div class="emotion">Alegría</div>
          <div class="emotion">Tristeza</div>
          <div class="emotion">Amor</div>
          <div class="emotion">Miedo</div>
          <div class="emotion">Ira</div>
          <div class="emotion">Sorpresa</div>
          <div class="emotion">Melancolía</div>
          <div class="emotion">Esperanza</div>
        </div>
          <div class="img-emociones">
            <img src="img\img_emociones.png" alt="Emociones" id="img_emociones">
          </div>
    </div>

    <div class="div-btn-back-emociones">
      <button type="submit" class="btn-general" onclick="window.location.href='personajes.php'; nextSection(index, personajes)">
        <svg class ="svg-back" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>Atras          
       </button>
         </div>

         <div class="div-btn-continuar-emociones">
          <button type="submit" class="btn-general" onclick="window.location.href='personal.php'; nextSection(index, personajes)">Continuar
                <svg class="svg-next" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
           </button>
           </div>
  </section>
<?php include '..\src\footer.php' ?>