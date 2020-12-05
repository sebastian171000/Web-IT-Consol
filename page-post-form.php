<?php session_start(); 
if(isset($_POST)){
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $empresa = isset($_POST['empresa']) ? $_POST['empresa'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';
    $pagina = isset($_POST['pagina']) ? $_POST['pagina'] . '#contacto' : '';
    $destinatario = 'fabiola201811028@gmail.com';
    $asunto = 'Contacto desde nuestra web';
    $carta = "De: $nombre \n";
    $carta .= "Empresa: $empresa \n";
    $carta .= "Correo: $email \n";
    if($telefono != ''){
        $carta .= "Telefono: $telefono \n";
    }
    $carta .= "Mensaje: $mensaje";

    mail($destinatario,$asunto,$carta);
    if(mail){
        $_SESSION['completado'] = "Se envio exitosamente";
    }
    

}

header("Location: $pagina"); ?>