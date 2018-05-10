<?
error_log("Nuevo formulario");

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    error_log('Nuevo formulario recibido');

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $comentario = $_POST["comentario"];

    $html = "Hola " . $nombre . " Apellido " . $apellido . " Email= " . $email . "Comentario" . $comentario;
    error_log("=> " . $html);

    $res = mail("work@workinc.com.mx", "Nueva solicitud de contacto", $html);

    //echo "Enviado";
    echo file_get_contents("./index.html");
 }      
 ?>