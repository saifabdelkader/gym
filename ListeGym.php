<!DOCTYPE html>
<html lang="en">

<head>

    <title>Gym life</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/card.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-gymso-style.css">
    <!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

<!-- MENU BAR -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">

        <a class="navbar-brand" href="index.html">StoreSport</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a href="index.html" class="nav-link smoothScroll">ACCUEIL</a>
                </li>

                <li class="nav-item">
                    <a href="index.html" class="nav-link smoothScroll">À PROPOS</a>
                </li>

                <li class="nav-item">
                    <a href="index.html" class="nav-link smoothScroll">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link smoothScroll">connexion</a>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link smoothScroll">Contact</a>
                </li>
            </ul>

            <ul class="social-icon ml-lg-3">
                <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-instagram"></a></li>
            </ul>
        </div>

    </div>
</nav>
<section class="hero d-flex flex-column justify-content-center align-items-center" id="home">
    <div class="bg-overlay"></div>

    <!-- Cards -->
    <div class="container">
        <div class="heading">
        </div>
        <br><br>

        <!-- Base de donnée -->
        <?php
        try {
            //Se connecter à la base de données
            $bdd = new PDO("mysql:host=localhost;dbname=gymlist", 'root', '',
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
                )
            );
            // Gérer l'erreur
        } catch (PDOException $error) {
            echo $error->getMessage();
        }

        $req = 'select * from ariana';
        $response = $bdd->query($req);


        $resultat = $response->fetchAll(); ?>


        <div class="row">
            <!-- Affichage -->
            <?php foreach ($resultat

                           as $value) { ?>
                <div class="card">
                    <div class="card-header">
                        <h1><img src="" alt="<?php echo $value[1] ?>"></h1>
                    </div>
                    <div class="card-body">
                        <p>
                            <?php echo $value['Adresse'] ?>
                        </p>
                        <a href= '<?php echo $value['LienGMaps'] ?>' class="btn">Voir sur Carte</a>
                    </div>
                </div>

            <?php } ?>
        </div>

    </div>


</section>