<?php
class Partecipazione {
  // Properties
  public $invitato; //oggetto
  public $messaggio;
  public $importo;
  public $regalo; //oggetto
 

  // Methods
  public function __construct($invitato, $messaggio, $importo, $regalo) {
    $this->invitato = $invitato;
	 $this->messaggio = $messaggio;
	 $this->importo = $importo;
	 $this->regalo = $regalo;
  }
  //getter
  public function get_invitato() {
	  /*restituisce un oggetto*/
    return $this->invitato;
  }
  public function get_messaggio() {
    return $this->messaggio;
  }
  public function get_importo() {
    return $this->importo;
  }
  public function get_regalo() {
	  /*restituisce un oggetto*/
    return $this->regalo;
  }
  
}
?>