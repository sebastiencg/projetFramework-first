<?php
require_once("librairies/outils.php");
require_once("traiteur/connection.php");

$id = null;

if (ctype_digit($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM `recette` WHERE id=:id";
    $requette = $conn->prepare($sql);
    $requette->execute([
        "id" => $id
    ]);
    $reponse=$requette->fetch();
    render("modifier-recette-template",[
        "reponse"=>$reponse
    ]);
}

