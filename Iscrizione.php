<?php include "header.php"; 
?>
<div class="card text-center">
  <h5 class="card-header bg-warning display-3 text-light text-xs-center p-b-1 m-b-1">
  
  <svg class="bi bi-arrow-down" width="3em" height="2em" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M4.646 9.646a.5.5 0 01.708 0L8 12.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z" clip-rule="evenodd"/>
    <path fill-rule="evenodd" d="M8 2.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
    <span class="display-4 text-center ">REGISTRATI QUI</span>
    <svg class="bi bi-arrow-down" width="3em" height="2em" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M4.646 9.646a.5.5 0 01.708 0L8 12.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z" clip-rule="evenodd"/>
    <path fill-rule="evenodd" d="M8 2.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
  </svg>
  </h5>
  <div class="card-body bg-dark">
  <form method="post" action="Registrazione.php">
  <center><table class="table-responsive-sm  " >
      <tr>
          <td colspan="2"><input class="form-control text-center" type="text" name="Nome" placeholder="Nome*" required></td>
      </tr>
     
      <tr >
          <td colspan="2"><input  class="form-control text-center" type="text" name="Cognome"  placeholder="Cognome*" required></td>
      </tr>
      <tr>
      <td ><label class="input-group-text ">Data di nascita* </label></td>
      <td ><input class="form-control text-center" type="date" name="Data_n"  placeholder="Data di nascità*" required></td>
      
      
      </tr>
      <tr>
        <td colspan="2"><input class="form-control text-center" type="Email" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email*" required></td>
      </tr>
     <!-- <tr>
        <td colspan="2"><input class="form-control text-center" type="text" name="Paypall" placeholder="Email conto Paypall*" required ></td>
      </tr>-->
      <tr>
        <td class="w-50"><input  class="form-control text-center" type="password" name="Password"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="" placeholder="Password*" id="input_password"  ></td>
          <td class="w-25">  <a href="#" onclick="show_password()">Mostra</a></td>

      </tr>
      <tr>
      <tr>
      <td colspan="2"><p class="text-italic text-light"> *Questi campi sono obbligatori</p></td>
      </tr>
      <tr>
      <td colspan="2">
      <input class="form-control  btn btn-outline-warning" type="submit" value="REGISTRATI">
      </td>
      </tr>
    </table></center>
    </form>

</div>
</div>
<?php include "footer.html"?>
