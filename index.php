<!DOCTYPE html>
<html>
    <head>
    <title>Practica 02</title>
     <p>Genesis Dulce Maria Ordoñez Pérez</p> 
     <link rel="stylesheet" href="style.css">
    </head>
</html>
<?php

require_once("escuela.php");

$Construccion = new Construc("Claudio Perez",60,"Jardines");
$arrayConstruccion = $Construccion -> getDatos();

echo "<pre>";
print_r($arrayConstruccion);
echo "</pre>";

$Casas = new Casas("Frida Martinez", 30, "Teran", 1, 3);
$arrayCasa = $Casas -> getDatos();

echo "<pre>";
print_r($arrayCasa);
echo "</pre>";

$Escuela = new Escuelas("Alfonso Estrada", 50, "Centro", 1, 15, 3, 1);
$arrayEscuela = $Escuela -> getDatos();

echo "<pre>";
print_r($arrayEscuela);
echo "</pre>";
?>