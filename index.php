<?php
    require "calc.php";

    $page = basename(__FILE__);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" href="images/">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="css/<?php echo $theme ?>/entete.css">
    <link rel="stylesheet" href="css/<?php echo $theme ?>/index.css">
    <link rel="stylesheet" href="css/main.css">

    <title>La cybersécurité dans les banques</title>
</head>
<body id="body body_index" class="body">
<?php
require "entete.php";
require "asside_hight.php";
?>
<div class="row index_title">
    <?php require "aside.php"?>
    <div class="container-fluid col-xl-8 col-lg-8 col-md-8 offset-2 index_prem row align-items-center text-center">
            <div class="col">
                <h2>La sécurité informatique dans les banques</h2>
                <a href="partie1.php" id="start_button"><div><h4>Commencer la visite</h4></div></a>
            </div>
    </div>
    <div class="col-9 offset-2 container index_intro">
        <p>Les banques sont depuis leur existence la cible des personnes malveillantes. En effet, les banques regroupent beaucoup de richesses en un lieu unique. Aujourd’hui beaucoup de choses sont dématérialisées. De ce fait, l’argent est dorénavant, majoritairement stocké sous forme numérique. Les malfrats ont ainsi su s’adapter aux nouvelles technologies. Puisque l’argent est essentiel au fonctionnement de notre société, si une banque perd les fonds d’un client, ce dernier se retrouvera en grande difficulté si elle n’a pas de possibilité de récupérer son argent. C’est pourquoi la sécurité des banques doit être maximale. Pour organiser les informations que nous avons récoltées, nous avons créé un site internet pour faciliter l’accès et la lisibilité des informations.</p>
        <p>Ce site Internet expliquera le concept de cyberattaque, ainsi que de cybersécurité. Il étudiera également l’aspect international des effets de la cyberattaque, ainsi que les aspects juridiques et économiques.</p>
    </div>
</div>

<?php

include "piedPage.php";

?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>