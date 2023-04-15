<?php


class carrelloP{
private $prodotto;
private $pezzi;



public function inserireProdotto($prodotto, $pezzi)
{
    $this->pezzi = $pezzi;
    $this->prodotto = $prodotto;
    $this->insertJson();
}


private function insertJson()
{
  
  $carrelloJson= $this->caricaCarrelloFromJson();
  
  foreach ($carrelloJson as $key => $prodotto ) {
    if ($prodotto['prodotto'] === $this->prodotto) {
      
      $carrelloJson[$key] = [
        'prodotto' => $this->prodotto,
        'pezzi' => $this->pezzi+$prodotto['pezzi'],
    ];
          file_put_contents('carrello.json', json_encode($carrelloJson));
          
          return ; 
        }
      }
      if ($this->prodotto === "svuota") {
      $carrelloJson=[];
      file_put_contents('carrello.json', json_encode($carrelloJson));
      // $file="carrello.json";
      // unlink($file);
      return ;


  }


  $carrelloJson[] = [
    'prodotto' => $this->prodotto,
    'pezzi' => $this->pezzi,
];
file_put_contents('carrello.json', json_encode($carrelloJson));
}


public static function caricaCarrelloFromJson()
{
  $content = file_get_contents('carrello.json');
  $carrelloJson = json_decode($content, true);
    if ($carrelloJson === null) {
      echo 'Impossibile leggere il file carrello: ' . json_last_error_msg();
      die;
    }
  return $carrelloJson;
}

public static function totalePezzi()
{
  $totale=0;
  $prodotti=carrelloP::caricaCarrelloFromJson();
  foreach ($prodotti as $key => $value) {
    $totale=$totale+$prodotti[$key]["pezzi"];
  }
  return $totale;
}
public static function prodottoPiùPezzi()
{ 
  $prodotti=carrelloP::caricaCarrelloFromJson();
  $pezzi=0;
  foreach ($prodotti as $key => $value) {

    $newPezzi=$prodotti[$key]["pezzi"];

    if ($newPezzi>$pezzi) {
      $prodotto=$prodotti[$key]["prodotto"];
      $pezzi=$prodotti[$key]["pezzi"];
      $frase=" con pezzi: ";
    }; 
  }
  return $prodotto.$frase.$pezzi;
}}
?>