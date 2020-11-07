<?php
include "header.php";
//controllo che non sia presente già un mail così
$lista='* ';
    $table="Utente";
    $cond="Email='".$_POST['Email']."'";
    $risult=Request_db( $table,$lista, $cond);
    if(mysqli_num_rows($risult) == 0)
    {
                  /*mail non presente registro la persona*/
         $password=false;
          $conta=0; //var di controllo
          $valori="( "; //stringa per costruire la values dell'insert
          $attrib="( "; //stringa per costruire gli attributi dell'insert
        foreach ($utente as $u)
        {
            $conta=$conta+1;
               if ($conta>1)// solo dopo la prima stringa aggiungo la virgola
               {
                $valori=$valori.", ";
                $attrib=$attrib.", ";
                }

              $attrib=$attrib." `".$u."`"; //aggiungo il campo alla stringa

              if ($u=="Password") //controllo password
              {
                  if (strlen($_POST[$u])>=6)
                  {
                      //echo "ok";
                      $password=true;
                      $valori=$valori."SHA1('".$_POST[$u]."')";
                  }
                  else
                  {
                  // echo " no ok";
                  $password=false;
                  
                  }
              }
              else
              {
                  $valori=$valori." '".$_POST[$u]."'"; 
              }



          }
      $valori=$valori.") ";
      $attrib=$attrib.") ";

      $risult=false;




      if (!empty($_POST['Nome'])) //se ho riempito i campi
          {
          $risult=Insert_db('Utente', $attrib, $valori);
          }
      if (($risult==true)&&($password==true))
      {?>
          <center><div class="container">
          <div class="alert alert-success" role="alert">
              Registrazione avvenuta con successo
          </div>
          <!--EMAIL DI CONFERMA, FRA 21/05-->
          		  <?php
$nome_mittente = "Il regalo che vorrei";
$mail_mittente = "ilregalochevorrei@apache.com";
$mail_destinatario = $_POST['Email'];

// definisco il subject ed il body della mail
$mail_oggetto = "Registrazione ilregalochevorrei";
$mail_corpo = "
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
</head>
<body>
Ciao ".$_POST['Nome']." conferma la tua mail accedendo qui:<a href='http://www.ilregalochevorrei.altervista.org/Login_form.php'><button class='btn btn-primary'>Accedi</button></a>
</body>
</html>
";


// aggiusto un po' le intestazioni della mail
// E' in questa sezione che deve essere definito il mittente (From)
// ed altri eventuali valori come Cc, Bcc, ReplyTo e X-Mailer
$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
$mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
$mail_headers .= "X-Mailer: PHP/" . phpversion();
$mail_headers .= "MIME-Version: 1.0" . "\r\n";
$mail_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

if (mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers))
{ ?>
<div class="alert alert-success" role="alert">
              Messaggio inviato con successo a <?php echo $mail_destinatario;?>
          </div>
<?php
}
else
 { ?>
<div class="alert alert-danger" role="alert">
              Nessun messaggio è stato inviato
          </div>
<?php
}
  ?>
        <!--vecchio codice-->  <!--<a href='Login_form.php'><button class='btn btn-primary'>Accedi</button></a>-->
          </div></center>
      <?}
      elseif ($password==false)
      { ?>
          <center><div class="container">
          <div class="alert alert-danger" role="alert">
              <p>La password inserita è troppo corta.</p>
              <p>Ti ricordo che la password deve avere <b> almeno 6 caratteri alfanumerici </b></p>
          </div>
          <a href='Iscrizione.php'><button class='btn btn-primary'>Indietro</button></a>
          </div></center>
      <?}
      else
      {?>
          <center><div class="container">
          <div class="alert alert-danger" role="alert">
              C'è stato un errore. Riprova!
          </div>
          <a href='Iscrizione.php'><button class='btn btn-primary'>Indietro</button></a>
          </div></center>
      <?}
              }
else
    {
    $_SESSION['Email_recupero']=$_POST['Email'];
?>
<center><div class="container">
    	<div class="alert alert-danger" role="alert">
  		 Email già presente nel sistema.
		</div>
    	<a href='Login_form.php'><button class='btn btn-primary'>Accedi</button></a>
    	</div></center>
 <? }
include "footer.html";
?>
