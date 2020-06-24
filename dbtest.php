<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");

try {
  $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpwd);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Estas conectado a la base de datos " .  getenv("MYSQL_DATABASE");
  echo "<br><br><a style='color: red' href='index.php'><- Regresar</a> ";
} catch(PDOException $e) {
  echo "No se pudo conectar a la base de datos:: " . $e->getMessage();
}

$conn = null;
?>
