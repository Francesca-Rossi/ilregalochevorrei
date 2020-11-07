<?php include "header.php"; ?>
<div class="card">
  <h5 class="card-header bg-success display-3 text-light text-center">CIAO <?php  echo strtoupper($_SESSION["Utente"]->get_nome())?>, CHI SEI?</h5>
  <div class="card-body bg-dark">
        <div class="row">
        <div class="col-sm-6">
          <a href="Dashboard_festeggiato.php" class="btn btn-secondary w-100">
              <h5  class="display-4">Festeggiato</h5>
		   </a>
        </div>
        <div class="col-sm-6">
          <a href="Dashboard_invitato.php" class="btn btn-light w-100">
              <h5 class="display-4" >Invitato</h5>
			</a>
        </div>
      </div>

  </div>
</div>
<?php include "footer.html";?>