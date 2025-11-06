<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Turismo Corea</title>
  < <link rel="stylesheet" href="{{ asset('css/styleturismo.css') }}">
</head>

<body>
  <!-- 🌸 NAVBAR -->
  <nav>
    <div class="nav-container">
      <div class="logo">🌸 <span>Corea del Sur</span></div>

      <div class="menu-toggle" id="menuToggle">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <ul class="nav-links" id="navLinks">
        <li><a href="{{ url('/cultura') }}">Cultura</a></li>
        <li><a href="{{ url('/turismo') }}" class="active">Turismo</a></li>
        <li><a href="{{ url('/gastronomia') }}">Gastronomía</a></li>
        <li><a href="{{ url('/contacto') }}">Contacto</a></li>
      </ul>

    </div>
  </nav>

  <!-- 🌸 GALERÍA -->
  <section id="galeria">
    <div class="section-header">
      <h3>Descubre la Belleza de Corea</h3>
      <p class="section-description">
        Una mirada a los paisajes, templos y ciudades que hacen único a este
        país.
      </p>
    </div>

    <div class="galeria-grid">
      <div class="galeria-item">
        <img src="{{ asset('imagenes/seul.jpeg') }}" alt="Seúl de noche" />
        <div class="galeria-info">
          🌆 Seúl: capital moderna con historia milenaria
        </div>
      </div>
      <div class="galeria-item">
        <img src="{{ asset('imagenes/jeju.jpeg') }}" alt="Isla jeju" />
        <div class="galeria-info">
          🏝️ Isla Jeju: naturaleza, volcanes y playas únicas
        </div>
      </div>
      <div class="galeria-item">
        <img src="{{ asset('imagenes/busan.jpeg') }}" alt="Busan" />
        <div class="galeria-info">
          🌊 Busan: ciudad portuaria con playas y templos
        </div>
      </div>
      <div class="galeria-item">
        <img src="{{ asset('imagenes/gyeongju.jpeg') }}" alt="Gyeongju" />
        <div class="galeria-info">
          🏯 Gyeongju: el museo sin muros de Corea
        </div>
      </div>
      <div class="galeria-item">
        <img src="{{ asset('imagenes/montaña.jpeg') }}" alt="Montañas Seoraksan" />
        <div class="galeria-info">
          ⛰️ Seoraksan: majestuosas montañas y senderos
        </div>
      </div>
      <div class="galeria-item">
        <img src="{{ asset('imagenes/Palacio Gyeongbokgung.jpeg') }}" alt="Palacio Gyeongbokgung" />
        <div class="galeria-info">
          👑 Palacio Gyeongbokgung: símbolo de la realeza coreana
        </div>
      </div>
    </div>
  </section>

  <!-- 🌸 SCRIPT PARA MENÚ RESPONSIVE -->
  <script>
    const menuToggle = document.getElementById("menuToggle");
    const navLinks = document.getElementById("navLinks");

    menuToggle.addEventListener("click", () => {
      navLinks.classList.toggle("active");
    });
  </script>
</body>

</html>