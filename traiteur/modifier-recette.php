<?php
require_once("../librairies/outils.php");
require_once("../core/App/Redirection.php");

$id=null;
$titre=null;
$typeRecette=null;
$recette= null;
if(!empty($_POST['titre'])){
    $titre=$_POST['titre'];
}
if(!empty($_POST['recette'])){
    $recette=$_POST['recette'];
}
if(!empty($_POST['typeRecette'])){
    $typeRecette=$_POST['typeRecette'];
}
if (!empty($_POST['id'])){
    if(ctype_digit($_POST['id'])){
        $id=$_POST['id'];
    }
}
if($titre&&$typeRecette&&$recette&&$id){
    require_once('connection.php');
    $sql="UPDATE `recette` SET `titre`=:titre,`typeRecette`=:typeRecette,`recette`=:recette WHERE id=:id";
    $requette=$conn->prepare($sql);
    $requette->execute([
        "id"=>$id,
        "titre"=>$titre,
        "typeRecette"=>$typeRecette,
        "recette"=>$recette
    ]);
}
App\Redirection::redirection("");
