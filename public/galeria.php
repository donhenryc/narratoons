<?php include '..\src\navbar.php' ?>
<section class="galeria-section">
<div class="texto-titulo"> 
<h1>Galería de Resultados Finales</h1>
</div>
  <!-- Sección de la Galería -->
  <h2 class="sub-titulo">Descubre algunos cómics creados por nuestros clientes</h2>
  <div class="gallery-section">

    <div class="gallery1">
      <!-- Cada imagen se puede clicar para abrir el lightbox -->
      <div class="gallery-item">
        <img src="img\Comic1.webp" alt="Comic Ejemplo 1" onclick="openLightbox('img/Comic1.webp')">
      </div>
      <div class="gallery-item">
        <img src="img\Comic2.webp" alt="Comic Ejemplo 2" onclick="openLightbox('img/Comic2.webp')">
      </div>
      <div class="gallery-item">
        <img src="img\Comic3.webp" alt="Comic Ejemplo 3" onclick="openLightbox('img/Comic3.webp')">
      </div>
    </div>

    <div class="gallery2">
      <div class="gallery-item">
        <img src="img\Comic4.webp" alt="Comic Ejemplo 4" onclick="openLightbox('img/Comic4.webp')">
      </div>
      <div class="gallery-item">
        <img src="img\Comic5.webp" alt="Comic Ejemplo 5" onclick="openLightbox('img/Comic5.webp')">
      </div>
      <div class="gallery-item">
        <img src="img\Comic6.webp" alt="Comic Ejemplo 6" onclick="openLightbox('img/Comic6.webp')">
      </div>
  </div>
  </div>

<!-- Modal lightbox para ver imagen ampliada -->
<div id="lightboxOverlay" class="lightbox-overlay" onclick="closeLightbox()">
  <div class="lightbox-content" onclick="event.stopPropagation()">
    <button class="close-button" onclick="closeLightbox()">×</button>
    <img id="lightboxImage" src="" alt="Imagen Ampliada">
  </div>
</div>
  
</section>

<script>
  // Función para abrir el lightbox y mostrar la imagen ampliada
  function openLightbox(src) {
    const lightboxOverlay = document.getElementById('lightboxOverlay');
    const lightboxImage = document.getElementById('lightboxImage');
    lightboxImage.src = src;
    lightboxOverlay.style.display = 'flex';
  }

  // Función para cerrar el lightbox
  function closeLightbox() {
    const lightboxOverlay = document.getElementById('lightboxOverlay');
    lightboxOverlay.style.display = 'none';
  }
</script>
<?php include '..\src\footer.php' ?>
