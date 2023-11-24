<!-- <?php
// include 'config.php';

// // Consulta para obtener los anuncios de la base de datos
// $sql = "SELECT * FROM anuncios";
// $resultado = $conn->query($sql);
?> -->

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="css/servicios.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/info.css">
  <link rel="stylesheet" href="css/blog.css">
  <link rel="stylesheet" href="css/ad.css">
  <link rel="stylesheet" href="css/modal.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />

<!-- CSS -->
  <link rel="stylesheet" href="css/style-slider.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Style of the plugin -->
    <link rel="stylesheet" href="plugin/components/Font Awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="plugin/whatsapp-chat-support.css">
</head>
<body>
	<header class="header">
        <a href="" class="logo">
          <img src="images/logo.jpeg" alt="" srcset="">
        </a>

        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>
        <nav class="navbar">
            <a href="#inicio" class="nav-link" style="--i:0;">Inicio</a>
            <a href="#servicios" class="nav-link" style="--i:1;">Servicios</a>
            <a href="" style="--i:2;">Nosotros</a>
        </nav>
    </header>

    <section class="main swiper mySwiper">
      <div class="wrapper swiper-wrapper">
        <div class="slide swiper-slide">
          <img src="images/img1.webp" alt="" class="image" />
          <div class="image-data">
            <span class="text">Enjoy the finest coffee drinks.</span>
            <h2>
              Enjoy Our Exclusive <br />
              Coffee and Cocktails
            </h2>
            <a href="#" class="button">About Us</a>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="images/img4.jpg" alt="" class="image" />
          <div class="image-data">
            <span class="text">We really like what we do.</span>
            <h2>
              Coffee Beans with a <br />
              Perfect Aroma
            </h2>
            <a href="#" class="button">About Us</a>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="images/img1.webp" alt="" class="image" />
          <div class="image-data">
            <span class="text">Making Our coffee with lover.</span>
            <h2>
              Alluring and Fragrant <br />
              Coffee Aroma
            </h2>
            <a href="#" class="button">About Us</a>
          </div>
        </div>
      </div>

      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </section>
    
<section id="inicio">
<div class="info" >
        <h3>Hola</h3>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="JS/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
         autoplay: {
      delay: 3000,
         }
      });
    </script>


<section id="servicios">
	<div class="container">
        <div class="service-wrapper">
            <div class="service">
                <div class="title">
                    <h1>SERVICIOS</h1>
                </div>
				
                <div class="cards">
                    <div class="card">
                        <i class="fa-solid fa-users"></i>
                        <h2>Salón Social</h2>
                             <a href="Form.html">
                                <button class="btn">Ver más</button>
                             </a>
                    </div>

                    <div class="card">
                        <i class="fas fa-credit-card"></i>
                        <h2>Pagar administración</h2>
                             <a href="https://web-conjuntos.jelpit.com/zona-publica-pagos">
                                <button class="btn">Ver más</button>
                             </a>
                    </div>

                    <div class="card">
                        <i class="fa-solid fa-truck-moving"></i>
                        <h2>Mudanzas</h2>
                             <a href="mudanzas.html">
                                <button class="btn">Ver más</button>
                             </a>
                    </div>

                    <div class="card">
                        <i class="fa-solid fa-newspaper"></i>
                        <h2>Clasificados</h2>
                             <a href="#">
                                <button class="btn">Ver más</button>
                             </a>
                    </div>

                    <div class="card">
                        <i class="fa-solid fa-question"></i>
                        <h2>PQR</h2>
                             <a href="pagos.html">
                                <button class="btn">Ver más</button>
                             </a>
                    </div>

                    <div class="card">
                        <i class="fa-solid fa-user"></i>
                        <h2>Censo adultos mayores</h2>
                             <a href="adultomayor.html">
                                <button class="btn">Ver más</button>
                             </a>
                    </div>

                    <div class="card">
                        <i class="fa-solid fa-id-card"></i>
                        <h2>Actualización de datos</h2>
                             <a href="updatedatos.html">
                                <button class="btn">Ver más</button>
                             </a>
                    </div>

                    <div class="card">
                        <i class="fa-regular fa-clipboard"></i>
                        <h2>Encuestas</h2>
                             <a href="Form.html">
                                <button class="btn">Ver más</button>
                             </a>
                    </div>

                    <div class="card">
                        <i class="fa-solid fa-bullhorn"></i>
                        <h2>Convocatorias</h2>
                             <a href="pagos.html">
                                <button class="btn">Ver más</button>
                             </a>
                    </div>
                </div>
            </div>
        </div>
