<?php
require_once("core/App/ElementPage.php");
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
    App\ElementPage::render("modifier-recette-template",[
        "reponse"=>$reponse
    ]);
}

