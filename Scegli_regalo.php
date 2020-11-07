<form method="Post" action="Elenco_Regali.php">

	<center><table class="table-responsive-sm">
    <tr><th colspan="5" class="text-light text-center"><h3>Ricerca evento:</h3></th></tr>
    <tr>
    <td><label class="input-group-text">Data </label></td>
   <td><input class="form-control text-center" type="date" name="Data"></td>
   <td>
   <td><label class="input-group-text">Tipo </label></td>
   <td>
   <select  class="custom-select"name="Evento">  
   <option value="">Scegli evento:</option>
   	<?php foreach ($evento as $e)
    {?>
     <option value="<?php echo $e?>"> <?php echo $e?></option>
    <?}
    ?>
   </select>
   <td>
   </tr>
   <tr>
   <td colspan="5"><input class="form-control text-center btn btn-outline-primary" type="submit" value="Cerca" name="invia"></td>
   </tr>
   </table></center>
</form>
<br>

