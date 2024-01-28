<!--AUTOR: Lara Jama Janis Odeth-->
<?php
function clear_input($dato){
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}

function validarFormulario($postDatos) {/////////////////////////////////////////////////////////////////////////////////////////////////////////
    $usuario = $postDatos["txtUsuario"];
    $contrasena = $postDatos["txtContrasena"];
    $errores = [];

    // Validación del usuario
    if (empty($usuario)) {
        $errores[] = "El usuario es requerido.";
    } elseif (!preg_match("/[A-Z]/", $usuario)) {
        $errores[] = "El usuario debe incluir al menos una letra mayúscula.";
    } else {
        $postDatos["txtUsuario"] = clear_input($usuario);
    }
    // Validación de la contraseña
    if (empty($contrasena)) {
        $errores[] = "La contraseña es requerida.";
    } elseif (strlen($contrasena) > 15) {
        $errores[] = "La contraseña no debe superar los 15 caracteres.";
    } elseif (!preg_match("/^(?=.*[A-Za-z])(?=.*\d).+$/", $contrasena)) {
        $errores[] = "La contraseña debe contener al menos una letra y un número.";
    } else {
        $postDatos["txtContrasena"] = clear_input($contrasena);
    }
    return $errores;
}

function validarUsuario($postDatos){/////////////////////////////////////////////////////////////////////////////////////////////////////////
    $nombre = $postDatos["txtNombre"];
    $apellido = $postDatos["txtApellido"];
    $user = $postDatos["txtUsuario"];
    $contrasenia = $postDatos["txtContrasenia"];
    $rol = $postDatos["txtRol"] ?? '';
    $errores = [];

    // Validación del nombre
    if (empty($nombre)) {
        $errores[] = "El nombre del usuario es requerido.";
    } elseif (!preg_match("/[A-Z]/", $nombre)) {
        $errores[] = "El nombre debe contener únicamente letras.";
    } else {
        $postDatos["txtNombre"] = clear_input($nombre);
    }
    // Validación de la apellido
    if (empty($apellido)) {
        $errores[] = "El apellido del usuario es requerido.";
    } elseif (!preg_match("/[A-Z]/", $apellido))  {
        $errores[] = "El apellido no debe contener números.";
    } else {
        $postDatos["txtApellido"] = clear_input($apellido);
    }
    // Validación del usuario
    if (empty($user)) {
        $errores[] = "Un usuario es requerido.";
    } elseif (!preg_match("/^[A-Z]{1}[a-z]{2}_[a-z]{3}\d{2}$/", $user)) {
        $errores[] = "El usuario no cumple con el formato requerido Jan_lar23.";
    } else {
        $postDatos["txtUsuario"] = clear_input($user);
    }
    // Validación de la contraseña
    if (empty($contrasenia)) {
        $errores[] = "La contraseña es requerida.";
    } elseif (strlen($contrasenia) > 15) {
        $errores[] = "La contraseña no debe superar los 15 caracteres.";
    } elseif (!preg_match("/^(?=.*[A-Za-z])(?=.*\d).+$/", $contrasenia)) {
        $errores[] = "La contraseña debe contener al menos una letra y un número.";
    } else {
        $postDatos["txtContrasenia"] = clear_input($contrasenia);
    }
    // Validación de la selección de rol
    if (empty($postDatos["txtRol"]) || $postDatos["txtRol"] == ' ') {
        $errores[] = "Debes seleccionar un rol de usuario.";
    } else {
        $postDatos["txtRol"] = htmlentities($postDatos["txtRol"]);
    }
    return $errores;
}

