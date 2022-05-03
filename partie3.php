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

    <title>La politique et les <cyberattaques></cyberattaques></title>
</head>
<body class="body">
<?php
require "entete.php";
require "asside_hight.php";

$partie  = file_get_contents('texts/luc.txt');
$souspartie = explode("§§§", $partie);
?>

<div class="row body">
    <?php require "aside.php"?>
    <section class="container col-xl-9 col-lg-9 col-md-9 offset-2">

        <?php echo "<h2>".$souspartie[0]."</h2>";?>
        <div class="row">
            <div class="col align-self-start"></div>
            <div class="align-self-end">
                <a class="btn btn-secondary text-start" href="partie2.php" role="button">Précedent</a>
                <a class="btn btn-secondary text-end" href="partie4.php" role="button">Suivant</a>
            </div>
        </div>
        <div class="row partarticles">

            <article class="col-md-8 inline">

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
                <h3>Besoins de spécialistes en cyber sécuritée en janvier 2020</h3>
                <a href="https://www.usinenouvelle.com/article/cybersecurite-recherche-experts-desesperement.N919064"><img src="images/luc/besoinmainsouvre.jpg" alt="chargement" class="img-fluid"></a>
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
                <h3>Banque Centrale Européenne</h3>
                <a href="https://www.ecb.europa.eu"><img src="images/luc/frankfurt-4994313_1920.jpg" alt="chargement" class="img-fluid"></a>
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
                <h3>La cyberguerre</h3>
                <a href="https://fr.wikipedia.org/wiki/Cyberguerre#Mise_en_place_de_protections_par_les_États"><img class="img-fluid" alt="chargement" src="images/luc/police-2070771_1920.jpg"></a>
            </aside>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
<?php include "piedPage.php"?>
</html>
