<?php
$db = new mysqli('localhost','DBUSER2018','DBPSWD2018');
if ($db->connect_error) {
    echo "<h2>ERROR de conexión:" . $db->connect_error . ". No existe el usuario</h2>";
    exit();
} else {
    echo "<h2>Conexión establecida.</h2>";
}

//$sql = 'CREATE DATABASE bd';
//if(mysql_query($sql, $enlace)){
//    echo "La base de datos bd se creó correctamente\n";
//}else{
//    echo "Error en la creación de la base de datos: " . mysql_error() . "\n";
//}

?>