</section>

<div class="caja-body">
<div class="caja-anuncios">
  <h2>Post</h2>
        <div class="blog-post">
            <div class="blog-post_img">
                <img src="https://images.unsplash.com/photo-1612287230202-1ff1d85d1bdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTU3fHx0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    alt="">
            </div>
            <div class="blog-post_info">
                <div class="blog-post_date">
                    <span>Sagar Developer</span>
                    <span>Nov 12 2021</span>
                </div>
                <h1 class="blog-post_title">Lorem ipsum dolor sit amet.</h1>
                <p class="blog-post_text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores a, tempore veniam quasi sint fugiat
                    facilis, facere, amet magnam optio velit. Laudantium et temporibus soluta, esse cupiditate aliquid
                    dicta
                    accusantium.
                </p>
                <a href="#" class="blog-post_cta">Read More</a>
            </div>
        </div>

        <div class="blog-post">
            <div class="blog-post_img">
                <img src="https://images.unsplash.com/photo-1562813733-b31f71025d54?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y29kaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    alt="">
            </div>
            <div class="blog-post_info">
                <div class="blog-post_date">
                    <span>Sagar Developer</span>
                    <span>Dec 25 2021</span>
                </div>
                <h1 class="blog-post_title">Lorem ipsum dolor sit amet.</h1>
                <p class="blog-post_text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores a, tempore veniam quasi sint fugiat
                    facilis, facere, amet magnam optio velit. Laudantium et temporibus soluta, esse cupiditate aliquid
                    dicta
                    accusantium.
                </p>
                <a href="#" class="blog-post_cta">Read More</a>
            </div>
        </div>
</div>

<!-- </div> -->
    <!-- <div class="anuncios">
    <div class="service">
    <div class="title">
    <h1>Anuncios</h1>
    </div>
    <div class="anuncios-container">
    <?php
// include 'config.php';

    // $sql = "SELECT * FROM anuncios";
    // $resultado = $conn->query($sql);

    // while($row = $resultado->fetch_assoc()){

        // $anuncioId = $row['id'];
        // $imagenBase64 = base64_encode($row['imagen']);
        //     echo '<div class="ad">
        // <div class="tituloanuncio">
        //     <h2>'. $row['titulo'].'</h2>
        // </div>  
        // <div class="imagen">
        //     <img src="data:image/jpeg;base64,' . base64_encode($row['imagen']) . '" alt="">
        // </div>
        // <div class="fecha">
        //     <p>' . $row['fecha_publicacion']. '</p>
        // </div>
        // <button class="ver-anuncio" data-titulo="' . $row['titulo'] . '" data-descripcion="' . $row['descripcion'] . '" data-fecha="' . $row['fecha_publicacion'] .  '" data-imagen="' . $imagenBase64 . '">Ver anuncio</button>
//     </div>';
//     // } 
// ?>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> -->
    
      <!-- Modal -->
      <div id="myModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span onclick="closeModal()" style="cursor: pointer;">&times;</span>
        <h3 id="modal-title">Título del artículo</h3>
        <p id="modal-description">Descripción del artículo</p>
        <p id="modal-date">Fecha del artículo</p>
        <div id="modal-content"></div>
    </div>
