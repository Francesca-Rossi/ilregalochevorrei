<?php
	class Festeggiato extends Utente
	{
	 public function message() {
		 echo ("io sono il festeggiato e mi chiamo ".Utente::get_nome());
	 }
  }
?>