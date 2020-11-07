<?php
include "header.php";
include "Menu_invitato.php";?>
<div class="card">
  <h5 class="card-header bg-success display-4 text-light text-center">I MIEI CONTRIBUTI</h5>
  <div class="card-body bg-dark">
    <div class="container">
<?php $lista='*';
$table="Partecipazione as P,  Utente as U, Regalo as R";
$cond=" R.IDregalo=P.IDregalo and U.IDutente=R.IDutente and P.IDutente='".$_SESSION['Invitato']->get_ID()."' order by Data   ";
$risultato_fatt=Request_db($table, $lista,$cond);
            if(mysqli_num_rows($risultato_fatt) > 0)
            {  ?>
            
            <center><table class=" table table-responsive-sm table-striped table-success text-center w-75">
              <tr>
              <th scope="col">Data</th>
              <th scope="col">Evento</th>
              <th scope="col">Festeggiato</th>
              <th scope="col">Regalo</th>
              <th scope="col">Quota</th>
              </tr>
            <?
             	/*visualizzazione query*/
        		while($row = mysqli_fetch_array($risultato_fatt))
                {
                ?>
               
               <tr>
               <td><?php
               $date=date_create($row['Data']);
				echo date_format($date,"d/m/Y");?></td>
               <td><?php echo ucfirst($row['Evento'])?></td>
               <td><?php echo ucfirst($row['Nome'])?> <?php echo ucfirst($row['Cognome'])?></td>
               <td><?php echo ucfirst($row['NomeR'])?></td>
               <td><?php echo $row['Importo'] ?>€</td>
               <tr>

        		<?}
        		mysqli_free_result($risultato_fatt);
				 
              }
              else{?>
                  <div class="alert alert-warning text-center" role="alert">
  						<p><strong>Attenzione:</strong> Non hai partecipato a nessun regalo.</p>
                        <a href="Elenco_Regali.php" class=" btn btn-outline-success" >Partecipa a un regalo</a>
					</div>
              <?}
            
?>
              
</table></center>
<?php include "footer.html";?>