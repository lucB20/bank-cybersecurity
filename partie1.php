<!doctype html>
<html lang="fr">
<?php

require "calc.php";

$page = basename(__FILE__);

?>
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="css/<?php echo $theme ?>/entete.css">
    <link rel="stylesheet" href="css/main.css">

    <title>La cybercriminalité</title>
</head>
<body class="body">
<?php
require "entete.php";
require "asside_hight.php";

$partie  = file_get_contents('texts/quentin.txt');
$souspartie = explode("§§§", $partie);
?>
<div class="row body">
    <?php require "aside.php"?>
    <section class="container col-xl-9 col-lg-9 col-md-9 offset-2">
        <?php echo "<h2>".$souspartie[0]."</h2>";?>
        <div class="row">
            <div class="col align-self-start"></div>
            <div class="align-self-end">
                <a class="btn btn-secondary text-end" href="partie2.php" role="button">Suivant</a>
            </div>
        </div>
        <div class="row partarticles">
            <article class="col-md-8">
                <?php
                $para=explode("§§",$souspartie[1]);
                echo"<h3>".$para[0]."</h3>";
                array_splice($para, 0, 1);
                foreach ($para as $par){
                    echo "<p>".$par."</p>";
                }
                ?>
                </article>
            <aside class="col-md-4 paddingaside">
                <h3>Les types de cyberattaques</h3>
                <a href="https://www.lepoint.fr/high-tech-internet/l-ue-repondra-aux-cyberattaques-y-compris-par-des-sanctions-19-06-2017-2136603_47.php"><img src="images/quentin/types_attaque.png" alt="chargement" class="img-fluid"></a>
            </aside>
        </div>
        <div class="row partarticles">
            <article class="col-md-8">
                <?php
                $para=explode("§§",$souspartie[2]);
                echo"<h3>".$para[0]."</h3>";
                array_splice($para, 0, 1);
                foreach ($para as $par){
                    echo "<p>".$par."</p>";
                }
                ?>
            </article>
            <aside class="col-md-4 paddingaside">
                <img src="images/quentin/cochon.png" alt="chargement" class="img-fluid">
                Exemple d'actualité sur les cyberattaques :
                <ul>
                <li><a href="https://www.bfmtv.com/tech/etats-unis-une-cyberattaque-prive-115-000-eleves-de-cours_AN-202011300269.html">Exemple d'actualité sur les cyberattaques écolière</a></li>
                <li><a href=" https://www.futura-sciences.com/tech/actualites/cybersecurite-centaines-hopitaux-victimes-cyberattaque-precedent-etats-unis-83879/">exemple d'actualité sur les cyberattaques médicale</a></li>
                <li><a href="https://www.zdnet.fr/actualites/plusieurs-banques-d-europe-de-l-est-perdent-des-dizaines-de-millions-de-dollars-dans-un-piratage-hollywoodien-39877811.htm">exemple d'actualitée sur les cyberattaques banquaire</a></li>
                </ul>
            </aside>
        </div>
        <div class="row partarticles">
            <article class="col-md-8">
                <?php
                $para=explode("§§",$souspartie[3]);
                echo"<h3>".$para[0]."</h3>";
                array_splice($para, 0, 1);
                foreach ($para as $par){
                    echo "<p>".$par."</p>";
                }
                ?>
            </article>
            <aside class="col-md-4 paddingaside">
                <h3>Déroulement d'une cyberattaque</h3>
                <a href="https://www.zdnet.fr/actualites/comment-a-ete-attaque-le-reseau-electrique-ukrainien-et-les-implications-sur-la-securite-de-l-internet-des-objets-39833726.htm"><img src="images/quentin/etapes.png" alt="chargement" class="img-fluid"></a>
            </aside>
        </div>

        </section>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
<?php include "piedPage.php"?>
</html>
