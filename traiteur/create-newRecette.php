<?php
require_once("../librairies/outils.php");
$titre=null;
$typeRecette=null;
$recette=null;

if(!empty($_POST['titre'])){
    $titre=$_POST['titre'];
}
if(!empty($_POST['typeRecette'])){
    $typeRecette=$_POST['typeRecette'];
}
if(!empty($_POST['recette'])){
    $recette=$_POST['recette'];
}
if($titre&&$typeRecette&&$recette){
    require_once("connection.php");

    $sql="INSERT INTO `recette`(`titre`, `typeRecette`, `recette`) VALUES (:titre,:typeRecette,:recette)";
    $requette=$conn->prepare($sql);
    $requette->execute([
        "titre"=>$titre,
        "typeRecette"=>$typeRecette,
        "recette"=>$recette
    ]);

    redirection("../index.php");
}
redirection("newRecette.php");