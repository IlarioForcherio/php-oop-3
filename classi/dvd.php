<?php

include_once __DIR__ . '/prodotto.php';

class Dvd extends prodotto {
  
  public $durata;
  public $formato;

  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,

    Float $durata,
    String $formato
    
    ) {
    
    $this->formato = $formato;    
    $this->durata = $durata;
    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
  }
}

?>