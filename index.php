<?php
require_once("traiteur/connection.php");
require_once("librairies/outils.php");
$sql="SELECT * FROM `recette` ";
$requette=$conn->query($sql);
$reponses=$requette->fetchAll();

render("index-template",
    [
        "reponses"=>$reponses
    ]);
