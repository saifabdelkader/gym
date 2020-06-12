<?php


// Post Data:
$zone = $_POST['zone'];
$prix = $_POST['prix'];
$type = $_POST['type'];
// Requete :

$req = "select * from sportindiv where (sport = :typ) and (zone = :zon) and (prix <= :pr) ";

$reponse = $bdd->prepare($req);
$reponse->execute(array(
    ':typ' => $type,
    ':zon' => $zone,
    ':pr' => $prix

));
$resultat = $reponse->fetchAll();

