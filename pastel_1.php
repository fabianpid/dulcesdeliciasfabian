
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("conexion.php");
if(isset($_POST['enviar'])){
    // 1. Recibimos datos
    $nombre = $_POST['nombre'];
    $telefono = $_POST['teléfono'];
    $mensaje = $_POST['mensaje'];
    $correo = $_POST['correo'];
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    // 2. Intentamos insertar
   $sql = "INSERT INTO información (nombre, télefono, mensaje, correo, producto, cantidad) VALUES ('$nombre', '$télefono', '$mensaje', '$correo', '$producto', '$cantidad')";
    $query = mysqli_query($con, $sql);

    if($query){
        echo "¡Éxito! Usuario insertado.";
    } else {
        // ESTA LÍNEA ES CLAVE: Te dirá qué tiene de malo tu base de datos
        echo "Error de SQL: " . mysqli_error($con);
    }
} else {
    echo "El formulario no está enviando el nombre 'enviar'.";
}
?>