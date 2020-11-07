<?php include "header.php";
	  include "Menu_festeggiato.php";
?>
<div class="card">
  <h5 class="card-header bg-info display-4 text-light text-center">CHI HA ADERITO?</h5>
  <div class="card-body bg-dark">
    
    <div class="alert alert-primary text-center" role="alert"><p>In questa pagina potrai vedere i messaggi di auguri delle persone che hanno partecipato ai tuoi regali!</p>
    <p>N.B. per garantire l'anonimato della quota di partecipazione questa lista comparira solo quando <b> almeno 2 persone </b> avranno partecipato.</p>
    </div>
	<br>
<div class="container">
<center><form class="w-50 ">
<select  class="custom-select " name="Regalo" onchange="showPartecipanti(this.value)">
<option  value="">Seleziona regalo:</option>
<?

$lista='*';
$table="Regalo as R";
$cond="R.IDutente='".$_SESSION["Festeggiato"]->get_ID()."'";
$risultato_fatt=Request_db($table, $lista,$cond);
            if(mysqli_num_rows($risultato_fatt) > 0)
            { 	/*visualizzazione query*/
            	$ok=true; //mi dice se sono presenti regali
        		while($row = mysqli_fetch_array($risultato_fatt))
                {
                ?>
                <option value="<?php echo $row['IDregalo'] ?>"><?php echo ucfirst($row['NomeR'])?>-<?php echo $row['Evento']?></option>
        		<?}
        		mysqli_free_result($risultato_fatt);
                ?>
                  </select>
            </form></center>
                <?
              }
              else{  ?>
                  <div class="alert alert-warning" role="alert">
  						<strong>Attenzione:</strong>Nessun regalo è stato recuperato
					</div>
              <?}
            
        ?>
        <br>
        <div id="txtHint" class="text-light text-center">
        </div>
        </div>
        </div>
        </div>

<?php include "footer.php"?>