<!--pagina contente il form per modificare la password-->
<?php include "header.html";?>
    <div class='container ' style="margin:0% 25%";>
        <h1 class="display-1 text-primary">Modifica Password</h1>
        	<form method="Post" action="UpdatePassword.php" style="margin:0% 10%"; >
              <div class="form-group row">
				<div class='col-sm-6'>
                	<input class="form-control form-control-lg text-center" type="text" name="old_password" placeholder="Vecchia Password">
                </div>
               </div>
               <div class="form-group row">
				<div class='col-sm-6'>
                	<input class="form-control form-control-lg text-center " type="password" name="new_password" placeholder="Nuova Password" >
               <span class="text-muted">
  					La password deve avere almeno 6 caratteri
					</span>
              </div>
               </div>
                <div class="form-group row">
				<div class='col-sm-6'>
                	<input class="form-control form-control-lg text-center" type="password" name="conf_password" placeholder="Conferma Password">
                </div>
               </div>
				<div class="form-group row">
        			<div class="col-sm-4  ">
                    	<div class="clearfix float-right">
                      <button type="submit" class="btn btn-outline-success text-center" >Cambia</button>
                      <button type="button" class="btn btn-outline-danger" onclick="goBack()">Indietro</button>
                      </div>
                    </div>
					</div>
            </form>
        
	</div>
<?php include "footer.html"; ?>