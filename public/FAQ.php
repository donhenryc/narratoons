<?php include '..\src\navbar.php' ?>

<section class="faqsection">
    <div class= texto-titulo>
  <h1>Preguntas Frecuentes (FAQ)</h1>
  </div>
  <div class="faq-section">
    
    <div class="faq">
      <h3>¿Qué es un libro de cómic creado con IA?</h3>
      <p>Es un cómic personalizado en el que tanto los personajes, los escenarios, como las historias se generan mediante inteligencia artificial (IA). Los usuarios pueden elegir temas, géneros, estilos artísticos y la IA crea las ilustraciones y los textos según las preferencias indicadas.</p>
    </div>
    
    <div class="faq">
      <h3>¿Puedo personalizar el contenido de mi cómic?</h3>
      <p>¡Sí! Nuestra plataforma permite que elijas el género (fantasía, ciencia ficción, aventura, etc.), el estilo visual (retro, moderno, caricaturesco, etc.) y hasta personalizar ciertos detalles de los personajes y escenarios.</p>
    </div>
    
    <div class="faq">
      <h3>¿Cómo funciona la generación de personajes y escenarios?</h3>
      <p>Usamos inteligencia artificial avanzada que crea personajes y escenarios basándose en descripciones y elecciones proporcionadas por el usuario. Puedes especificar rasgos físicos de los personajes, emociones, y tipos de entorno, y la IA se encarga de generar el arte a partir de esta información.</p>
    </div>
    
    <div class="faq">
      <h3>¿Qué tan largo puede ser mi cómic?</h3>
      <p>Ofrecemos opciones para cómics cortos, medianos y extensos. Los cómics cortos pueden tener entre 10-20 páginas, mientras que los extensos pueden llegar hasta 50 páginas o más, según la complejidad de la historia y la cantidad de detalles.</p>
    </div>
    
    <div class="faq">
      <h3>¿La historia también es generada por IA?</h3>
      <p>Sí, la IA puede crear tramas basadas en los géneros y temas seleccionados, con diálogos y desarrollo de la historia. Sin embargo, si prefieres, puedes aportar ideas o lineamientos para que la historia tenga un enfoque específico.</p>
    </div>
    
    <div class="faq">
      <h3>¿Es posible modificar las ilustraciones una vez generadas?</h3>
      <p>En algunos casos, ofrecemos revisiones básicas para ajustar detalles importantes. Sin embargo, las modificaciones mayores, como cambiar personajes o escenarios completos, pueden tener un costo adicional.</p>
    </div>
    
    <div class="faq">
      <h3>¿Cuánto tiempo toma crear un cómic con IA?</h3>
      <p>El tiempo de creación depende de la longitud y la complejidad del proyecto. Generalmente, un cómic corto puede estar listo en unos pocos días, mientras que uno extenso podría tomar una o dos semanas.</p>
    </div>
    
    <div class="faq">
      <h3>¿El cómic será completamente original?</h3>
      <p>Sí, los cómics generados por IA son únicos y originales. Cada uno se basa en la información proporcionada y en los modelos de generación de IA, por lo que no se replica ningún otro trabajo.</p>
    </div>
    
    <div class="faq">
      <h3>¿Puedo imprimir mi cómic?</h3>
      <p>¡Claro! Una vez que el cómic esté terminado, puedes descargarlo en alta resolución para imprimirlo. Ofrecemos formatos compatibles con servicios de impresión para asegurar que tu cómic luzca genial en papel.</p>
    </div>
    
    <div class="faq">
      <h3>¿Cómo se asegura la privacidad de mis datos?</h3>
      <p>Nos tomamos la privacidad en serio. Cualquier información que proporciones se utiliza únicamente para la creación de tu cómic y no se comparte con terceros. Puedes consultar nuestra Política de Privacidad para más detalles.</p>
    </div>
    
    <div class="faq">
      <h3>¿Qué métodos de pago aceptan?</h3>
      <p>Aceptamos pagos con tarjeta de crédito, débito, PayPal, y en algunos casos, transferencias bancarias. Todos los pagos son procesados de manera segura.</p>
    </div>
    
    <div class="faq">
      <h3>¿Puedo obtener una muestra antes de hacer el pago completo?</h3>
      <p>Ofrecemos una vista previa gratuita de una o dos páginas para que puedas ver cómo se verá el estilo y diseño de tu cómic antes de completar el pago.</p>
    </div>

  </div>
</section>

<?php include '..\src\footer.php' ?>

<script>
  document.querySelectorAll('.faq').forEach(item => {
    item.addEventListener('click', () => {
      const content = item.querySelector('p');
      content.style.display = content.style.display === 'block' ? 'none' : 'block';
    });
  });
</script>


