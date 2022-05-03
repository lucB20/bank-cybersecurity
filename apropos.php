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

    <title>à propos</title>
</head>
<body class="body">
<?php
require "entete.php";
require "asside_hight.php";
?>
<div class="row body">
    <?php require "aside.php"?>
    <section class="container col-xl-9 col-lg-9 col-md-9 offset-2">
        <h2> Qui sommes-nous ?</h2>
        <div class="row partarticles">
            <article class="col-md-7">
                <h3>Notre équipe</h3>
                <p>Nous sommes un groupe d'étudiants de l’IUT Informatique de Belfort-Montbéliard. Dans le cadre de notre projet tutoré de semestre 1, nous avons dû faire des recherches sur un sujet de notre choix. Nous avons choisi la Cybersécurité dans les banques car c’est un sujet d’actualité qui nous concerne tous.</p>
                <p>Notre groupe s'est formé par souci de praticité et d'affinité. Il était à l'origine composé de 5 membres mais une camarade a dû quitter la formation.</p>
            </article>
            <aside class="col-md-5 paddingaside">
                <h3>Nous contacter:</h3>
                <p>BOMPARD Quentin: <a href="mailto:quentin.bompard@edu.univ-fcomte.fr">quentin.bompard@edu.univ-fcomte.fr</a></p>
                <p>BURLET Luc : <a href="mailto:luc.burlet@edu.univ-fcomte.fr">luc.burlet@edu.univ-fcomte.fr</a></p>
                <p>CARRASCO Alexis : <a href="mailto:alexis.carrasco@edu.univ-fcomte.fr">alexis.carrasco@edu.univ-fcomte.fr</a></p>
                <p>FAYE Ludovic: <a href="mailto:ludovic.faye@edu.univ-fcomte.fr">ludovic.faye@edu.univ-fcomte.fr</a></p>
            </aside>
            <article class="col-md-7 row">
                <p class="col-md-6">Luc<img src="images/luc/face_co.png" class="img-fluid rounded"></p>
                <p class="col-md-6">Quentin<img src="images/quentin/Olgus.png" class="img-fluid rounded"></p>
                <p class="col-md-6">Alexis<img src="images/alexis/img.png" class="img-fluid rounded"></p>
                <p class="col-md-6">Ludovic<img src="images/ludovic/photo.webp" class="img-fluid rounded"></p>

            </article>
            <aside class="col-md-5 paddingaside">
                <h3>Emplacement de l'IUT de Belfort</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10752.388997897468!2d6.840703!3d47.643677!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa8bb356e6190f64c!2sIUT%20de%20Belfort-Montb%C3%A9liard%20-%20Universit%C3%A9%20de%20Franche-Comt%C3%A9!5e0!3m2!1sfr!2sfr!4v1606844924345!5m2!1sfr!2sfr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </aside>
        </div>
    </section>
    <section class="container offset-2">
        <h2>Le site</h2>
        <div class="row">
            <article class="col-md-12">
                <h3>Intérêt du site</h3>
                <p>Le but de notre site est d’exposer nos recherches sur notre sujet <strong>La Cybersécurité dans les banques</strong>. Dans cet objectif, nous avons en majeure partie basé ce site sur notre rapport en enlevant les parties superflues pour ne pas surcharger le site. Nous avons cependant ajouté des compléments d’information afin de parfaire les connaissances du lecteur sur le sujet.</p>
                <p>Nous avons séparé nos parties en pages et avons ajouté une page d’accueil ainsi qu’une page sur l’équipe et le site pour que les visiteurs puissent connaître ses objectifs. Cela lui permet également de mieux se repérer dans le site, et nous contacter si besoin.</p>
            </article>
        </div><div class="row">
            <article class="col-md-12">
                <h3>Table des illustrations</h3>
                <p>Les images utilisées ci-dessus sont des photos de profil des membres du groupe sur certains réseaux sociaux</p>
                <h4>La cybercriminalité:</h4>
                <ul>
                    <li><a href="https://www.lepoint.fr/high-tech-internet/l-ue-repondra-aux-cyberattaques-y-compris-par-des-sanctions-19-06-2017-2136603_47.php" target="_blank"><p>Les types de cyberattaques</p></a></li>
                    <li><a href="https://www.rtbf.be/vivacite/emissions/detail_la-vie-du-bon-cote/accueil/article_quel-est-l-impact-de-l-argent-et-des-revenus-sur-notre-bonheur-national-brut?id=10073947&programId=2161" target="_blank"><p>Exemple d'actualité sur les cyberattaques</p></a></li>
                    <li><a href="https://www.zdnet.fr/actualites/comment-a-ete-attaque-le-reseau-electrique-ukrainien-et-les-implications-sur-la-securite-de-l-internet-des-objets-39833726.htm" target="_blank"><p>Déroulement d'une cyberattaque</p></a></li>
                </ul>
                <h4>La cybersécurité bancaire:</h4>
                <ul>
                    <li><a href="https://pixabay.com/fr/illustrations/coffre-fort-voûte-porte-en-acier-913452/" target="_blank"><p>Illustration coffre fort</p></a></li>
                    </ul>
                <h4>La politique et les cyberattaques:</h4>
                <ul>
                    <li><a href="https://pixabay.com/fr/photos/francfort-euro-bce-finances-banque-4994313/" target="_blank"><p>Banque Centrale Européenne</p></a></li>
                    <li><a href="https://pixabay.com/fr/illustrations/police-sécurité-ville-surveillance-2070771/" target="_blank"><p>La cyberguerre</p></a></li>
                    <li><a href="https://pixabay.com/fr/illustrations/cyber-intelligence-artificielle-4062449/" target="_blank"><p>Besoins de spécialistes en cyber sécuritée en janvier 2020</p></a></li>
                </ul>
                <h4>Les conséquences suites aux cyberattaques sur les banques:</h4>
                <ul>
                    <li><a href="https://www.statista.com/statistics/267132/total-damage-caused-by-by-cyber-crime-in-the-us/" target="_blank"><p>Montant total des recettes mondiales du cybercrimes entre 2011 et 2019, enregistré auprès de l'ic3</p></a></li>
                    <li><a href="https://pixabay.com/fr/illustrations/horizontale-solde-symbole-justice-946001/" target="_blank"><p>OLSSI pour les banques</p></a></li>
                    <li><a href="https://www.marketing91.com/difference-between-public-sector-banks-versus-private-sector-banks/" target="_blank"><p>Banque publique et privée</p></a></li>
                </ul>
            </article>
        </div>

    </section>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
<?php include "piedPage.php"?>
</html>