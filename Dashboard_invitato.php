<?php include "header.php";
$invitato=new Invitato($_SESSION["Utente"]->get_ID(), $_SESSION["Utente"]->get_nome(), $_SESSION["Utente"]->get_cognome(), $_SESSION["Utente"]->get_data(), $_SESSION["Utente"]->get_email(), $_SESSION["Utente"]->get_paypall(), $_SESSION["Utente"]->get_password()); 
$_SESSION["Invitato"]=$invitato;
//unset($_SESSION['Utente']); //elimino l'oggetto utente, d'ora in avanti nell'area potra accedere solo l'oggetto festeggiato
?>
<!--inseirisci pagina di profilo-->
<? include "Menu_invitato.php";?> <!--barra del menù-->
	<div class="card">
  <h5 class="card-header bg-secondary display-3 text-light text-center">COSA VUOI FARE OGGI?</h5>
  <div class="card-body bg-dark">
        <div class="row">
        <div class="col-sm-6">
          <a href="Elenco_Regali.php" class="btn btn-success w-100">
              <h5  class="display-4"><b>Partecipa a un regalo</b></h5>
		   </a>
        </div>
        <div class="col-sm-6">
          <a href="Le_mie_partecipazioni.php" class="btn btn-info w-100">
              <h5 class="display-4" ><b>I miei contributi</b></h5>
			</a>
        </div>
      </div>

  </div>
</div>
 <?php include "footer.php";?>