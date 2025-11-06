<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <title>Descubre Corea del Sur</title>
</head>

<body>
  <nav>
    <div class="nav-container">
      <div class="logo">🌸 Corea del Sur</div>
      <ul class="nav-links" id="navLinks">
        <li><a href="{{ url('/cultura') }}" target="_blank">Cultura</a></li>
        <li><a href="{{ url('/turismo') }}" target="_blank">Turismo</a></li>
        <li><a href="{{ url('/gastronomia') }}" target="_blank">Gastronomía</a></li>
      </ul>
      <div class="menu-toggle" id="menuToggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </nav>

  <div class="hero">
    <div class="petals">
      <div class="petal"></div>
      <div class="petal"></div>
      <div class="petal"></div>
      <div class="petal"></div>
      <div class="petal"></div>
      <div class="petal"></div>
    </div>
    <div class="hero-content">
      <div class="hero-tag">🇰🇷 Descubre la Magia de Asia</div>
      <h1>Bienvenido a Corea del Sur</h1>
      <p class="hero-description">
        Donde la tradición milenaria se encuentra con la innovación
        tecnológica. Explora una cultura vibrante, paisajes impresionantes y
        una gastronomía única que ha conquistado el mundo.
      </p>
      <div class="hero-buttons">
        <a href="{{ url('/contacto') }}" class="btn-primary">Contacto</a>
      </div>
    </div>
  </div>

  <div class="stats-section">
    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-number">51M+</div>
        <div class="stat-label">Habitantes</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">5,000+</div>
        <div class="stat-label">Años de Historia</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">17M+</div>
        <div class="stat-label">Turistas Anuales</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">Top 10</div>
        <div class="stat-label">Economía Mundial</div>
      </div>
    </div>
  </div>

  <script>
    const menuToggle = document.getElementById("menuToggle");
    const navLinks = document.getElementById("navLinks");

    menuToggle.addEventListener("click", () => {
      menuToggle.classList.toggle("active");
      navLinks.classList.toggle("active");
    });

    document.querySelectorAll(".nav-links a").forEach((link) => {
      link.addEventListener("click", () => {
        menuToggle.classList.remove("active");
        navLinks.classList.remove("active");
      });
    });

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
          window.scrollTo({
            top: target.offsetTop - 80,
            behavior: "smooth",
          });
        }
      });
    });

    // Animación de pétalos adicionales
    function createPetal() {
      const petal = document.createElement("div");
      petal.className = "petal";
      petal.style.left = Math.random() * 100 + "%";
      petal.style.animationDuration = Math.random() * 3 + 8 + "s";
      petal.style.animationDelay = Math.random() * 5 + "s";
      document.querySelector(".petals").appendChild(petal);

      setTimeout(() => petal.remove(), 15000);
    }

    setInterval(createPetal, 3000);
  </script>
</body>

</html>