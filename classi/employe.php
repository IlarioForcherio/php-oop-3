<?php



class Employe {
  public $nome;
  public $immagine;
  public $eta;
  public $ruolo;


  public function __construct(
    
    String $nome,
    String $immagine


    ) {
    
    $this->nome = $nome;
    $this->immagine = $immagine;     
    }


}

?>