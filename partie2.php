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

    <title>La cybersécurité bancaire</title>
</head>
<body class="body">
<?php
require "entete.php";
require "asside_hight.php";

$partie  = file_get_contents('texts/altexis.txt');
$souspartie = explode("§§§", $partie);
?>
<div class="row body">
    <?php require "aside.php"?>
    <section class="container col-xl-9 col-lg-9 col-md-9 offset-2">
        <?php echo "<h2>".$souspartie[0]."</h2>";?>
        <div class="row">
            <div class="col align-self-start"></div>
            <div class="align-self-end">
                <a class="btn btn-secondary text-start" href="partie1.php" role="button">Précedent</a>
                <a class="btn btn-secondary text-end" href="partie3.php" role="button">Suivant</a>
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
            <aside class="col-md-3 paddingaside">
                <img src="images/alexis/safe-913452_1920.jpg" alt="chargement" class="img-fluid">
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
        </div>

        </section>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
<?php include "piedPage.php"?>
</html>
