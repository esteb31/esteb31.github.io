$nombre = $ _POST['nombre'];
$email = $ _POST['email'];
$movil = $ _POST['movil'];
$mensaje = $ _POST['mensaje'];
$para = 'aquir.eqs@gmail.com';
$titulo = 'Hola - Prueba';
 
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\Movil: $movil\n Mensaje:\n $mensaje";
 
if ($ _POST['submit']) {
if (mail ($para, $titulo, $msjCorreo)) {
echo 'El mensaje se ha enviado';
} else {
echo 'Falló el envio';
}
}