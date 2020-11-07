<?php
include "header.php";
include "Menu_festeggiato.php";?>
<div class="card ">
  <h5 class="card-header bg-success display-3 text-light text-center">I MIEI REGALI</h5>
  <div class="card-body bg-dark ">
    <div class="container">
<?php $lista='*';
$table= "Utente as U, Regalo as R";
$cond=" U.IDutente=R.IDutente and U.IDutente='".$_SESSION['Festeggiato']->get_ID()."'  ";
$risultato_fatt=Request_db($table, $lista,$cond);
            if(mysqli_num_rows($risultato_fatt) > 0)
            {  ?>
            
            <center><table class=" table table-responsive-sm table-striped table-success text-center w-75">
              <tr>
              <th scope="col">Regalo</th>
              <th scope="col">Evento</th>
              <th scope="col">Scadenza</th>
              <th scope="col">Quota raggiunta / obiettivo</th>
              </tr>
            <?
             	/*visualizzazione query*/
        		while($row = mysqli_fetch_array($risultato_fatt))
                {
                ?>
               
               <tr>
               <td><?php echo ucfirst($row['NomeR'])?></td>
               <td><?php echo ucfirst($row['Evento'])?></td>
               <td><?php echo date_format(date_create($row['Scadenza']), "d/m/Y");?></td>
               <td><?php echo $row['Tot_raccolto'] ?>€ / <?php echo $row['Obiettivo'] ?>€</td>
               <tr>

        		<?}
        		mysqli_free_result($risultato_fatt);
				 
              }
              else{?>
                  <div class="alert alert-warning text-center" role="alert">
  						<p><strong>Attenzione: </strong>Non hai ancora aggiunto nessun regalo</p>
                        <a href="Aggiungi_regalo.php" class="btn btn-outline-success"> Aggiungi un regalo </a>
					</div>
              <?}
            
?>
              
</table></center>
<?php include "footer.html";?>