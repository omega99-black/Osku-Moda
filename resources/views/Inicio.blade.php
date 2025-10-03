<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio</title>
  <link href="https://fonts.googleapis.com/css?family=Instrument+Sans&display=swap" rel="stylesheet">
  <link href="./css - inicio/inicio.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/Inicio.css') }}">


</head>
<body>
  <div class="v188_236">
    <div class="contenedor-centro">
      <div class="v290_360">
        <div class="icon-bar">
          <label for="search-input">
            <i class="fas fa-search"></i>
          </label>
          <input id="search-input" type="text" placeholder="Buscar...">
          <a href="contactanos">
            <i class="fas fa-user"></i>
          </a>
          <div class="linea-blanca"></div>
          <i class="fas fa-shopping-cart"></i>
          <span class="v290_393">0</span>
        </div>
        <span class="v290_361">Envíos gratis desde $150.000</span>
      </div>

      <div class="v290_388"></div>
      <a href="#" class="link-hombres">Hombres</a>
      <a href="#" class="link-mujeres">Mujeres</a>
      <a href="#" class="link-ninos">Niños</a>
      <a href="#" class="link-otros">Otros</a>
      <a href="{{ route('usuarios.index') }}" :active="request()->routeIs('usuarios.*')" class="link-usuarios"> Dashboard</a>
      <a href="{{ route('login') }}" class="link-login">Iniciar sesión</a>
      <a href="{{ route('registro') }}" class="link-crear-cuenta">Crear una cuenta</a>
      <div class="linea-vertical"></div>
      <hr class="linea-decorativa">
      <div class="v290_398"></div>
      <div class="v290_399"></div>
      <div class="v290_408"></div>
      <div class="v290_402"></div>
      <div class="v290_404"></div>
      <div class="v290_400"></div>
      <div class="v290_406"></div>
      <span class="v290_410">Los estilos de verano finalmente están aquí</span>
      <span class="v290_412">
        La mayoría de nuestros productos son ediciones limitadas que no volverán.
        Consigue tus artículos favoritos mientras estén disponibles.
      </span>

      <div class="v290_418">
        <div class="v290_417">
          <div class="v290_414"></div>
          <span class="v290_415">Colección de la tienda</span>
        </div>
      </div>
    </div>
  </div>

  <script>
    const searchIcon = document.querySelector(".fa-search");
    const searchInput = document.getElementById("search-input");

    searchIcon.addEventListener("click", () => {
      if (searchInput.style.display === "none" || searchInput.style.display === "") {
        searchInput.style.display = "inline-block";
        searchInput.focus();
      } else {
        searchInput.style.display = "none";
      }
    });
  </script>
</body>
</html>
