
/* manejo de las transiciones de las paginas */

function nextSection(seccionActual, siguienteSeccion) {
  let seccionActual = document.getElementById(seccionActual);
  let siguienteSeccion = ducument.getElementById(siguienteSeccion);

  seccionActual.classList.remove('animacion-entrada');
  seccionActual.classList.add('animacion-salida');
}

/* PARA CONTROLAR EL MENU MOVIL */
const menuToggle = document.getElementById("menu-toggle");
const mobileMenu = document.getElementById("mobile-menu");
const menuOverlay = document.getElementById("menu-overlay");
const closeMenuBtn = document.getElementById("close-menu");

menuToggle.addEventListener("click", () => {
  mobileMenu.classList.toggle("open");
  menuOverlay.style.display = mobileMenu.classList.contains("open")
    ? "block"
    : "none";
});

closeMenuBtn.addEventListener("click", () => {
  mobileMenu.classList.remove("open");
  menuOverlay.style.display = "none";
});

menuOverlay.addEventListener("click", () => {
  mobileMenu.classList.remove("open");
  menuOverlay.style.display = "none";
});

/* AGREGAR PERSONAJES */

const addPersonajeBtn = document.getElementById("add-personaje-btn");
const personajesContainer = document.getElementById("personajes-container");

// aCtualizanios el estado de los botones de eiinacion
function updateRemoveButtonState() {
  const removeButtons = personajesContainer.querySelectorAll(
    ".btn-remove-personaje"
  );
  removeButtons.forEach((button) => {
    button.disabled =
      personajesContainer.getElementsByClassName("personaje-row").length <= 1;
  });
}

// Aqui se agregan los personajes
addPersonajeBtn.addEventListener("click", function () {
  const newRow = document.createElement("div");
  newRow.className = "row mb-3 personaje-row";
  newRow.innerHTML = `
          <div class="col-md-4">
              <input type="text" class="form-control" name="personaje[]" placeholder="Nombre del personaje" required>
          </div>
          <div class="col-md-4">
              <input type="text" class="form-control" name="rol[]" placeholder="Rol del personaje" required>
          </div>
          <div class="col-md-2">
              <button type="button" class="btn btn-remove-personaje">
                 <svg class="plus-person btn-remove-personaje" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
               <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
              </button>
          </div>
      `;
  personajesContainer.appendChild(newRow);
  updateRemoveButtonState();
});

// para eliminar los personajes
personajesContainer.addEventListener("click", function (event) {
  if (event.target.classList.contains("btn-remove-personaje")) {
    const row = event.target.closest(".personaje-row");
    personajesContainer.removeChild(row);
    updateRemoveButtonState();
  }
});

// envio del formulario
document
  .getElementById("personajes-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    // Aquí puedes procesar los datos del formulario
    alert("Formulario enviado");
  });

// Actualizar el estado de los botones "Eliminar" al cargar la página
updateRemoveButtonState();


