<?
error_log("Nuevo formulario");

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    error_log('Nuevo formulario recibido');

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $html = "Hola " . $nombre . " Email= " . $email . " Telefono= " . $telefono . " Mensaje" . $mensaje;
    error_log("=> " . $html);

    $res = mail("work@workinc.com.mx", "Nueva solicitud de contacto", $html);

    //echo "Enviado";
    echo file_get_contents("./index.html");
 }      