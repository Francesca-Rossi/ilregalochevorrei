<? include "header.php";
   include "Menu_invitato.php";
   // unset($_SESSION['Regalo']);
   $idregalo=$_POST['Regalo'];
   /*estraggo i componenti del regalo*/
   $lista="*";
   $table="Regalo as R, Utente as U";
   $cond="R.IDregalo='".$idregalo."' and R.IDutente=U.IDutente";
   $risultato_fatt=Request_db($table, $lista,$cond);
            if(mysqli_num_rows($risultato_fatt) >0)
            { 	/*visualizzazione query*/
        		while($row = mysqli_fetch_array($risultato_fatt))
                {
                	$festeggiato=new Festeggiato ($row['IDutente'],$row['Nome'], $row['Cognome'], $row['Data_n'], $row['Email'], $row['Paypall'], $row['Password']);
                    $regalo=new Regalo($row['IDregalo'], $row['NomeR'], $row['Evento'], $row['Descrizione'],  $row['Scadenza'], $row['Tot_raccolto'], $row['Obiettivo'], $festeggiato); 
                    $_SESSION['Regalo']=$regalo;
                    
                }
              ?>
   			<?php
        		mysqli_free_result($risultato_fatt);
              }
              else{?>
                  <div class="alert alert-warning" role="alert">
  						<p><strong>Attenzione:</strong>Nessun regalo è stato selezionato</p>
                        <a href="Elenco_Regali.php">Seleziona un regalo</a>
					</div>
              <?}
     		 
        ?>
<div class="card text-center">
  <h5 class="card-header bg-success display-3 text-light text-xs-center p-b-1 m-b-1">
    <span class="display-4 text-center "> Partecipa: <b><?php echo $_SESSION['Regalo']->get_nome()?></b> di <b><?php echo $_SESSION['Regalo']->get_festeggiato()->get_nome()?></b> </span>
  </h5>
  <div class="card-body bg-dark">
  <form method="post" action="Registra_quota.php">
  <center><table >
      <tr >
      	  <td><label class="input-group-text">Con quanti soldi intendi partecipare?* </label></td>
          <td><select  class="form-control text-center" name="Importo" required>
          	<?php for($i=0; $i<1000; $i+=5)
            {?>
            	<option value="<?php echo $i;?>"> <?php echo $i;?>€</option>
           <?php }?>
          </select></td>
          
      </tr>
      <tr>
        <td colspan="2"><textarea class="form-control text-center"  name="Messaggio" placeholder="Scrivi un messaggio di auguri*" required></textarea></td>
      </tr>
      <tr>
      <td colspan="2"><p class="text-italic text-light"> *Questi campi sono obbligatori</p></td>
      </tr>
      <tr>
      <td colspan="2">
      <input class="form-control  btn btn-outline-success" type="submit" value="PARTECIPA">
      </td>
      </tr>
    </table></center>
    </form>

</div>
</div>
<? include "footer.html";?>