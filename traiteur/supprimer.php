<?php
require_once("../librairies/outils.php");
$id=null;
if (!empty($_GET['id'])){
    if(ctype_digit($_GET['id'])){
        $id=$_GET['id'];

        require_once('connection.php');
        $sql="DELETE FROM `recette` WHERE id=:id";
        $requette=$conn->prepare($sql);
        $requette->execute([
            "id"=>$id
        ]);
    }
}
redirection("../index.php");
