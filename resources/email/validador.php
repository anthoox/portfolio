<?php
$error = true;

    if(!empty($_POST['nombre']) && !empty($_POST['mensaje']) 
    && !empty($_POST['email'])){
        $error = 'ok';

        $nombre = $_POST['nombre'];
        $mensaje = $_POST['mensaje'];

        $email = $_POST['email'];


        // Validar nombre
        if(!is_string($nombre) || preg_match("/[0-9]+/", $nombre)){ // -> si no es un string o si no es un formato valido
            $error = 'nombre';
        }

        // Validar mensaje
        if(!is_string($mensaje)){
            $error = 'mensaje';
        }
        // Validar email
        if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si no es un error o no es un email
            $error = 'email';
        }

        $error = false;
        $datosForm = ['nombre' => $nombre, 'email' => $email, 'mensaje' => $mensaje];
    }
    




?>
