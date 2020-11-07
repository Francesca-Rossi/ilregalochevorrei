<?php include "header.php";
?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v7.0"></script>
<?php
	$conta=0; //var di controllo
	$valori="( "; //stringa per costruire la values dell'insert
	$attrib="( "; //stringa per costruire gli attributi dell'insert
  foreach ($regalo as $r)
  {
      $conta=$conta+1;
      	 if ($conta>1)// solo dopo la prima stringa aggiungo la virgola
         {
          $valori=$valori.", ";
          $attrib=$attrib.", ";
          }
      
      	$attrib=$attrib." `".$r."`"; //aggiungo il campo alla stringa
     
        if ($r=="IDutente") //inserisco l'ID dell'utente (festeggiato) corrente
        {
        	$valori=$valori." '".$_SESSION["Festeggiato"]->get_ID()."'"; 
        }
        else
        {
            $valori=$valori." '".$_POST[$r]."'"; 
        }
        
       

	}
$valori=$valori.") ";
$attrib=$attrib.") ";

$risult=false;
if (!empty($_POST['NomeR'])) 
	{
    $risult=Insert_db('Regalo', $attrib, $valori);
    }
    
if($risult==true)
{?>
	<center><div class="container">
    <div class="alert alert-success" role="alert">
  		<p>Hai aggiunto un nuovo regalo.</p>
        <p><b>Invita i tuoi amici a partecipare!!</b></p>
        <div class="fb-share-button" data-href="http://www.ilregalochevorrei.altervista.org/" data-layout="button" data-size="large">
        	<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.ilregalochevorrei.altervista.org%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Condividi</a>
        </div>
	</div>
    <a href='Aggiungi_regalo.php'><button class='btn btn-outline-success'>Aggiungi un altro regalo</button></a>
    <a href='Lista_partecipazioni.php'><button class='btn btn-outline-success'>Vai alle partecipazioni</button></a>
    </div></center>
<?}
else
{?>
	<center><div class="container">
    <div class="alert alert-danger" role="alert">
  		C'è stato un errore. Riprova!
	</div>
    <a href='Aggiungi_regalo.php'><button class='btn btn-primary'>Indietro</button></a>
    </div></center>
<?}
 include "footer.html";?>