<!-- <?php
// Verificar si se ha envidao el formulario
if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    //RECOGER LOS DATOS DEL FORMULARIO
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);


//     /// MUESTRA LOS DATOS RECOGIDOS
echo "<h1> Datos Recibidos</h1>";
echo "<p><strong> Nombre: </strong> $nombre </p>";
echo "<p><strong> Email: </strong> $correo </p></";
echo "<p><strong> Contrasena: </strong> $telefono </p>";
}else {
    echo '<h1> Acceso No Permitido. </h1>';
}


 ?> -->