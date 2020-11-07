<?php include "header.php" ;
	include "Menu_invitato.php";
?>
<div class="card">
  <h5 class="card-header bg-success display-4 text-light text-center">A QUALE REGALO PARTECIPI?</h5>
  <div class="card-body bg-dark">
    <div class="container">
     <?php
      include "Scegli_regalo.php";
            $evento= $_POST['Evento'];
            $data= $_POST['Data'];?>
     <form action="Partecipa.php" method="Post" >
<?php
           
            
            $lista='*';
         	$table="Regalo as R, Utente as U";
            $cond="R.IDutente=U.IDutente and U.IDutente<>'".$_SESSION["Invitato"]->get_ID()."' and  R.Scadenza>'".date("Y-m-d")."'";
           if ($evento!="") //ricerco per evento 
            {
            $cond=$cond."and R.Evento='".$evento."'";
            }
           if ($data!="") //ricerco per data
            {
            $cond=$cond." and R.Scadenza between '".date("Y-m-d")."' and '".$data."'"; //da modificare
            }
            $cond=$cond." Order by Scadenza ";
         	$risultato_fatt=Request_db($table, $lista,$cond);
            if(mysqli_num_rows($risultato_fatt) > 0)
            { 	/*visualizzazione query*/
        		while($row = mysqli_fetch_array($risultato_fatt))
                {?>
                
                  <div class="card ">
                    <div class="card-header text-center bg-info" >
  				<input type="radio" class="form control large"  name="Regalo" value="<?php echo $row["IDregalo"];?>"
                required>
  				<label style="font-size:20pt;" ><b> <?php echo ucfirst($row["NomeR"]);?></b></label>
                  </div>
                 <div class="card-body bg-light">
                 <center><table class="resposive">
                 <tr>
                 <td>Descrizione/motivo: </td>
                 <td><?php echo $row["Descrizione"];?></td>
                 </tr>
                 <tr>
                 <td>Festeggiato: </td>
                 <td><b><?php echo $row["Nome"];?> <?php echo $row["Cognome"];?></b></td>
                 </tr>
                 <tr>
                 <td>  Evento:</td> 
                 <td><b><?php echo $row["Evento"];?></b></td>
                 </tr>
                 <tr>
                 <td>  Data ultima per partecipare: </td> 
                 <td>
                 <?php
                 $date=date_create($row["Scadenza"]);
                 echo date_format($date, "d/m/Y");?></td>
                 </tr>
                 </table></center>
               
                  </div>
                  </div>
                
        		<?}
              ?>
            <center><input class="btn btn-outline-success  form-control" type="submit" name="invio" value="Partecipa">
            </center>
            </form>
  
   <?php
        		mysqli_free_result($risultato_fatt);
              }
              else{?>
                  <div class="alert alert-warning" role="alert">
  						<strong>Attenzione:</strong>Nessun regalo è stato recuperato
					</div>
              <?}
            
        ?>
        </div>
       </div>
       </div>
<?php include "footer.html" ?>
