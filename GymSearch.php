<?php


// Post Data:
$zonee = $_POST['zone'];
$prix = $_POST['prix'];
$type = $_POST['type'];
// Requete :

$req = "select * from sportindiv where prix <= :pr AND zone = :zon AND sport = :typ ";

$reponse = $bdd->prepare($req);
$reponse->execute(array(
    ':typ' => $type,
    ':zon' => $zonee,
    ':pr' => $prix

));
$resultat = $reponse->fetchAll();

