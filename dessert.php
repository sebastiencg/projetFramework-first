<?php
require_once("librairies/outils.php");
require_once("traiteur/connection.php");

$sql="SELECT * FROM `recette` WHERE typeRecette='dessert'";
$requette=$conn->query($sql);
$reponses=$requette->fetchAll();

render("index-template",[
    "reponses"=>$reponses
]);
