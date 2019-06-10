<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML de pruebas PHP - Proyecto Dark - Software y Estándares para la Web</title>
    <meta name="author" content="Nerea Valdés Egocheaga"/>
    <meta name="description" content="Pruebas PHP Dark"/>
    <meta name="keywords" content="HTML,Dark,series,Netflix,PHP"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<header>
    <h1>PHP BD Dark</h1>
</header>
<main>

    <?php
    include("darkBD.php");
    $darkBD = new Database();

    $darkBD->initBasedatos();
    $darkBD->cargarDatos();

    if(count($_POST) > 0){

    }
    echo "<button onclick=$darkBD->listarPersonajes()>Listar Personajes</button>
            <p>Introduce familia: <input name='Familia'/>
            <button onclick=$darkBD->listarPersonajesFamilia()>Listar Familia</button></p>"

    ?>
</main>
</body>
<footer>
    <h4>Más información:</h4>
    <address>
        <p> Autor: Nerea Valdés Egocheaga</p>
        <p>Más detalles:
            <a href="mailto:nereavaldes@outlook.com">nereavaldes@outlook.com</a></p></address>

    <p>
        <a href="http://validator.w3.org/check/referer" hreflang="en-us"> <img
                src="../multimedia/valid-html5-button.png"
                alt="¡HTML5  válido!" height="31"
                width="87"/></a>
        <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://di002.edv.uniovi.es/~cueva/css/miestilo.css"><img
                height="31" width="88" src="../multimedia/vcss.gif" alt="¡CSS válido!"/></a>
    </p>
</footer>
</html>