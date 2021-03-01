<?php

require_once 'connect_db.php';
require_once 'methods.php';

//Levatar datos del form


$name = $_POST['name1'];
$description = $_POST['description'];
$image = $_POST['submitImg1'];
$tech = $_POST['html'];
$gitHub = $_POST['github'];
$mail = $_POST['email2'];
$linkedin = $_POST['linkedin'];

$datos = array(
    $name,
    $description,
    $image,
    $tech,
    $gitHub,
    $mail,
    $linkedin,
);
$obj = new methods();

//Este if rompe todo...
if ($obj->subirProyecto($datos) == 1) {
    header("location:index.php");
} else {
    echo "Fallo la carga";
};
