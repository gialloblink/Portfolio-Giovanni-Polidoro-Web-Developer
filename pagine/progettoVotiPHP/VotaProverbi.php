<?php require_once 'funzionalitàVoto.php'; ?>
<?php 
if (array_key_exists( 'film' , $_POST )) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
        
        $nuovoVoto = new proverbiManager; 
        $nuovoVoto -> inserireVoto($_POST['film'], $_POST['voto']);
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vota il tuo proverbio Abruzzese</title>

    <!-- File CSS -->
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
    <link href="../../css/votaProverbi.css" rel="stylesheet" type="text/css">

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
    <form action="VotaProverbi.php"  method="POST" novalidate>
        <div>
            <label for="fname">Proverbi:</label>
            <select name="film" id="Proverbi" required>
                <option value="A lavà la cocce all'asin 'c sà 'rmette tempe e sapone.">A lavà la cocce all'asin 'c sà 'rmette tempe e sapone.</option>
                <option value="Attacche l'asene dova vò lu patrêne.">Attacche l'asene dova vò lu patrêne.</option>
                <option value="C' sput' 'n ciel' jà 'rcasch 'n mocch'.">C' sput' 'n ciel' jà 'rcasch 'n mocch'.</option>
                <option value="Lu cavalle bbone se vede a lu ricchiappe.">Lu cavalle bbone se vede a lu ricchiappe.</option>
                <option value="Ogne ccas' tèn' nu peng' rett'.">Ogne ccas' tèn' nu peng' rett'.</option>
            </select>
            <!-- <input type="text" name="film"> -->
        </div>

        <div>
            <label for="fname">voto:</label>
            <select name="voto" id="voto" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <!-- <input type="number" min="1" max="10" step="1" name="voto">  -->
        </div>

        <button type="submit" >VOTA</button>
    </form>
    
    <?php 

if (array_key_exists( 'film' , $_POST )):?>
    <p id="confermaVoto">
        voto effettuato
    </p>
    <?php endif?>
    
    <a class="linkLista" href="listaVoti.php">lista voti</a>
</div>
</body>
</html>