function validarCliente($postDatos){/////////////////////////////////////////////////////////////////////////////////////////////////////////
    $nombre = $postDatos["txtNombre"];
    $apellido = $postDatos["txtApellido"];
    $provincia = $postDatos["txtProvincia"];
    $correo = $postDatos["txtCorreo"];
    $telefono = $postDatos["txtTelefono"];
    $user = $postDatos["txtIdUserCli"] ?? '';
    $errores = [];

    // Validación del nombre
    if (empty($nombre)) {
        $errores[] = "El nombre del cliente es requerido.";
    } elseif (!preg_match("/[A-Z]/", $nombre)) {
        $errores[] = "El nombre debe contener únicamente letras.";
    } else {
        $postDatos["txtNombre"] = clear_input($nombre);
    }
    // Validación de la apellido
    if (empty($apellido)) {
        $errores[] = "El apellido del cliente es requerido.";
    } elseif (!preg_match("/[A-Z]/", $apellido))  {
        $errores[] = "El apellido no debe contener números.";
    } else {
        $postDatos["txtApellido"] = clear_input($apellido);
    }
    // Validación de la provincia
    if (empty($provincia)) {
        $errores[] = "La provincia y la ciudad donde reside el cliente es requerida.";
    } elseif (!preg_match("/[A-Z]/", $provincia))  {
        $errores[] = "La provincia no debe contener números.";
    } else {
        $postDatos["txtProvincia"] = clear_input($provincia);
    }
    // Validación de la correo
    if (empty($correo)) {
        $errores[] = "El correo del cliente es requerido.";
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del correo electrónico no es válido.";
    } else {
        $postDatos["txtCorreo"] = clear_input($correo);
    }
    // Validación de la telefono
    if (empty($telefono)) {
        $errores[] = "El teléfono del cliente es requerido.";
    } elseif (!ctype_digit($telefono)) {
        $errores[] = "El teléfono debe contener solo números.";
    } else {
        $postDatos["txtTelefono"] = clear_input($telefono);
    }
    // Validación de la selección de usuario del cliente
    if (empty($postDatos["txtIdUserCli"]) || $postDatos["txtIdUserCli"] == ' ') {
        $errores[] = "Debes seleccionar un usuario.";
    } else {
        $postDatos["txtIdUserCli"] = htmlentities($postDatos["txtIdUserCli"]);
    }
    return $errores;
}

function validarOrganizador($postDatos){/////////////////////////////////////////////////////////////////////////////////////////////////////////
    $nombre = $postDatos["txtNombre"];
    $apellido = $postDatos["txtApellido"];
    $telefono = $postDatos["txtTelefono"];
    $correo = $postDatos["txtCorreo"];
    $user = $postDatos["txtIdUserOrg"] ?? '';
    $errores = [];
    
    // Validación del nombre
    if (empty($nombre)) {
        $errores[] = "El nombre del organizador es requerido.";
    } elseif (!preg_match("/[A-Z]/", $nombre)) {
        $errores[] = "El nombre debe contener únicamente letras.";
    } else {
        $postDatos["txtNombre"] = clear_input($nombre);
    }
    // Validación de la apellido
    if (empty($apellido)) {
        $errores[] = "El apellido del organizador es requerido.";
    } elseif (!preg_match("/[A-Z]/", $apellido))  {
        $errores[] = "El apellido no debe contener números.";
    } else {
        $postDatos["txtApellido"] = clear_input($apellido);
    }
    // Validación del telefono
    if (empty($telefono)) {
        $errores[] = "El teléfono del organizador es requerido.";
    } elseif (!ctype_digit($telefono)) {
        $errores[] = "El teléfono debe contener solo números.";
    } else {
        $postDatos["txtTelefono"] = clear_input($telefono);
    }
    // Validación del correo
    if (empty($correo)) {
        $errores[] = "El correo del organizador es requerido.";
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del correo electrónico no es válido.";
    } else {
        $postDatos["txtCorreo"] = clear_input($correo);
    }
    // Validación de la selección de usuario del organizador
    if (empty($postDatos["txtIdUserOrg"]) || $postDatos["txtIdUserOrg"] == ' ') {
        $errores[] = "Debes seleccionar un usuario.";
    } else {
        $postDatos["txtIdUserOrg"] = htmlentities($postDatos["txtIdUserOrg"]);
    }
    return $errores;
}

