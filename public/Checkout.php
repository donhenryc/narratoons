<?php include '..\src\navbar.php' ?>
<div class="checkout-container">
  <h1 class= "checkout-titulo">Información de Envío y pago</h1>
</div>
  <div class="checkout-form">
    <!-- Primera fila -->
    <div class="checkout-form-row">
      <div class="checkform-group">
        <label>Nombres</label>
        <input type="text" class="form-control" placeholder="Ingrese sus nombres">
        <i class="fas fa-user"></i>
      </div>
      
      <div class="checkform-group">
        <label>Correo</label>
        <input type="email" class="form-control" placeholder="ejemplo@correo.com">
        <i class="fas fa-envelope"></i>
      </div>
      
      <div class="checkform-group">
        <label>Teléfono</label>
        <input type="tel" class="form-control" placeholder="+34 000 000 000">
        <i class="fas fa-phone"></i>
      </div>
    </div>

    <!-- Segunda fila -->
    <div class="checkout-form-row">
      <div class="checkform-group">
        <label>Dirección</label>
        <input type="text" class="form-control" placeholder="Ingrese su dirección">
        <i class="fas fa-home"></i>
      </div>
      
      <div class="checkform-group">
        <label>Ciudad</label>
        <input type="text" class="form-control" placeholder="Ingrese su ciudad">
        <i class="fas fa-city"></i>
      </div>
      
      <div class="checkform-group">
        <label>Código ZIP</label>
        <input type="text" class="form-control" placeholder="12345">
        <i class="fas fa-map-marker-alt"></i>
      </div>
    </div>

    <button class="checksubmit-button">Confirmar Datos</button>
  </div>
</div>
<?php include '..\src\footer.php' ?>

