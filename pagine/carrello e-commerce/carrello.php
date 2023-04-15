<?php require_once 'funzionalita.php'; ?>

<?php 

if (array_key_exists( 'prodotto' , $_POST )) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
        
        $nuovoProdotto = new carrelloP;
        $nuovoProdotto -> inserireProdotto($_POST['prodotto'], $_POST['pezzi']);
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrello</title>

    <!-- File CSS -->
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
    <link href="../../css/carrello.css" rel="stylesheet" type="text/css">

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



<div class="flex">
    <div class="container">
        <h1>Carrello</h1>
        <?php 
            foreach ( carrelloP::caricaCarrelloFromJson() as $key => $prodotto): ?>
                <div class="ordineSingolo">
                    <?php echo("<p class='prodotto' >Prdotto ".$prodotto["prodotto"]."</p>")?>
                    <?php echo("<p class='pezzi'>Pezzi   ".$prodotto["pezzi"]."</p>");?>
                    <!-- <p>elimina</p> -->
                </div>
        <?php endforeach; ?>
        <!-- <p>il prodotto con più pezzi è: <?php echo(carrelloP::prodottoPiùPezzi());?></p> -->
        <p class="totale">il totale dei pezzi è: <?php echo(carrelloP::totalePezzi());?></p>
    </div>
    <a class="continuaAcquisti" href="aggiungiAlCarrello.php">Continua acquisti</a>
    <form action="carrello.php"  method="POST" >
            <button class="svuotaCarrello" type="submit"  name="prodotto" value="svuota"  >SVUOTA IL CARRELLO</button>
    </form>

</div>
    
</body>
</html>