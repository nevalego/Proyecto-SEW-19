<?php

session_start();


class Database
{
    public function initBasedatos()
    {
        $db = new mysqli('localhost', 'DBUSER2018', 'DBPSWD2018');
        if ($db->connect_error) {
            echo "<h2>ERROR de conexión:" . $db->connect_error . ". No existe el usuario</h2>";
            exit();
        } else {
            echo "<h2>Conexión establecida</h2>";
        }

        $SQL = "CREATE DATABASE IF NOT EXISTS dark COLLATE utf8_spanish_ci";
        if ($db->query($SQL) === TRUE) {
            echo "<h2>Base de datos Dark creada(o ya existe)</h2>";
        } else {
            echo "<h2>ERROR en la creación de la Base de Datos Dark</h2>";
            exit();
        }

        $_SESSION["db"]=$db;
    }

    public function crearTablas()
    {
        $this->initBasedatos();
        $db = $_SESSION["db"];

        $crearPersonaje = "CREATE  TABLE IF NOT EXISTS personaje(
                    miembro_id varchar(50) not null,
                    nombre varchar(15) not null,
                    apellido varchar(15) not null,
                    edad numeric,
                    oficio varchar(15),
                    FOREIGN KEY(familia_id) REFERENCES familia(familia_id))";

        if ($db->query($crearPersonaje) == TRUE) {
            echo "<p> Tabla Personaje creada (o ya existe)</p>";
        } else {
            echo "<p>Error creando la tabla Personaje</p>";
            exit();
        }

        $crearFamilia = "CREATE  TABLE IF NOT EXISTS familia(
                    familia_id varchar(50) not null,
                    nombre varchar(15) not null,
                    numero numeric)";

        if ($db->query($crearFamilia) == TRUE) {
            echo "<p> Tabla Familia creada (o ya existe)</p>";
        } else {
            echo "<p>Error creando la tabla Familia</p>";
            exit();
        }

        $crearActor = "CREATE TABLE IF NOT EXISTS actor(
                    actor_id varchar(50) not null,
                    nombre varchar(15) not null,
                    apellido varchar(15) not null,
                    edad numeric,
                    nacionalidad varchar(30)
                    FOREIGN KEY(id_personaje) REFERENCES personaje
                    )";


        $db->close();
    }

    public function cargarDatos()
    {

    }

    public function listarPersonajes()
    {

    }

    public function listarPersonajesFamilia()
    {

    }

    public function buscarPersonajesAño()
    {

    }
}

?>
