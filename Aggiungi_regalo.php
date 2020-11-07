<?php include "header.php"; 
?>
<? include "Menu_festeggiato.php";?>
<div class="card text-center">
  <h5 class="card-header bg-success display-3 text-light text-xs-center p-b-1 m-b-1">
    <span class="display-4 text-center "> CHE REGALO DESIDERI?</span>
  </h5>
  <div class="card-body bg-dark">
  <form method="Post" action="Salva_regalo.php">
  <center><table class="table-responsive-sm" >
      <tr >
          <td colspan="2"><input class="form-control text-center" type="text" name="NomeR" placeholder="Nome regalo*" required></td>
     </tr>
      <tr >
      	  <td><label class="input-group-text">Per quale evento vuoi questo regalo?*</label></td>
          <td><select  class="form-control text-center" name="Evento" required>
          	<?php foreach($evento as $e)
            {?>
            	<option value="<?php echo $e;?>"> <?php echo $e;?></option>
           <?php }?>
          </select></td>
          
      </tr>
      <tr>
      	<td colspan="2"><textarea class="form-control text-center" name="Descrizione"  placeholder="Perchè vuoi questo regalo?*" required ></textarea>
      </tr>
      <tr>
      	<td><label class="input-group-text">Data ultima per partecipare al regalo:* </label></td>
        <td ><input class="form-control text-center" type="date" name="Scadenza" required></td>
      </tr>
      <tr>
        <td ><input class="form-control text-center" type="numeric" name="Obiettivo" placeholder="Obiettivo da raggiungere*" required ></td>
      	<td><label class="input-group-text ">Euro </label></td>
      </tr>
      <tr>
      <td colspan="2"><p class="text-italic text-light"> *Questi campi sono obbligatori</p></td>
      </tr>
      <tr>
      <td colspan="2">
      <input class="form-control  btn btn-outline-success" type="submit" value="AGGIUNGI">
      </td>
      </tr>
    </table></center>
    </form>

</div>
</div>
<?php include "footer.html"; ?>
