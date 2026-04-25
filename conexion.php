 <?php
$host = $_ENV['MYSQLHOST'];
$port = $_ENV['MYSQLPORT'];
$user = $_ENV['MYSQLUSER'];
$pass = $_ENV['MYSQLPASSWORD'];
$db   = $_ENV['MYSQL_DATABASE'];

$con = mysqli_connect($host, $user, $pass, $db, $port);

if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>