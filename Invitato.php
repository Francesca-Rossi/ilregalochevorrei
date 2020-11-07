<?php
	class Invitato extends Utente
	{
	 public function message() {
		 echo ("io sono l'invitato e mi chiamo ".Utente::get_nome());
	 }
  }
?>