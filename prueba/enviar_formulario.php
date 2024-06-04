<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $_POST['nombres'];
    $rubro = $_POST['rubro'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $ubicacion = $_POST['ubicacion'];
    $localidad = $_POST['localidad'];

    // Crear el mensaje de correo electrónico
    $mensaje = "Nombre de la empresa: $nombres\n";
    $mensaje .= "Rubro: $rubro\n";
    $mensaje .= "Teléfono: $telefono\n";
    $mensaje .= "Correo electrónico de contacto: $correo\n";
    $mensaje .= "Ubicación: $ubicacion\n";
    $mensaje .= "Localidad: $localidad\n";

    // Enviar el correo electrónico
    $destinatario = 'jmatiascarmody@gmail.com';
    $asunto = 'Nuevo formulario de empresa/empleado';
    mail($destinatario, $asunto, $mensaje);

    // Redireccionar a una página de confirmación o mostrar un mensaje de éxito
    header('Location: confirmacion.html');
} else {
    // Manejar la solicitud GET (si es necesario)
    echo 'No se recibieron datos por POST';
}
?>
