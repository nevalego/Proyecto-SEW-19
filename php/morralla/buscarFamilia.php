<?php
require 'darkBD.php';
$db->select_db("db");
if ($_POST) {
    // select * from miembro where apellido like valor
    // select * from familia where nombre like valor
    $cadena = "SELECT * FROM miembro WHERE " . $_POST["parametro"] . " LIKE ?";
    $consultaPre = $db->prepare($cadena);
    $consultaPre->bind_param('s',
        $_POST["valor"]);
    $consultaPre->execute();
    $resultado = $consultaPre->get_result();
    if ($resultado) {
        // Mostrar los datos en un lista
        echo "<p>Datos de la familia" . $_POST["parametro"] . " : " . $_POST["valor"] . "</p>";
        while ($row = $resultado->fetch_assoc()) {
            echo "<p>Nombre: " . $row['nombre'] . "</p>";
            echo "<p>Número de miembros: " . $row['numero'] . "</p>";
            /* IVAN :  Quiero que para esta familia se imprima su info y la de
             cada personaje de la misma*/
        }
    } else {
        echo "Sin resultados";
    }
    $consultaPre->close();
}
$db->close();
?>