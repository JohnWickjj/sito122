<?php require_once HEADER; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset = "UTF-8">
  <meta name="keywords" content="HTML5, CSS3, JavaScript">
  <meta name="author" content="DAVID ALFREDO BURGOS HOLGUÍN">
  <title>FormularioTrabajaConNosotros/Eventos Gino</title>

  <link rel="stylesheet" type="text/css"href="assets/css/stylesFormTrabaja.css">
  
</head>
<body>
   
<!--Contenido Principal-->
<div class="Espacio-Contenido">
  <div>
    <section class="Registro-datos">
      <h4>Ingrese sus datos personales</h4>

      <!--Formulario de Registro TrabajaConNosotros-->
      <form id="registroForm">
        <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
        <span class="error-message" id="errorNombres"></span>

        <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
        <span class="error-message" id="errorApellidos"></span>

        <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
        <span class="error-message" id="errorCorreo"></span>

        <input class="controls" type="text" name="numeroCelular" id="celular" placeholder="Ingrese su Número de Celular">
        <span class="error-message" id="errorCelular"></span>

        <input class="controls" type="text" name="direccion" id="direccion" placeholder="Ingrese su Dirección">
        <span class="error-message" id="errorDireccion"></span>

        <select class="controls" name="sexo" id="sexo">
          <option value="" disabled selected>Seleccione su sexo:</option>
          <option value="masculino">Masculino</option>
          <option value="femenino">Femenino</option>
        </select>
        <span class="error-message" id="errorSexo"></span>

        <label for="hojaDeVida">Cargue su hoja de vida (PDF o Word):</label>
          <input class="controls" type="file" name="hojaDeVida" id="hojaDeVida" accept=".pdf, .doc, .docx">
          <span class="error-message" id="errorHojaDeVida"></span>

        <label for="terminosYCondiciones">
          <input type="checkbox" id="terminosYCondiciones" name="terminosYCondiciones"> Estoy de acuerdo con <a href="#">Términos y Condiciones</a>
        </label>
        <span class="error-message" id="errorTerminos"></span>

        <input class="botons" type="button" value="Registrar" onclick="validarFormulario(event)">

      </form>
    </section>
  </div>
</div>
  
  <script src="assets/js/ValidacionesFormTrabajaConNosotros.js"></script>
  

</body>
</html>
<?php require_once FOOTER; ?>