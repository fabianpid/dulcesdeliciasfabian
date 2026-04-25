 <?php
// Datos de conexión usando las variables de Railway
$host = getenv('MYSQLHOST');
$port = getenv('MYSQLPORT');
$user = getenv('MYSQLUSER');
$pass = getenv('MYSQLPASSWORD');
$db   = getenv('MYSQLDATABASE');

// La variable se debe llamar $con porque así la usas en tu archivo pastel_1.php
$con = mysqli_connect($host, $user, $pass, $db, $port);
if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>