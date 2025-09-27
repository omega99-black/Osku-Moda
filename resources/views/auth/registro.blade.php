<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Regístrate</title>
  <link href="https://fonts.googleapis.com/css?family=Instrument+Sans&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
</head>
<body>
  <div class="form-wrapper">
    <div class="logo-izquierda"></div>
    <div class="form-container">
      <h1 class="titulo-grande">¡Solo para muchas veces!</h1>
      <div class="form-box">
        <h2>Crea tu cuenta gratis</h2>

        {{-- Aquí empieza el formulario conectado con Laravel --}}
        <form method="POST" action="{{ route('register') }}">
  @csrf

  <label for="name">Tu nombre</label>
  <input type="text" id="name" name="name" placeholder="Ingresa tu nombre" value="{{ old('name') }}" required />
  @error('name')
    <span class="error">{{ $message }}</span>
  @enderror

  <label for="email">Tu correo electrónico</label>
  <input type="email" id="email" name="email" placeholder="Ingresa tu correo" value="{{ old('email') }}" required />
  @error('email')
    <span class="error">{{ $message }}</span>
  @enderror

  <label for="password">Contraseña</label>
  <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required />
  @error('password')
    <span class="error">{{ $message }}</span>
  @enderror

  <label for="password_confirmation">Confirmar Contraseña</label>
  <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repite tu contraseña" required />

  <div class="fecha-nacimiento">
    <div class="custom-select">
      <select id="dia" name="dia">
        <option value="" disabled selected hidden>Día</option>
        @for ($i = 1; $i <= 31; $i++)
          <option value="{{ $i }}">{{ $i }}</option>
        @endfor
      </select>
    </div>
    <div class="custom-select">
      <select id="mes" name="mes">
        <option value="" disabled selected hidden>Mes</option>
        @for ($i = 1; $i <= 12; $i++)
          <option value="{{ $i }}">{{ $i }}</option>
        @endfor
      </select>
    </div>
    <div class="custom-select">
      <select id="anio" name="anio">
        <option value="" disabled selected hidden>Año</option>
        @for ($i = 1995; $i <= 2006; $i++)
          <option value="{{ $i }}">{{ $i }}</option>
        @endfor
      </select>
    </div>
  </div>

  <div class="checkbox">
    <input type="checkbox" id="terms" name="terms" required />
    <label for="terms">Acepto los <span class="rojo">Términos y Condiciones</span></label>
  </div>

  <button type="submit" class="boton">Crear una cuenta</button>
  <a href="{{ route('login') }}" class="link">¿Ya tienes una cuenta?</a>
</form>
      </div>
    </div>
  </div>
</body>
</html>
