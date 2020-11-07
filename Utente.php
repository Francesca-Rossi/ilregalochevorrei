<?php
class Utente {
  // Properties
  public $id;
  public $nome;
  public $cognome;
  public $email;
  public $data_n;
  public $paypall;
  public $password;

  // Methods
  public function __construct($id, $nome, $cognome,  $data_n, $email, $paypall, $password) {
     $this->id = $id;
     $this->nome = $nome;
	 $this->cognome = $cognome;
	 $this->email = $email;
	 $this->data_n = $data_n;
	 $this->paypall = $paypall;
     $this->password = $password;
  }
  //getter
  public function get_ID() {
    return $this->id;
  }
  public function get_nome() {
    return $this->nome;
  }
  public function get_cognome() {
    return $this->cognome;
  }
  public function get_email() {
    return $this->email;
  }
  public function get_data() {
    return $this->data_n;
  }
  public function get_paypall() {
    return $this->paypall;
  }
    public function get_password() {
    //restituisce la password criptata
    return $this->password;
  }
}
?>