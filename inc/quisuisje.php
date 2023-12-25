

    <body>
    <div id="balise"></div>
    <div id="acceuil"></div>
    <?php 
    require_once("yaml/yaml.php");

    $data=yaml_parse_file('inc/images.yaml');
    $titrefilm=$data["titre"]["film"];
    $titremanga=$data["titre"]['manga'];
    $imagesfilm=$data["images"]["film"];
    $imagesmanga=$data["images"]["manga"];
    $icones=$data["images"]["icones"];
    $me=$data["images"]["me"];
    
    ?>
    <div class="wrap">
    <section id="groupe1">
        
        <div class="bar"></div>
        <div class="container text-center">
    <div id="top" class="row">
        <div class="col">
        <h3 id="titreblabla">Un "jeune" développeur | Administrateur réseau</h3>
            <p id="blabla1">Etudiants à Caen Sup Sainte-Ursule, j'ai eu pour projet de crée un site retraçant mon parcours et mes envies</p>
        </div>
        <div class="col">

        <img id="me" src="<?=$me[0]?>">
        </div>
    </div>
</div> 
    </section>
    
    <h1 class="onglet">Qui suis-je ?</h1>
    <h2 class="passion">Mes passions :</h2>
    <h3 class="hfilm">Cinéma</h2>
    <div class="container">
        <div>
            <p class="description_passion">
                Le cinéma est l'un des arts qui me touche le plus, j'ai toujours aimer allez au cinema, j'aime tout les style hormis l'horreur. J'aime comprendre le fonctionnement et les histoires crée par les réalisateurs et les acteurs me font voyager et me donne souvent des idées dans la création de site web ou d'application.
            </p>
        </div>
        <div class="imgcinema">
             <img class="iconcinema" src="<?=$icones[0]?>">   
        </div>        
    </div>
    <div>
        <h4 class="hfilm">Mon top 3</h4>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-lg-4">
            <img class="film" src="<?=$imagesfilm[0]?>">
            <p class="pfilm"><?=$titrefilm[0]?></p>
        </div>
        <div class="col-lg-4">
            <img class="film" src="<?=$imagesfilm[1]?>">
            <p class="pfilm"><?=$titrefilm[1]?></p>
        </div>
        <div class="col-lg-4">
            <img class="film" src="<?=$imagesfilm[2]?>">
            <p class="pfilm"><?=$titrefilm[2]?></p>
        </div>
    </div>
    </div>
    <div>
    <h3 class="hfilm">Manga</h3>
    <div class="container">
        <div class="manga">
            <p class="description_passion">
                J'ai toujours aimé lire mais je l'avoue j'ai une préférence pour le manga, je trouve que son format incite a lire et permet de découvir de nouveau horizon, de nouvelle culture et par la même occasion permettre d'élargir son imagination et sa créativité
            </p>
        </div>
        <div class="imgcinema">
             <img class="iconcinema" src="<?=$icones[1]?>">   
        </div>        
    </div>

    <h4 class="hfilm">Mon top 3</h4>
<div class="container">
<div class="row">
    <div class="col-lg-4">
        <img class="film" src="<?=$imagesmanga[0]?>">
        <p class="pfilm"><?=$titremanga[0]?></p>
    </div>
    <div class="col-lg-4">
    <img class="film" src="<?=$imagesmanga[1]?>">
        <p class="pfilm"><?=$titremanga[1]?></p>
    </div>
    <div class="col-lg-4">
        <img class="film" src="<?=$imagesmanga[2]?>">
        <p class="pfilm"><?=$titremanga[2]?></p>
    </div>
</div>
</div>
</div>
    <h3 class="hfilm">Jeux vidéo :</h3>
    <div class="container">
        <div>
            <p class="description_passion">
                J'ai toujours aimé joué à des jeux vidéon que ce soit pour m'évader, ou pour jouer avec mes amis. Il s'avère que grâce aux jeux j'ai rencontrer bon nombre de personne qui eux même mon fait découvrir leur culture. Je pense que c'est un point essentiel qu'est la curiosité. De plus la compétitiivté qu'il enseigne nous pousse toujours dans nos retranchement.
            </p>
        </div>
        <div class="imgcinema">
             <img class="iconcinema" src="assets/img/jeux-video.png">   
        </div>        
    </div>
    <div>
        <h4 class="hfilm">Mon top 3</h4>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-lg-4">
            <img class="film" src="https://www.cdiscount.com/pdt2/8/4/8/1/700x700/seb3701519712848/rw/pokemon-rouge-feu-jeu-gameboy-advance.jpg">
            <p class="pfilm">1- Pokemon rouge</p>
        </div>
        <div class="col-lg-4">
            <img class="film" src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b6/RaCbox.jpg/220px-RaCbox.jpg">
            <p class="pfilm">2- Ratchet et Clank</p>
        </div>
        <div class="col-lg-4">
            <img class="film" src="https://image.jeuxvideo.com/images/pc/s/p/spcepc0f.jpg">
            <p class="pfilm">3- Splinter cell</p>
        </div>
    </div>
    </div>
</div>
</div>
    
    </div>


