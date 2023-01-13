<?php

$sql="SELECT * FROM `commentaire-recettte` WHERE id_recette=:id";
$requette=$conn->prepare($sql);
$requette->execute([
    "id"=>$id
]);
$reponses=$requette->fetchAll();
