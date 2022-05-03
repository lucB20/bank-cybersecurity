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

    <title>Les conséquences suites au Cyberattaques sur les banques</title>
</head>
<body class="body">
<?php
require "entete.php";
require "asside_hight.php";

$partie  = file_get_contents('texts/ludovic.txt');
$souspartie = explode("§§§", $partie);
?>
<div class="row body">
    <?php require "aside.php"?>
    <section class="container col-xl-9 col-lg-9 col-md-9 offset-2">
        <?php echo "<h2>".$souspartie[0]."</h2>";?>
        <div class="row">
            <div class="col align-self-start"></div>
            <div class="align-self-end">
                <a class="btn btn-secondary text-start" href="partie3.php" role="button">Précedent</a>
            </div>
        </div>
        <div class="row partarticles">
            <article class="col-md-8">
                <?php
                $para=explode("§§",$souspartie[1]);
                echo"<h3>".$para[0]."</h3>";
                array_splice($para, 0, 1);
                foreach ($para as $par){
                    if (strpos($par,"µµ")){
                        $list=explode("µµ",$par);
                        echo "<ul class='raprochehaut'>";
                    foreach ($list as $pt){
                        if (strpos($pt,"µ")){
                            $sousliste=explode("µ",$pt);
                            echo "<ul>";
                            foreach ($sousliste as $souspt){
                                echo "<li>".$souspt."</li>";
                            }
                            echo "</ul>";

                        }else {
                            echo "<li>" . $pt . "</li>";
                        }
                    }
                    echo "</ul>";

                    }else{
                        echo "<p>".$par."</p>";
                    }

                }
                ?>
                </article>
            <aside class="col-md-4 paddingaside">
                <h3>Montant total des recettes mondiales du cybercrimes entre 2011 et 2019, enregistré auprès de l'ic3</h3>
                <a href="https://www.statista.com/statistics/267132/total-damage-caused-by-by-cyber-crime-in-the-us/"><img src="images/ludovic/total-damage-caused-by-by-cyber-crime-in-the-us.png" class="img-fluid" alt="chargement"></a>
            </aside>
        </div>
        <div class="row partarticles">
            <article class="col-md-8">
                <?php
                $para=explode("§§",$souspartie[2]);
                echo"<h3>".$para[0]."</h3>";
                array_splice($para, 0, 1);
                foreach ($para as $par){
                    if (strpos($par,"µµ")){
                        $liste=explode("µµ",$par);
                        echo "<ul class='raprochehaut'>";
                        foreach ($liste as $pt){
                            echo "<li>".$pt."</li>";
                        }
                        echo "</ul>";

                    }else {
                        echo "<p>".$par."</p>";
                    }
                }
                ?>
            </article>
            <aside class="col-md-4 paddingaside">
                <h3>OLSSI pour les banques</h3>
                <a href="https://www.ledieu-avocats.fr/cyber-securite-obligation-legale-de-securisation-des-systemes-dinformation/"><img src="images/ludovic/balance.png" alt="chargement" class="img-fluid"></a>
            </aside>
        </div>
        <div class="row partarticles">
            <article class="col-md-8">
                <?php
                $para=explode("§§",$souspartie[3]);
                echo"<h3>".$para[0]."</h3>";
                array_splice($para, 0, 1);
                foreach ($para as $par){
                    if (strpos($par,"µµ")){
                        $liste=explode("µµ",$par);
                        echo "<ul class='raprochehaut'>";
                        foreach ($liste as $pt){
                            echo "<li>".$pt."</li>";
                        }
                        echo "</ul>";

                    }else {
                        echo "<p>".$par."</p>";
                    }
                }
                ?>
            </article>
            <aside class="col-md-4 paddingaside">
                <h3>Banque publique et privée</h3>
                <a href="https://www.marketing91.com/difference-between-public-sector-banks-versus-private-sector-banks/"><img src="images/ludovic/typebanque.png" alt="chargement" class="img-fluid"></a>
            </aside>
        </div>

        </section>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
<?php include "piedPage.php"?>
</html>
