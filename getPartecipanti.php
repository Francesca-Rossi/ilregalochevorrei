<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v7.0"></script>
<?php
include "function.php";
 $idregalo=$_GET['p'];
$lista='*';
$table="Partecipazione as P,  Utente as U, Regalo as R";
$cond="P.IDregalo='".$idregalo."' and P.IDutente=U.IDutente and R.IDregalo=P.IDregalo Order by P.IDpart Desc  ";
$risultato_fatt=Request_db($table, $lista,$cond);
            if(mysqli_num_rows($risultato_fatt) > 1)
            {  ?>
            
            <center><table class=" table table-responsive-sm table-striped table-success text-center w-75">
              <tr>
              <th scope="col">Data</th>
              <th scope="col">Nome</th>
              <th scope="col">Messaggio</th>
              </tr>
            <?
             	/*visualizzazione query*/
        		while($row = mysqli_fetch_array($risultato_fatt))
                {

                $raccolti=$row['Tot_raccolto'];
                $obiettivo= $row['Obiettivo'];
                $nome=ucfirst($row['NomeR']);
                ?>
               
               <tr>
               <td><b><?php
               	$date=date_create($row['Data']);
				echo date_format($date,"d/m/Y");?></b></td>
               <td><b><?php echo ucfirst($row['Nome'])?> <?php echo ucfirst($row['Cognome'])?></b></td>
               <td><?php echo ucfirst($row['Messaggio'])?></td>
               <tr>

        		<?}
        		mysqli_free_result($risultato_fatt);
				 ?><tr>
               <h5 class="display-4 text-light">Contributi per: <?php echo $nome;?></h5>
               <h5 class="display-4 text-success">Quota raggiunta: <b> <?php echo $raccolti;?>€ / <?php echo $obiettivo ;?>€</b></h5>
               </tr><?php
              }
              else{?>
                  <div class="alert alert-warning" role="alert">
  						<strong>Attenzione: </strong>Ancora nessuno ha partecipato al tuo regalo
                        <p><b>Invita i tuoi amici a partecipare!!</b></p>
        					<div class="fb-share-button" data-href="http://www.ilregalochevorrei.altervista.org/" data-layout="button" data-size="large">
        						<button><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.ilregalochevorrei.altervista.org%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Condividi su Facebook</a></button>
        					</div>
					</div>
              <?}
            
?>
              
</table></center>