<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="icon" href="https://image.freepik.com/free-icon/present-box-with-big-bow_318-9536.jpg" type="image/png" />	
     <title>Il regalo che vorrei</title>
        
<script>
function showPartecipanti(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getPartecipanti.php?p="+str,true);
    xmlhttp.send();
  }
}
</script>

  </head>
  <body >
 <span class="display-4  text-xs-center p-b-1 m-b-1  "  ><span class="text-warning">IL</span><span class="text-primary"> REGALO</span><span class="text-warning"> CHE </span><span class="text-primary">VORREI</span><span class="text-warning">.</span><span class="text-primary">.</span><span class="text-warning">.</span></span>
  <?php
  include "function.php";
  include "Utente.php";
  include "Festeggiato.php";
  include "Invitato.php";
  include "Regalo.php";
  include "Partecipazione.php";
  session_start();
  ?>

