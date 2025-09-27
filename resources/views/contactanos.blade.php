<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Contáctanos</title>
  <link href="https://fonts.googleapis.com/css?family=Instrument+Sans&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./css - contactanos/contactanos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/contactanos.css') }}">
  <a href="{{ Route('error404') }}" >
</head>
<body>
  <div class="container">
    <div class="left-panel">
      <div class="logo"></div>
      <h1>Ponte en contacto con <br>nosotros</h1>
      <p>En Otsu Moda nos encanta escucharte. Si tienes sugerencias, necesitas ayuda con tu compra o simplemente quieres saber más sobre nuestras colecciones, escríbenos. Nuestro equipo estará feliz de responderte lo más pronto posible.</p>
      <div class="contact-info">
        <p><i class="fas fa-building"></i> Calle 23 #22-22 Bogotá,<br>Colombia</p>
        <p><i class="fas fa-phone"></i> + 1 (555) - 09988</p>
        <p><i class="fas fa-envelope"></i> otsu.moda@email.com</p>
      </div>
    </div>

    <form class="right-panel" onsubmit="return validarFormulario()">
      <div class="form-group half">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" />
        <span class="error-msg" id="error-nombre"></span>
      </div>
      <div class="form-group half">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" />
        <span class="error-msg" id="error-apellido"></span>
      </div>

      <div class="form-group">
        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" />
        <span class="error-msg" id="error-correo"></span>
      </div>

      <div class="form-group">
        <label for="telefono">Número de teléfono</label>
        <input type="tel" id="telefono" />
        <span class="error-msg" id="error-telefono"></span>
      </div>

      <div class="form-group">
        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje"></textarea>
        <span class="error-msg" id="error-mensaje"></span>
      </div>

      <div class="form-group align-right">
        <button type="submit" class="btn-contacto">Enviar mensaje</button>
      </div>
    </form>
  </div>

  <script>
    function validarFormulario() {
      const campos = [
        { id: "nombre", nombre: "Nombre" },
        { id: "apellido", nombre: "Apellido" },
        { id: "correo", nombre: "Correo electrónico" },
        { id: "telefono", nombre: "Teléfono" },
        { id: "mensaje", nombre: "Mensaje" }
      ];

      let valido = true;

      campos.forEach(campo => {
        const input = document.getElementById(campo.id);
        const error = document.getElementById("error-" + campo.id);
        if (input.value.trim() === "") {
          error.textContent = "Este campo es obligatorio";
          valido = false;
        } else {
          error.textContent = "";
        }
      });

      return valido ? (window.location.href = "{{ Route('error404') }}" , false) : false;
    }
  </script>
</body>
</html>


