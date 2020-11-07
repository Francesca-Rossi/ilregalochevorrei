<?php
class Regalo {
  // Properties
  public $id;
  public $nome;
  public $descrizione;
  public $evento;
  public $scadenza;
  public $s_raccolti;
  public $obiettivo;
  public $festeggiato; //oggetto

  // Methods
  public function __construct($id, $nome, $evento, $descrizione, $scadenza, $s_raccolti, $obiettivo, $festeggiato) {
    $this->nome = $nome;
    $this->id = $id;
	 $this->descrizione = $descrizione;
	 $this->evento = $evento;
	 $this->scadenza = $scadenza;
	 $this->s_raccolti = $s_raccolti;
	 $this->obiettivo = $obiettivo;
	 $this->festeggiato = $festeggiato;
  }
  //getter
   public function get_ID() {
    return $this->id;
  }
  public function get_nome() {
    return $this->nome;
  }
  public function get_desc() {
    return $this->descrizione;
  }
  public function get_evento() {
    return $this->evento;
  }
  public function get_scadenza() {
    return $this->scadenza;
  }
  public function get_totale() {
    return $this->s_raccolti;
  }
  public function get_obiettivo() {
    return $this->obiettivo;
  }
  public function get_festeggiato() {
	  /*restituisce un oggetto*/
    return $this->festeggiato;
  }
  public function Aggiungi_quota($importo)
  {
   	$soldi=Regalo::get_totale();
   	$soldi=$soldi+$importo;
    return $soldi;
  }
}
?>