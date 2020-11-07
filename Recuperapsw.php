<?php/*

NON SI PUò DECRIPTARE LA PASSWORD CON SHA1
include "header.php";
	$lista='Nome, Cognome, SHA1(Password) as psw ';
    $table="Utente";
    $cond="Email='".$_SESSION['Email_recupero']."'";
    $risult=Request_db( $table,$lista, $cond);
    if(mysqli_num_rows($risult) == 1)
    {
    	$password=$row['psw'];
    }
    else
    {
     echo "errore invio mail";
    }

// definisco mittente e destinatario della mail
$nome_mittente = "Il regalo che vorrei";
$mail_mittente = "ilregalochevorrei@apache.com";
$mail_destinatario = $_SESSION['Email_recupero'];

// definisco il subject ed il body della mail
$mail_oggetto = "Recupero Password";
$mail_corpo = "La tua password è: ".$password;

// aggiusto un po' le intestazioni della mail
// E' in questa sezione che deve essere definito il mittente (From)
// ed altri eventuali valori come Cc, Bcc, ReplyTo e X-Mailer
$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
$mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
$mail_headers .= "X-Mailer: PHP/" . phpversion();

if (mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers))
  echo "Messaggio inviato con successo a " . $mail_destinatario;
else
  echo "Errore. Nessun messaggio inviato.";*/
?>
<?php include "footer.html";?>