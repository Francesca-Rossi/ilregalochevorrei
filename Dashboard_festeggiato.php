<?php include "header.php";
$festeggiato=new Festeggiato($_SESSION["Utente"]->get_ID(), $_SESSION["Utente"]->get_nome(), $_SESSION["Utente"]->get_cognome(), $_SESSION["Utente"]->get_data(), $_SESSION["Utente"]->get_email(), $_SESSION["Utente"]->get_paypall(), $_SESSION["Utente"]->get_password()); 
$_SESSION["Festeggiato"]=$festeggiato;
//unset($_SESSION['Utente']); //elimino l'oggetto utente, d'ora in avanti nell'area potra accedere solo l'oggetto festeggiato
?>
<!--inseirisci pagina di profilo-->
<? include "Menu_festeggiato.php";?> <!--barra del menù-->
	<div class="card">
  <h5 class="card-header bg-secondary display-3 text-light text-center">COSA VUOI FARE OGGI?</h5>
  <div class="card-body bg-dark">
        <div class="row">
        <div class="col-sm-6">
          <a href="Aggiungi_regalo.php" class="btn btn-success w-100">
              <h5  class="display-4"><b>Aggiungi nuovo regalo</b></h5>
		   </a>
        </div>
        <div class="col-sm-6">
          <a href="Lista_partecipazioni.php" class="btn btn-info w-100">
              <h5 class="display-4" ><b>Vedi i contributi</b></h5>
			</a>
        </div>
      </div>

  </div>
</div>
 <?php include "footer.php";?>