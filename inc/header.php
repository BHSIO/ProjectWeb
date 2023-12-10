<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title><?php if (!empty($title)) {
            echo $title;
        } else {
            echo '';
        } ?></title>
   <link rel="stylesheet" href="assets/css/style.css">

    <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet'/>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!--<link rel="stylesheet" media="screen and (max-width: 700px)" href="style.css" type="text/css" /> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

<header>
    <nav class="fixed-top">
        <ul class="align">

            <?php if (!isLogged()) { ?>
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <li><a class="navbar-brand" href="#acceuil" >Qui suis-je ?</a></li>
                <li><a class="navbar-brand" href="#competences" >Compétences</a></li>
                <li><a class="navbar-brand" href="#experience" >Expérience</a></li>
                <li><a class="navbar-brand" href="#formation" >Formation</a></li>
                <li><a class="navbar-brand" href="#contact" >Contact</a></li>
                

            <?php } elseif (idAdmin()) { ?>
                <li><a href="#acceuil" >Home</a></li>
                <li><a href="logout.php" >Deconnexion</a></li>
                <li><a href="admin.php" >Pannel admin</a></li>
                <li>Bonjour <?php echo $_SESSION['login']['pseudo'] ?> !</li>

            <?php } else { ?>
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <li><a href="#acceuil" >Qui suis-je ?</a></li>
                <li><a href="#competences" >Compétences</a></li>
                <li><a href="#experience" >Expérience</a></li>
                <li><a href="#formation" >Formation</a></li>
                <li><a href="#contact" >Contact</a></li>
                </nav>
            <?php } ?>
        </ul>
    </nav>
</header>