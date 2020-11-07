<?php 
    include "header.php";
    if (empty($_SESSION["Festeggiato"]))
    {
    include "Menu_invitato.php";
    }
    elseif(empty($_SESSION["Invitato"]))
    {
    include "Menu_festeggiato.php";
    }
    ?>
<table class="table table-striped table-light table-responsive-sm"><tbody>
<tr>
  <td width="50%" class="text-right"><?php echo $utente[0];?></td>
  <td><b><?php echo $_SESSION['Utente']->get_nome();?></b></td>
</tr>
<tr>
  <td width="50%" class="text-right"><?php echo $utente[1];?></td>
  <td><b><?php echo $_SESSION['Utente']->get_cognome();?></b></td>
</tr>
<tr>
  <td width="50%" class="text-right">Data di nascita</td>
  <td><b><?php
  $data=date_create($_SESSION['Utente']->get_data());
  echo date_format($data, "d/m/Y");?></b></td>
</tr>
<tr>
  <td width="50%" class="text-right"><?php echo $utente[3];?></td>
  <td><b><?php echo $_SESSION['Utente']->get_email();?></b></td>
</tr>
</tbody></table>
<?php include "footer.php"?>
