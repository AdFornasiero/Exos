<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/hljs.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <!-- Dropdown Structure -->
        <ul id="datesDropdown" class="dropdown-content ">
          <li><a href="exo1.php">Exercice 1</a></li>
          <li><a href="exo2.php">Exercice 2</a></li>
          <li><a href="exo3.php">Exercice 3</a></li>
          <li><a href="exo4.php">Exercice 4</a></li>
          <li><a href="exo5.php">Exercice 5</a></li>
          <li><a href="exo6.php">Exercice 6</a></li>
          <li><a href="exo7.php">Exercice 7</a></li>
          <li><a href="exo8.php">Exercice 8</a></li>
        </ul>

        </ul>
        <nav>
            <div class="nav-wrapper indigo" id="navbar">
                <a href="" class="brand-logo title">Exercices PHP</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="dropdown-trigger" href="" data-target="datesDropdown">Dates<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="exoFichiers.php">Fichiers</a></li>
                    <li><a href="exoSession.php">Sessions</a></li>
                </ul>
                <a href="" data-target="mobileNavbar" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
                
            </div>
        </nav>

        <ul class="sidenav" id="mobileNavbar">
            <h5 class="mobileSubtitle">Dates - Heures</h5>
            <li><a href="exo1.php" class="mobileList">Exercice 1</a></li>
            <li><a href="exo2.php" class="mobileList">Exercice 2</a></li>
            <li><a href="exo3.php" class="mobileList">Exercice 3</a></li>
            <li><a href="exo4.php" class="mobileList">Exercice 4</a></li>
            <li><a href="exo5.php" class="mobileList">Exercice 5</a></li>
            <li><a href="exo6.php" class="mobileList">Exercice 6</a></li>
            <li><a href="exo7.php" class="mobileList">Exercice 7</a></li>
            <li><a href="exo8.php" class="mobileList">Exercice 8</a></li>
            <div class="divider"></div>
            <h5 class="mobileSubtitle">Fichiers</h5>
        </ul>


        <div class="container">
            <blockquote>
                <h3><?= $title ?></h3>
                <?= $consigne ?>
            </blockquote>
        </div>
    </header>