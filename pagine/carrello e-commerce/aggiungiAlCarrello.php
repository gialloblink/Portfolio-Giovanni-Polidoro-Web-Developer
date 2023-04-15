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
    <title>Aggiungi al carrello</title>

    <!-- File CSS -->
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
    <link href="../../css/AggiungiAlCarrello.css" rel="stylesheet" type="text/css">

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

<div class="aggiunto">
    <?php 
    if (array_key_exists( 'prodotto' , $_POST )):?>
    <p class="aggiunto">
        Prodotto aggiunto al carrello
    </p>
    <?php endif?>
</div>
<div class="container">  

    <!-- card prodotti -->

    <!-- pecorino -->

    <div class="prodotto pecorino">
        <form action="aggiungiAlCarrello.php"  method="POST" novalidate>
            <div class="nomeProdotto">
                <label for="fname">Pecorino</label><br>
                <input class="radio" type="radio" name="prodotto" value="Pecorino" checked>
            </div>
            <div class="formSection">
                <label for="fname">Quantità:</label>
                <select id="pezzi" name="pezzi" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button type="submit" >AGGIUNGI AL CARRELLO</button>
            </div> 
        </form>
    </div>
    <!-- ventricina  -->
    <div class="prodotto ventricina">
        <form action="aggiungiAlCarrello.php"  method="POST" novalidate>
            <div class="nomeProdotto">
                <label for="fname">ventricina</label><br>
                <input class="radio" type="radio" name="prodotto" value="ventricina" checked>
            </div>
            <div class="formSection">
                <label for="fname">Quantità:</label>
                <select id="pezzi" name="pezzi" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button type="submit" >AGGIUNGI AL CARRELLO</button>
            </div> 
        </form>
    </div>
    <!-- zafferano  -->
    <div class="prodotto zafferano">
        <form action="aggiungiAlCarrello.php"  method="POST" novalidate>
            <div class="nomeProdotto">
                <label for="fname">zafferano</label><br>
                <input class="radio" type="radio" name="prodotto" value="zafferano" checked>
            </div>
            <div class="formSection">
                <label for="fname">Quantità:</label>
                <select id="pezzi" name="pezzi" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button type="submit" >AGGIUNGI AL CARRELLO</button>
            </div> 
        </form>
    </div>
    <!-- tartufo  -->
    <div class="prodotto tartufo">
        <form action="aggiungiAlCarrello.php"  method="POST" novalidate>
            <div class="nomeProdotto">
                <label for="fname">tartufo</label><br>
                <input class="radio" type="radio" name="prodotto" value="tartufo" checked>
            </div>
            <div class="formSection">
                <label for="fname">Quantità:</label>
                <select id="pezzi" name="pezzi" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button type="submit" >AGGIUNGI AL CARRELLO</button>
            </div> 
        </form>
    </div>

    <!-- fine card prodotti  -->
</div>

<div class="carrello">
    <a  href="carrello.php">carrello</a>
</div>
</body>
</html>