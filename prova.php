<?php
	include "Utente.php";
	include "Festeggiato.php";
	include "Invitato.php";
	include "Regalo.php";
	include "Partecipazione.php";
	$pippo=new Festeggiato("Pippo", "Rossi", "pippo@gmail.com", "2020-02-05", "paypall123");
	echo $pippo->message();
	?>
	<br>
	<?php
	$reg1=new Regalo($pippo, "PC", "jscncnasba", "Laurea", "24/05/2020", 200, 400);
	echo ("Il ".$reg1->get_nome()." e il regalo di ".$reg1->get_festeggiato()->get_nome());
	?>
	<br>
	<?php $pluto=new Invitato ("Pluto", "Neri", "pluto@gmail.com", "2020-01-05", "paypall245");
	echo $pluto->message();?>
	<br>
	<?php
	$part1=new Partecipazione($pluto, "jnfnnvwobn", 50, $reg1);
	echo ($part1->get_invitato()->get_nome()." Partecipa al ".$part1->get_regalo()->get_nome()." di ".$part1->get_regalo()->get_festeggiato()->get_nome());
	?>