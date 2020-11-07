<?php include "header.php";
?>
<!--<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v7.0"></script>-->
<?php
	$importo=$_POST['Importo'];
    $messaggio=$_POST['Messaggio'];
    $attrib="( `Importo`, `Messaggio`,`Data` , `IDutente`, `IDregalo`)";
    $valori="('".$importo."', '".$messaggio."','".date("Y-m-d")."', '".$_SESSION["Invitato"]->get_ID()."', '".$_SESSION["Regalo"]->get_ID()."')";
 //variabili per la mail
$to =$_SESSION['Regalo']->get_festeggiato()->get_email(); ;
$subject = "ILREGALOCHEVORREI: Hai una nuova partecipazione per ".$_SESSION['Regalo']->get_nome();
$message = "
<html>
<head>
<title> Hai una nuova partecipazione per ".$_SESSION['Regalo']->get_nome()."</title>
</head>
<body>
<p>".$_SESSION['Invitato']->get_nome()." ha partecipato a". $_SESSION['Regalo']->get_nome()."</p>
<p><a href='www.ilregalochevorrei.altervista.org/Login_form.php'>Accedi</a> Per visualizzare il messaggio di auguri</p>

</body>
</html>
";

// Always set content-type when sending HTML email
$nome_mittente = "Il regalo che vorrei";
$mail_mittente = "ilregalochevorrei@apache.com";
/*-------
NUOVO FRANCESCA 21/05
---------------*/
$headers. = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
/*---------*/
$headers. = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
//$headers .= 'From: <webmaster@example.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";



$risult=false;
if (!empty($_POST['Importo'])) 
	{
    $risult=Insert_db('Partecipazione', $attrib, $valori);
    }
    
if($risult==true)
{
//AGGIORNO IMPORTO RACCOLTO REGALO
$risult=false;

$risult=Update_db('Regalo', 'Tot_raccolto',$_SESSION['Regalo']->Aggiungi_quota($importo), 'IDregalo', $_SESSION['Regalo']->get_ID() ) ;
$email=mail($to,$subject,$message,$headers);

if (($risult==true)&&($email==true))
{

?>
	
	<center><div class="container">
    <div class="alert alert-success" role="alert">
  		<p>Grazie per aver partecipato al <?php echo $_SESSION['Regalo']->get_nome();?> di <?php echo $_SESSION['Regalo']->get_festeggiato()->get_nome();?> </p>
        <p><b>Ti ricordo che <?php echo $_SESSION['Regalo']->get_festeggiato()->get_nome();?> non vedrà il tuo importo! </b></p>
	</div>
    <a href='Elenco_Regali.php'><button class='btn btn-outline-success'>Partecipa a un altro regalo</button></a>
    <a href='Dashboard_invitato.php'><button class='btn btn-outline-success'>Home</button></a>
    </div></center>
<?}
else{?>
<center><div class="container">
    <div class="alert alert-danger" role="alert">
  		Non sono riuscito ad aggiungere la tua quota al regalo
	</div>
    <a href='Elenco_Regali.php'><button class='btn btn-primary'>Indietro</button></a>
    </div></center>
<? }}
else
{?>
	<center><div class="container">
    <div class="alert alert-danger" role="alert">
  		C'è stato un errore. Riprova!
	</div>
    <a href='Elenco_Regali.php'><button class='btn btn-primary'>Indietro</button></a>
    </div></center>
<?}
 include "footer.html";?>