function validarEvento($postDatos){/////////////////////////////////////////////////////////////////////////////////////////////////////////
    $nombre = $postDatos["txtNombre"];
    $tipo = $postDatos["txtTipoEvento"] ?? '';
    $cliente = $postDatos["txtIdCliente"] ?? '';
    $organizador = $postDatos["txtIdOrganizador"] ?? '';
    $locacion = $postDatos["txtIdLocacion"] ?? '';
    $fechaInicio = $_POST['txtFechaInicio'];
    $fechaFin = $_POST['txtFechaFin'];
    $errores = [];

    // Validación del nombre
    if (empty($nombre)) {
        $errores[] = "El nombre del evento es requerido.";
    } else {
        $postDatos["txtNombre"] = clear_input($nombre);
    }
    // Validación de la selección de tipo de evento
    if (empty($postDatos["txtTipoEvento"]) || $postDatos["txtTipoEvento"] == ' ') {
        $errores[] = "Debes seleccionar un tipo de evento.";
    } else {
        $postDatos["txtTipoEvento"] = htmlentities($postDatos["txtTipoEvento"]);
    }
    // Validación de la selección del cliente del evento
    if (empty($postDatos["txtIdCliente"]) || $postDatos["txtIdCliente"] == ' ') {
        $errores[] = "Debes seleccionar a quién le pertenece el evento.";
    } else {
        $postDatos["txtIdCliente"] = htmlentities($postDatos["txtIdCliente"]);
    }
    // Validación de la selección del organizador del evento
    if (empty($postDatos["txtIdOrganizador"]) || $postDatos["txtIdOrganizador"] == ' ') {
        $errores[] = "Debes seleccionar un organizador que estará a cargo.";
    } else {
        $postDatos["txtIdOrganizador"] = htmlentities($postDatos["txtIdOrganizador"]);
    }
    // Validación de la selección de usuario
    if (empty($postDatos["txtIdLocacion"]) || $postDatos["txtIdLocacion"] == ' ') {
        $errores[] = "Debes seleccionar la locación del evento.";
    } else {
        $postDatos["txtIdLocacion"] = htmlentities($postDatos["txtIdLocacion"]);
    }
    // Validar el formato de la fecha de inicio
    if (empty($fechaInicio)) {
        $errores[] = "La fecha de inicio es requerida.";
    } else {
        $fechaInicioValida = DateTime::createFromFormat('Y-m-d\TH:i', $fechaInicio);
        if (!$fechaInicioValida) {
            $errores[] = "El formato de la fecha de inicio no es válido.";
        } else {
            $postDatos["txtFechaInicio"] = $fechaInicio;
        }
    }
    // Validar el formato de la fecha de fin
    if (empty($fechaFin)) {
        $errores[] = "La fecha de fin es requerida.";
    } else {
        $fechaFinValida = DateTime::createFromFormat('Y-m-d\TH:i', $fechaFin);
        if (!$fechaFinValida) {
            $errores[] = "El formato de la fecha de fin no es válido.";
        } else {
            $postDatos["txtFechaFin"] = $fechaFin;
        }
    }
    return $errores;
}

function validarLocacion($postDatos){/////////////////////////////////////////////////////////////////////////////////////////////////////////
    $nombre = $postDatos["txtNombre"];
    $tipo = $postDatos["txtTipo"] ?? '';
    $ubicacion = $postDatos["txtUbicacion"];
    $capacidad = $postDatos["txtCapacidad"];
    $equipamentoArray = $postDatos['Equipamento'];
    $errores = [];

    // Validación del nombre
    if (empty($nombre)) {
        $errores[] = "El nombre de la locacion es requerido.";
    } else {
        $postDatos["txtNombre"] = clear_input($nombre);
    }
    // Validación de la selección de tipo de locacion
    if (empty($postDatos["txtTipo"]) || $postDatos["txtTipo"] == ' ') {
        $errores[] = "Debes seleccionar un tipo de locacion.";
    } else {
        $postDatos["txtTipo"] = htmlentities($postDatos["txtTipo"]);
    }
    // Validación de la ubicacion de la locacion
    if (empty($ubicacion)) {
        $errores[] = "La ubicacion de la locacion es requerida.";
    } else {
        $postDatos["txtUbicacion"] = clear_input($ubicacion);
    }
    // Validación de la capacidad de la locacion
    if (empty($capacidad)) {
        $errores[] = "La capacidad de la locacion es requerida.";
    } elseif (!ctype_digit($capacidad)) {
        $errores[] = "Escriba la capacidad en números.";
    } else {
        $postDatos["txtCapacidad"] = clear_input($capacidad);
    }
    // Validación del equipamento
    if (empty($equipamentoArray)) {
        $errores[] = "Debes seleccionar al menos un elemento de Equipamento.";
    } else {
        $postDatos["Equipamento"] = $equipamentoArray;
    }
    return $errores;
}
?>

