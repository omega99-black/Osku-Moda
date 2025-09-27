<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar sesión</title>
  <link href="https://fonts.googleapis.com/css?family=Instrument+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
  <div class="container">
    <div class="left-form">
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="v261_249"></div>

        <h1 class="v211_207">Inicia sesión en tu cuenta</h1>
        <p class="v211_211">¿Aún no eres miembro? 
          <a href="{{ route('registro') }}" class="link">Regístrate</a>
        </p>

        <label class="v211_213">Dirección de correo electrónico</label>
        <input name="email" type="email" placeholder="Correo electrónico" class="input-campo" required autofocus>

        <label class="v211_215">Contraseña</label>
        <input name="password" type="password" placeholder="Contraseña" class="input-campo" required>

        <div class="checkbox-container">
          <label>
            <input type="checkbox" name="remember" class="checkbox-custom" style="display:none;">
            <span class="checkmark"></span>
          </label>
          <span class="v211_220">Recuérdame</span>
        </div>

        <a href="{{ route('password.request') }}" class="v211_226">¿Olvidaste tu contraseña?</a>

        <button type="submit" class="btn-Iniciar-sesion" href="btn-Iniciar-sesion">Iniciar sesión</button>        
        <div class="linea-contenedor">
          <div class="linea"></div>
          <span class="linea-texto">O continuar con</span>
          <div class="linea"></div>
        </div>

        <a href="https://accounts.google.com/" target="_blank" class="google-wrapper">
          <div class="google-icon"></div>
          <span>Google</span>
        </a>
      </form>
    </div>
    <div class="right-image"></div>
  </div>
</body>
</html>
