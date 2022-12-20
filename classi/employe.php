<?php



class Employe {
  public $nome;
  public $immagine;
  public $eta;
  public $ruolo;
  public $sesso;


  public function __construct(
    
    String $nome,
    String $immagine,
    String $ruolo,
    Int    $eta,
    String $sesso


    ) {
   
    $this->nome = $nome;
    $this->immagine = $immagine;
    $this->$ruolo;
    $this->$eta;
    $this->$sesso;

    }


}
?>