<?php 
	session_start();
	  unset($_SESSION["Festeggiato"]);
	  unset($_SESSION["Invitato"]);
	  unset($_SESSION["Utente"]);
      header('Refresh: 1; URL=http://www.ilregalochevorrei.altervista.org/');
?>