<?php
require 'crearBD.php';
$valido = false;
$error = "Error: ";
if (sizeof($_POST) > 1) {
    if ("" == trim($_POST["nombre"])) {
        $error .= "nombre vacío.";
    } elseif ("" == trim($_POST["apellido"])) {
        $error .= "apellido vacío.";
    } elseif ("" == trim($_POST["edad"]) || is_numeric($_POST["edad"]) === false) {
        $error .= "edad vacío.";
    } elseif ("" == trim($_POST["año"]) || is_numeric($_POST["año"]) === false) {
        $error .= "año vacío.";
    }elseif ("" == trim($_POST["oficio"])) {
        $error .= "oficio vacío.";
    }else {
        $valido = true;
    }
}
if (sizeof($_POST) > 1 && $valido == 0)
    echo '<script>alert("' . $error . '");</script>';
$db->select_db("db");
if ($_POST && $valido == 1) {
    $consultaPre = $db->prepare("INSERT INTO miembro (nombre,apellido,edad,año,oficio) VALUES (?,?,?,?,?)");
    $consultaPre->bind_param('ssssiid',
        $_POST["nombre"], $_POST["apellido"], $_POST["edad"], $_POST["año"], $_POST["oficio"]);
    $consultaPre->execute();
    echo "<p>Filas agregadas: " . $consultaPre->affected_rows . "</p>";
    $consultaPre->close();
}
$db->close();
?>