<!--pagina che aggiorna la password-->
<?php include "header.html"; ?>
    <div>
    	<center>
      		<?php
            	include "function.php";
                session_start();
            	$vecchiaP=$_POST['old_password'];
            	$nuovaP=$_POST['new_password'];
                $confermaP=$_POST['conf_password'];
                /*controllo se le dua password coincidono*/
                if ($vecchiaP==$nuovaP)
                {
                	echo "<div class='alert alert-danger' role='alert'>
                            <h3>Non hai cambiato la password. Se vuoi cambiare la password usa una nuova parola riservata.<h3>
                          </div>
                          <div class='spinner-border text-danger' role='status'>
  							<span class='sr-only'>Loading...</span>
						</div>";
                    header('Refresh: 2; URL=http://smartfisco.altervista.org/CambiaPassword.php');
                }
                elseif ($confermaP!=$nuovaP)//controllo che non ci siano errori di battitura
                {
                	echo "<div class='alert alert-danger' role='alert'>
                            <h3>Le due password non coincidono<h3>
                          </div>
                          <div class='spinner-border text-danger' role='status'>
  							<span class='sr-only'>Loading...</span>
						</div>";
                    header('Refresh: 2; URL=http://smartfisco.altervista.org/CambiaPassword.php');
                    
                }
                elseif(strlen($nuovaP)<=6) //la nuova password deve avere almeno 6 caratteri
                 {
                	echo "<div class='alert alert-danger' role='alert'>
                            <h3>Password troppo corta<h3>
                          </div>
                          <div class='spinner-border text-danger' role='status'>
  							<span class='sr-only'>Loading...</span>
						</div>";
                    header('Refresh: 2; URL=http://smartfisco.altervista.org/CambiaPassword.php');
                    
                }
                else 
                {
                	$username=$_SESSION["Username"];
                    $table=ucfirst($_SESSION["Tipologia"]); //metto la prima lettera maiuscola perchè la tabella si chiama Fornitore
                	$password="SHA1('".$nuovaP."')";
                    $risult=Update_db($table,'Password',$password,'Username',$username);
                    if($risult)
                    {
                    	echo "<div class='alert alert-success' role='alert'>
                            <h3>Password cambiata con successo. Attendi...<h3>
                          </div>
                          <div class='spinner-border text-success' role='status'>
  							<span class='sr-only'>Loading...</span>
							</div>";
                        header('Refresh: 5; URL=http://smartfisco.altervista.org/Dashboard.php');
                        //echo "<br><a href='Profile.php'><button>Vedi il tuo profilo</button></a>";
                    }
                }
            ?>
            
        </center>
	</div>
<?php include "footer.html"; ?>