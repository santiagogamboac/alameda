<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/form-anuncio.css">
    <link rel="stylesheet" href="css/header.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <body>

    <header class="header">
        <a href="" class="logo">Logo
          <!-- <img src="images/logo.jpeg" alt="" srcset=""> -->
        </a>

        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>
        <nav class="navbar">
            <a href="index.php" style="--i:0;">Inicio</a>
            <a href="#servicios" style="--i:1;">Servicios</a>
            <a href="" style="--i:2;">Nosotros</a>
        </nav>
    </header>
        <div class="form-container">
            <h2>Formulario de Anuncios</h2>
            <form action="procesar_formulario.php" method="POST" enctype="multipart/form-data">
              <label for="titulo">Título del Anuncio:</label>
              <input type="text" id="titulo" name="titulo" required>
          
              <label for="descripcion">Descripción:</label>
              <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

              <label for="fecha">Fecha de Publicación:</label>
              <input type="date" id="fecha_publicacion" name="fecha_publicacion"  value="<?php echo date('Y-m-d'); ?>" required>
          
              <label for="imagen">Cargar Imagen:</label>
              <input type="file" id="imagen" name="imagen" accept="image/*" required>

              <label for="pdf">Selecciona un archivo PDF (opcional):</label>
              <input type="file" name="pdf" id="pdf">

              <input type="submit" value="Publicar Anuncio">
            </form>
          </div>
</body>
</html>