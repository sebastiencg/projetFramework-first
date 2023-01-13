<?php
require_once("connection.php");
require_once("../librairies/outils.php");

$commentaire = null;
$id_recette = null;

if (!empty($_POST['commentaire'])) {
    $commentaire = $_POST['commentaire'];
}
if (!empty($_POST['id_recette'])) {
    if (ctype_digit($_POST['id_recette'])){
        $id_recette = $_POST['id_recette'];
    }
}
if ($id_recette && $id_recette) {

    $sql = "INSERT INTO `commentaire-recettte`(`commentaire`, `id_recette`) VALUES (:commentaire,:id_recette)";
    $requette = $conn->prepare($sql);
    $requette->execute([
        "commentaire" => $commentaire,
        "id_recette" => $id_recette
    ]);
}
redirection("../info.php?id=$id_recette");