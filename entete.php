<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <h1 class="nav_title" >La sécurité informatique dans les banques</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav_link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Parties
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="partie1.php">La cybercriminalité</a>
                        <a class="dropdown-item" href="partie2.php">La cybersécurité bancaire</a>
                        <a class="dropdown-item" href="partie3.php">La politique et les cyberattaques</a>
                        <a class="dropdown-item" href="partie4.php">Les conséquences suites aux cyberattaques</a>
                    </div>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav_link" href="apropos.php">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav_link" href="<?php echo $page ?>?theme=<?php

                    if($theme == "dark"){
                        echo "light";
                    }else{
                        echo "dark";
                    }

                    ?>">Passer thème <?php

                        if($theme == "dark"){
                            echo "clair";
                        }else{
                            echo "sombre";
                        }

                        ?></a>
                </li>
            </ul>
        </div>
    </nav>



</header>