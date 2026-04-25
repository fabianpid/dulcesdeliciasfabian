 <?php
$host = $_ENV['MYSQLHOST'];
$port = $_ENV['MYSQLPORT'];
$user = $_ENV['MYSQLUSER'];
$pass = $_ENV['MYSQLPASSWORD'];
$db   = $_ENV['MYSQLDATABASE'];

$con = mysqli_connect($host, $user, $pass, $db, $port);

if (!$con) {
    // Si falla, intentamos con $_SERVER por si acaso
    $host = $_SERVER['MYSQLHOST'];
    $port = $_SERVER['MYSQLPORT'];
    $user = $_SERVER['MYSQLUSER'];
    $pass = $_SERVER['MYSQLPASSWORD'];
    $db   = $_SERVER['MYSQLDATABASE'];
    
    $con = mysqli_connect($host, $user, $pass, $db, $port);
}

if (!$con) {
    die("Error fatal de conexión: " . mysqli_connect_error());
}
?>