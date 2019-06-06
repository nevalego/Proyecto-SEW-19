<?php
$db = new mysqli('localhost','DBUSER2018','DBPSWD2018');
if ($db->connect_error) {
    echo "<h2>ERROR de conexión:" . $db->connect_error . ". No existe el usuario</h2>";
    exit();
} else {
    echo "<h2>Conexión establecida.</h2>";
}
?>
