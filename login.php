<?php
session_start();
// si on a le username et pwd en post
if(isset($_POST['username']) && isset($_POST['password']))
{
// on se connecte à la base de données
    require_once 'getConnexion.php';
// s'il y a un user avec identifiants
$req= "select * from user where username =:username and password =:pwd "; 
$reponse =$bdd->prepare($req);
$reponse->execute(array(
    'usename'=> $_POST['username'],
    'pwd'=>$_POST['password']
)); 
$user =$reponse->fetch(PDO:: FETCH_OBJ);
}
if ($user){
    $_SESSION['user']= $user->username;
    $_SESSION['role']= $user->role;
    $_SESSION['success']=" Bienvenus ${_SESSION['user']}";
    header(string: 'location:clie.php');
} else{
    $_SESSION['error']="Veuillez vérifier vos identifiants";
    header(string: 'location:connexion.html');
}

 //si pas de post
 else{
    header(string: 'location:connexion.html');
}
?>