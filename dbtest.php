<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("No se pudo conectar a la base de datos: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Estas conectado a la base de datos %s\n", getenv("MYSQL_DATABASE"));
}
$connection->close();
?>
