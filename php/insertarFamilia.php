<?php
require 'crearBD.php';
$valido = false;
$error = "Error: ";
if (sizeof($_POST) > 1) {
    if ("" == trim($_POST["nombre"])) {
        $error .= "nombre vacío.";
    } elseif ("" == trim($_POST["numero"]) || is_numeric($_POST["numero"]) === false) {
        $error .= "numero de miembros vacío.";
    } else {
        $valido = true;
    }
}
if (sizeof($_POST) > 1 && $valido == 0)
    echo '<script>alert("' . $error . '");</script>';
$db->select_db("db");
if ($_POST && $valido == 1) {
    $consultaPre = $db->prepare("INSERT INTO miembro (nombre,numero) VALUES (?,?)");
    $consultaPre->bind_param('ssssiid',
        $_POST["nombre"], $_POST["numero"]);
    $consultaPre->execute();
    echo "<p>Filas agregadas: " . $consultaPre->affected_rows . "</p>";
    $consultaPre->close();
}
$db->close();
?>