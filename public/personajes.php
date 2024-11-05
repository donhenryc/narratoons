<?php include '..\src\navbar.php' ?>


<section id = "personajes" class="">
<div class="fondo-personajes">
<div class=" container-md d-flex">

<div class="container shadow-lg border-info rounded-4 frm-personajes">
      <h2 class="mb-4 mt-4 text-center fw-bold h2-personajes">Personajes</h2>
      <form class="ms-5" id="personajes-form">
        <div id="personajes-container">
          <div class="row mb-3 personaje-row">
            <div class="col-md-4">
              <input
                type="text"
                class="form-control"
                style="height: 40px;"
                name="personaje[]"
                placeholder="Nombre"
                required
              />
            </div>
            <div class="col-md-4">
              <input
                type="text"
                class="form-control"
                style="height: 40px;"
                name="rol[]"
                placeholder="Rol del personaje"
                required
              />
            </div>
            <div class="col-md-2">
              <button type="button" class="btn">
              <svg class="plus-person btn-remove-personaje" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
               <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
              </button>
            </div>
          </div>
        </div>
        <button type="button" class="btn" id="add-personaje-btn">
            <svg class="plus-person" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
               <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
            </svg> Agregar Personaje
        </button>
       
      </form>
      
    </div>
    <div class="div-btn-continuar">
      <button type="submit" class="btn-general" onclick="window.location.href='emociones.php'; nextSection(index, personajes)">Continuar
            <svg class="svg-next" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
       </button>
       </div>

     <div class="img-person">
        <img class="img-person"  style="width: 650px;" src="Image20241017183204.png" alt="">
    </div>
    
</div>
<div class="p-person shadow-lg">
        <p>En esta sección puedes definir los personajes que deseas incluir en tu cómic, así como 
el rol que desempeñarán en la historia. No olvides que puedes agregar tantos 
personajes como quieras para dar vida a tu narración.</p>
    </div>
</div>
</section>


<?php include '..\src\footer.php' ?>