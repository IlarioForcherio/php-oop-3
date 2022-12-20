<?php

include_once __DIR__ . '/prodotto.php';

class Cd extends prodotto {
  
  
  public $track;

  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,

    
    
    Int $track

    ) {
    
    $this->track = $track;
    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
    }
}

?>