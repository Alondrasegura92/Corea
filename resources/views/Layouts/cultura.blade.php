<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CULTURA | Corea del Sur</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/stylecultura.css') }}">


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
        <li><a href="{{ url('/cultura') }}" class="active">Cultura</a></li>
        <li><a href="{{ url('/turismo') }}">Turismo</a></li>
        <li><a href="{{ url('/gastronomia') }}">Gastronomía</a></li>
        <li><a href="{{ url('/contacto') }}">Contacto</a></li>
      </ul>
    </div>
  </nav>

  <!-- 🌸 CONTENIDO PRINCIPAL -->
  <div class="container">
    <section id="cultura">
      <div class="section-header">
        <h3>Cultura Coreana</h3>
        <p class="section-description">
          Una perfecta armonía entre las raíces ancestrales y la innovación
          contemporánea que define la identidad única de Corea del Sur.
        </p>
      </div>

      <div class="cards-grid">
        <div class="card" data-info="hanbok">
          <span class="card-icon">👘</span>
          <h3>Hanbok (한복)</h3>
          <p>
            El elegante traje tradicional usado en festividades y ceremonias.
          </p>
        </div>

        <div class="card" data-info="hangul">
          <span class="card-icon">✍</span>
          <h3>Hangul (한글)</h3>
          <p>
            El alfabeto creado en 1443, reconocido como uno de los más lógicos
            del mundo.
          </p>
        </div>

        <div class="card" data-info="kpop">
          <span class="card-icon">🎵</span>
          <span class="card-icon">🎬</span>
          <h3>K-Pop & K-Drama</h3>
          <p>
            El fenómeno cultural que ha conquistado el mundo con su música y
            producciones.
          </p>
        </div>

        <div class="card" data-info="respeto">
          <span class="card-icon">🙇</span>
          <h3>Respeto y Cortesía</h3>
          <p>
            Valores fundamentales influenciados por el confucianismo que
            definen la sociedad.
          </p>
        </div>

        <div class="card" data-info="festividades">
          <span class="card-icon">🎊</span>
          <h3>Festividades</h3>
          <p>
            Celebraciones como Seollal y Chuseok que mantienen vivas las
            tradiciones.
          </p>
        </div>

        <div class="card" data-info="arte">
          <span class="card-icon">🎨</span>
          <h3>Arte y Diseño</h3>
          <p>
            Desde cerámica tradicional hasta diseño moderno, el arte coreano
            brilla con elegancia.
          </p>
        </div>
      </div>
    </section>
  </div>

  <!-- 🌸 MODAL -->
  <div class="modal" id="infoModal">
    <div class="modal-content">
      <span class="close-btn">&times;</span>
      <h2 id="modalTitle"></h2>
      <p id="modalText"></p>
      <div class="gallery" id="modalGallery"></div>
    </div>
  </div>

  <!-- 🌸 SCRIPT INTERACTIVO -->
  <script>
    // Menú hamburguesa
    const menuToggle = document.getElementById("menuToggle");
    const navLinks = document.getElementById("navLinks");
    menuToggle.addEventListener("click", () => {
      navLinks.classList.toggle("show");
      menuToggle.classList.toggle("open");
    });

    // Modal
    const cards = document.querySelectorAll(".card");
    const modal = document.getElementById("infoModal");
    const closeBtn = document.querySelector(".close-btn");
    const modalTitle = document.getElementById("modalTitle");
    const modalText = document.getElementById("modalText");
    const modalGallery = document.getElementById("modalGallery");

    const data = {
      hanbok: {
        title: "Hanbok (한복)",
        text: "El Hanbok es el traje tradicional coreano, símbolo de elegancia, armonía y respeto. Se usa en bodas, Año Nuevo y otras festividades.",
        images: ["{{ asset('imagenes/hanbook.jpeg') }}",
          "{{ asset('imagenes/hanbook2.jpeg') }}",
          "{{ asset('imagenes/hanbook3.jpeg') }}"
        ],
      },
      hangul: {
        title: "Hangul (한글)",
        text: "Creado en 1443 por el Rey Sejong, el Hangul es un alfabeto diseñado para que todos pudieran leer y escribir fácilmente.",
        images: ["{{ asset('imagenes/hangul.jpeg') }}",
          "{{ asset('imagenes/hangul2.jpeg') }}",
          "{{ asset('imagenes/hangul3.jpeg') }}"
        ],
      },
      kpop: {
        title: "K-Pop & K-Drama",
        text: "El K-Pop y los K-Dramas son pilares del entretenimiento coreano, conocidos mundialmente por su calidad, estilo y creatividad.",
        sections: [{
            subtitle: "🎵 K-Pop",
            images: ["{{ asset('imagenes/kpop1.jpeg') }}",
              "{{ asset('imagenes/kpop2.jpeg') }}"
            ],
          },
          {
            subtitle: "🎬 K-Dramas",
            images: ["{{ asset('imagenes/kdramas.jpeg') }}",
              "{{ asset('imagenes/kdramas2.jpeg') }}"
            ],
          },
        ],
      },
      respeto: {
        title: "Respeto y Cortesía",
        text: "El respeto hacia los mayores y la cortesía son valores fundamentales en Corea, fuertemente influenciados por el confucianismo.",
        images: ["{{ asset('imagenes/respeto.jpeg') }}",
          "{{ asset('imagenes/respeto2.jpeg') }}",
          "{{ asset('imagenes/respeto3.jpeg') }}"
        ],
      },
      festividades: {
        title: "Festividades Tradicionales",
        text: "Corea celebra festividades como Seollal (Año Nuevo Lunar) y Chuseok (Día de la Cosecha), momentos de reunión familiar y agradecimiento.",
        images: ["{{ asset('imagenes/festividad.jpeg') }}",
          "{{ asset('imagenes/festividad2.jpeg') }}",
          "{{ asset('imagenes/festividad3.jpeg') }}"
        ],
      },
      arte: {
        title: "Arte y Diseño",
        text: "El arte coreano combina lo tradicional y lo contemporáneo. Desde cerámica y caligrafía hasta arquitectura moderna e innovación estética.",
        images: ["{{ asset('imagenes/arte.jpeg') }}",
          "{{ asset('imagenes/arte2.jpeg') }}",
          "{{ asset('imagenes/arte3.jpeg') }}"
        ],
      },
    };

    cards.forEach((card) => {
      card.addEventListener("click", () => {
        const infoKey = card.getAttribute("data-info");
        const info = data[infoKey];
        if (!info) return;

        modalTitle.textContent = info.title;
        modalText.textContent = info.text;

        if (info.sections) {
          modalGallery.innerHTML = info.sections
            .map(
              (section) => `
                  <div class="gallery-section">
                    <h3 class="gallery-subtitle">${section.subtitle}</h3>
                    <div class="gallery">
                      ${section.images
                        .map(
                          (img) =>
                            `<img src="${img}" alt="${section.subtitle}">`
                        )
                        .join("")}
                    </div>
                  </div>`
            )
            .join("");
        } else {
          modalGallery.innerHTML = `
              <div class="gallery">
                ${info.images
                  .map((img) => `<img src="${img}" alt="${info.title}">`)
                  .join("")}
              </div>`;
        }

        modal.style.display = "flex";
      });
    });

    closeBtn.addEventListener("click", () => (modal.style.display = "none"));
    window.addEventListener("click", (e) => {
      if (e.target === modal) modal.style.display = "none";
    });
  </script>
</body>

</html>