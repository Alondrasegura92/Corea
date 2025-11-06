<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacto | Corea del Sur</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            "cherry-pink": "#ffb7c5",
            "cherry-light": "#ffc8d3",
            "cherry-dark": "#ff8fa3",
            "text-primary": "#ffffff",
          },
        },
      },
    };
  </script>
</head>

<body class="bg-gray-800 text-pink-200 font-sans">
  <!-- 🌸 Navbar -->
  <nav
    class="bg-black/40 backdrop-blur-md sticky top-0 z-50 border-b border-pink-200/10">
    <div
      class="max-w-6xl mx-auto flex items-center justify-between px-6 py-3">
      <!-- Logo -->
      <div class="flex items-center gap-2 text-cherry-pink font-bold text-lg">
        🌸 <span>Corea del Sur</span>
      </div>

      <!-- Botón hamburguesa -->
      <button
        id="menuToggle"
        class="md:hidden text-cherry-pink focus:outline-none">
        <svg
          class="w-7 h-7"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <!-- Menú escritorio -->
      <ul id="navLinks" class="hidden md:flex space-x-8 font-medium">
        <li>
          <a href="{{ url('/cultura') }}" class="hover:text-cherry-light transition-colors">
            Cultura
          </a>
        </li>
        <li>
          <a href="{{ url('/turismo') }}" class="hover:text-cherry-light transition-colors">
            Turismo
          </a>
        </li>
        <li>
          <a href="{{ url('/gastronomia') }}" class="hover:text-cherry-light transition-colors">
            Gastronomía
          </a>
        </li>
        <li>
          <a href="{{ url('/inicio') }}" class="text-cherry-pink font-semibold">
            Contacto
          </a>
        </li>
      </ul>

    </div>

    <!-- Menú móvil -->
    <ul
      id="mobileMenu"
      class="hidden flex-col items-center space-y-3 py-4 bg-black/70 backdrop-blur-md md:hidden transition-all duration-300 ease-in-out">
      <li>
        <a
          href="cultura.html"
          class="hover:text-cherry-light transition-colors">Cultura</a>
      </li>
      <li>
        <a
          href="turismo.html"
          class="hover:text-cherry-light transition-colors">Turismo</a>
      </li>
      <li>
        <a
          href="gastronomia.html"
          class="hover:text-cherry-light transition-colors">Gastronomía</a>
      </li>
      <li>
        <a href="formulario.html" class="text-cherry-pink">Contacto</a>
      </li>
    </ul>
  </nav>

  <!-- 🌷 Formulario -->
  <div class="flex justify-center items-center min-h-screen px-4">
    <form class="bg-gray-900 p-8 rounded-xl w-full max-w-md shadow-lg">
      <h2 class="text-2xl font-bold text-cherry-light mb-6 text-center">
        Contáctanos
      </h2>

      <label class="block mb-2 text-pink-200" for="nombre">Nombre</label>
      <input
        id="nombre"
        type="text"
        placeholder="Tu nombre"
        class="w-full p-3 mb-4 rounded-lg bg-gray-700 text-pink-200 focus:outline-none focus:ring-2 focus:ring-cherry-pink" />

      <label class="block mb-2 text-pink-200" for="email">Correo electrónico</label>
      <input
        id="email"
        type="email"
        placeholder="Tu correo"
        class="w-full p-3 mb-4 rounded-lg bg-gray-700 text-pink-200 focus:outline-none focus:ring-2 focus:ring-cherry-pink" />

      <label class="block mb-2 text-pink-200" for="mensaje">Mensaje</label>
      <textarea
        id="mensaje"
        rows="5"
        placeholder="Escribe tu mensaje..."
        class="w-full p-3 mb-4 rounded-lg bg-gray-700 text-pink-200 focus:outline-none focus:ring-2 focus:ring-cherry-pink"></textarea>

      <button
        type="submit"
        class="w-full bg-cherry-pink text-gray-900 py-3 rounded-lg font-semibold hover:bg-cherry-dark transition-colors">
        Enviar
      </button>
    </form>
  </div>

  <!-- Script para el menú móvil -->
  <script>
    const menuToggle = document.getElementById("menuToggle");
    const mobileMenu = document.getElementById("mobileMenu");

    menuToggle.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  </script>
</body>

</html>