<?php require_once 'funzionalitàVoto.php'; ?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proverbi votati</title>

    <!-- File CSS -->
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
    <link href="../../css/listaVoti.css" rel="stylesheet" type="text/css">

    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>


<!-- Barra di navigazione -->

<nav id="barraNavigazione" >
    <p class="tagGrafici navGraficoInizio">&lt;nav&gt;</p>
    <ul>
      <li id="primoLi"><a href="../../index.htm#top">Home</a></li>
      <li id="navAbout"><a href="../../index.htm#punto">About</a></li>
      <li id="navSkill"><a href="../../index.htm#logoPhp">Skill</a></li>
      <li><a href="../progetti.htm">Progetti</a></li>
      <li><a href="../../index.htm#contatti">Contatti</a></li>
    </ul>
    <p class="tagGrafici navGraficoFine">&lt;/nav&gt;</p>
  </nav>

<!-- Fine Barra di navigazione -->
    <div class="container">

        <h1>Proverbi votati</h1>
        
        <?php
    
    foreach ( proverbiManager::caricaVotiFromJson() as $key => $film): ?>
        <div id="card">
            <p id="proverbio">
                <?php echo($film["film"])?>
            </p>
            <p id="statistiche">
                <!-- <span id="voti">
                    <?php echo("voti ricevuti ".$film["voti"])?>
                </span> -->
                <span id="media">
                    <?php echo("Media voti ".$film["media"])?>
                </span>
            </p>
        </div>
        <?php endforeach; ?>
        
        
        <a href="VotaProverbi.php">vota ancora</a>
    </div>
    
</body>
</html>