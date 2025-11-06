<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gastronomía Coreana</title>
  <link rel="stylesheet" href="{{ asset('css/stylegastronomia.css') }}">
</head>

<body>

  <!-- 🌸 NAVBAR -->
  <nav>
    <div class="nav-container">
      <div class="logo">🌸 <span>Corea del Sur</span></div>
      <ul class="nav-links" id="navLinks">
        <li><a href="{{ url('/cultura') }}">Cultura</a></li>
        <li><a href="{{ url('/turismo') }}">Turismo</a></li>
        <li><a href="{{ url('/gastronomia') }}" class="active">Gastronomía</a></li>
        <li><a href="{{ url('/contacto') }}">Contacto</a></li>
      </ul>
    </div>
  </nav>

  <!-- 🌸 CONTENIDO PRINCIPAL -->
  <div class="container">
    <div class="feature-section">
      <div class="feature-image">🍜</div>
      <div class="feature-content">
        <h1>Gastronomía Coreana</h1>
        <p>
          La cocina coreana combina sabores intensos, ingredientes frescos y
          un balance único entre lo picante, dulce y salado. Disfruta de esta
          galería con algunos de los platillos más populares de Corea del Sur.
        </p>
      </div>
    </div>

    <!-- 🌸 GALERÍA -->
    <section class="galeria-coreana">
      <h2 class="galeria-titulo">🍱 Platos Típicos de Corea</h2>
      <div class="grid-galeria">
        <div
          class="plato-card"
          data-nombre="Bibimbap"
          data-descripcion="Un delicioso bowl de arroz con vegetales, carne y huevo frito."
          data-receta="1. Cocina el arroz. 2. Saltea las verduras. 3. Añade carne marinada. 4. Sirve todo con gochujang.">
          <img src="{{ asset('imagenes/bibimbap.jpeg') }}" alt="Bibimbap" />
          <div class="plato-info">
            <h4>Bibimbap</h4>
          </div>
        </div>

        <div
          class="plato-card"
          data-nombre="Kimchi"
          data-descripcion="Col fermentada picante, emblema de la cocina coreana."
          data-receta="1. Corta col napa. 2. Mezcla con ajo, jengibre, chile y sal. 3. Fermenta 2-3 días.">
          <img src="{{ asset('imagenes/kimchi.jpeg') }}" alt="Kimchi" />
          <div class="plato-info">
            <h4>Kimchi</h4>
          </div>
        </div>

        <div
          class="plato-card"
          data-nombre="Tteokbokki"
          data-descripcion="Pastelitos de arroz en salsa picante de gochujang."
          data-receta="1. Hierve pastelitos de arroz. 2. Añade gochujang y azúcar. 3. Cocina hasta espesar.">
          <img src="{{ asset('imagenes/tteokbokki🤌.jpeg') }}" alt="Tteokbokki" />
          <div class="plato-info">
            <h4>Tteokbokki</h4>
          </div>
        </div>

        <div
          class="plato-card"
          data-nombre="Korean BBQ"
          data-descripcion="Carne a la parrilla al estilo coreano, una experiencia social."
          data-receta="1. Marina carne. 2. Ásala. 3. Sírvela con lechuga y arroz.">
          <img src="{{ asset('imagenes/korean.jpeg') }}" alt="Korean BBQ" />
          <div class="plato-info">
            <h4>Korean BBQ</h4>
          </div>
        </div>

        <div
          class="plato-card"
          data-nombre="Ramen Coreano"
          data-descripcion="Sopa de fideos picantes con vegetales y huevo."
          data-receta="1. Hierve fideos. 2. Añade huevo, cebolleta y kimchi.">
          <img src="{{ asset('imagenes/RAMEN.jpeg') }}" alt="Ramen Coreano" />
          <div class="plato-info">
            <h4>Ramen Coreano</h4>
          </div>
        </div>

        <div
          class="plato-card"
          data-nombre="Kimbap"
          data-descripcion="Rollos de arroz envueltos en alga, similares al sushi."
          data-receta="1. Coloca arroz, espinaca, zanahoria y jamón sobre el alga. 2. Enrolla y corta.">
          <img src="{{ asset('imagenes/gimbap.jpeg') }}" alt="Kimbap" />
          <div class="plato-info">
            <h4>Kimbap</h4>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- 🌸 MODAL -->
  <div class="modal" id="modal">
    <div class="modal-content">
      <span class="cerrar-modal">&times;</span>
      <img id="modal-img" src="n" alt="" />
      <h3 id="modal-nombre"></h3>
      <p id="modal-descripcion"></p>
      <h4>Receta:</h4>
      <p id="modal-receta"></p>
    </div>
  </div>

  <!-- 🌸 SCRIPT -->
  <script>
    const modal = document.getElementById("modal");
    const modalImg = document.getElementById("modal-img");
    const modalNombre = document.getElementById("modal-nombre");
    const modalDescripcion = document.getElementById("modal-descripcion");
    const modalReceta = document.getElementById("modal-receta");
    const cerrarModal = document.querySelector(".cerrar-modal");

    document.querySelectorAll(".plato-card").forEach((card) => {
      card.addEventListener("click", () => {
        modal.style.display = "flex";
        modalImg.src = card.querySelector("img").src;
        modalNombre.textContent = card.dataset.nombre;
        modalDescripcion.textContent = card.dataset.descripcion;
        modalReceta.textContent = card.dataset.receta;
      });
    });

    cerrarModal.addEventListener(
      "click",
      () => (modal.style.display = "none")
    );
    window.addEventListener("click", (e) => {
      if (e.target === modal) modal.style.display = "none";
    });
  </script>
  <script>
    const menuToggle = document.getElementById("menuToggle");
    const navLinks = document.getElementById("navLinks");

    menuToggle.addEventListener("click", () => {
      navLinks.classList.toggle("active");
    });
  </script>
</body>

</html>