</div>
<!-- <script src="JS/navbar.js"></script> -->

      <script>
        function openModal(button) {
    var modal = document.getElementById("myModal");
    var modalTitle = document.getElementById("modal-title");
    var modalDescription = document.getElementById("modal-description");
    var modalDate = document.getElementById("modal-date");
    var modalContent = document.getElementById("modal-content");

    modalTitle.textContent = button.getAttribute("data-titulo");
    modalDescription.textContent = button.getAttribute("data-descripcion");
    modalDate.textContent = button.getAttribute("data-fecha");



      // Recuperar la imagen en base64 desde el atributo de datos
      var imagen = document.createElement("img");
    imagen.src = "data:image/jpeg;base64," + button.getAttribute("data-imagen");

    // Recuperar el contenido del archivo en base64 desde el atributo de datos
    // var contenidoArchivo = button.getAttribute("data-archivo");

     // Crear un elemento iframe y establecer el tipo de contenido correcto
    //  var iframe = document.createElement("iframe");
    // iframe.src = "data:application/pdf;base64," + contenidoArchivo;

    modalContent.innerHTML = "";
    modalContent.appendChild(imagen);
    // modalContent.appendChild(iframe);

    modal.style.display = "block";
}

function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}

// Cierra el modal si se hace clic fuera del contenido
window.onclick = function (event) {
    if (event.target == document.getElementById("myModal")) {
        closeModal();
    }
};

// Agrega un controlador de eventos a los botones "Ver anuncio"
var verAnuncioButtons = document.getElementsByClassName("ver-anuncio");
for (var i = 0; i < verAnuncioButtons.length; i++) {
    verAnuncioButtons[i].addEventListener("click", function (event) {
        openModal(event.target);
    });
}
      </script>

    <!-- Button Whatsapp Structure -->
  <div class="whatsapp_chat_support wcs_fixed_right" id="button-w">
    <div class="wcs_button_label">
            Contáctanos
        </div>  
    <div class="wcs_button wcs_button_circle">
        <span class="fa fa-whatsapp"></span>
    </div>  
 
    <div class="wcs_popup">
        <div class="wcs_popup_close">
            <span class="fa fa-close"></span>
        </div>
        <div class="wcs_popup_header">
            <span class="fa fa-whatsapp"></span>
            <strong>Servicio al cliente</strong>
            
            <div class="wcs_popup_header_description">¿Necesidad de ayuda? Chatea con nosotros en Whatsapp</div>

        </div>  
        <div class="wcs_popup_input" 
            data-number="573116646717"
            data-availability='{ "monday":"07:00-22:30", "tuesday":"07:00-22:30", "wednesday":"07:30-22:30", "thursday":"07:00-22:30", "friday":"07:00-22:30", "saturday":"09:00-18:30", "sunday":"09:00-22:30" }'>
            <input type="text" placeholder="Escribir pregunta!" />
            <i class="fa fa-play"></i>
        </div>
        <div class="wcs_popup_avatar">
            <img src="https://avatars.githubusercontent.com/janl?s=180" alt="">
        </div>
    </div>
</div>
    <!-- jQuery 1.8+ -->
<script src="plugin/components/jQuery/jquery-1.11.3.min.js"></script>
    <!-- Plugin JS file -->
<script src="plugin/components/moment/moment.min.js"></script>
<script src="plugin/components/moment/moment-timezone-with-data.min.js"></script> <!-- spanish language (es) -->
<script src="plugin/whatsapp-chat-support.js"></script>
<script>
   $('#button-w').whatsappChatSupport({
        defaultMsg : '',
    });
</script>

<script>
// Obtén todos los enlaces de navegación
const navLinks = document.querySelectorAll(".nav-link");
const sections = document.querySelectorAll("section");

// Función para verificar si una sección está en la vista
function isElementInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Función para actualizar el enlace activo
function updateActiveLink() {
    sections.forEach((section, index) => {
        if (isElementInViewport(section)) {
            navLinks.forEach((navLink) => {
                navLink.classList.remove("active");
            });
            navLinks[index].classList.add("active");
        }
    });
}

// Agrega un evento de "scroll" para actualizar el enlace activo cuando haces scroll
window.addEventListener("scroll", updateActiveLink);

// Llama a la función al cargar la página para establecer el enlace activo inicial
updateActiveLink();
</script>
</body>
</html>