<?php
include "header.php";
/* controllo se il cliente può accedere*/
	
	$email=$_POST['Email'];
    $password=$_POST['Password'];
	$lista="*";
    $table="Utente";
    $cond="Email='".$email."' and Password=SHA1('".$password."')";
    $risult=Request_db( $table,$lista, $cond);
    if(mysqli_num_rows($risult) == 1)
    {
    	while($row = mysqli_fetch_array($risult)){
         			$utente=new Utente($row['IDutente'], $row["Nome"], $row['Cognome'],$row['Data_n'], $row['Email'], $row['Paypall'], $row['Password']);
   					
         }
     	 mysqli_free_result($risult);
         $_SESSION["Utente"]=$utente; //passo un oggetto come parametro
         header('Location: http://www.ilregalochevorrei.altervista.org/Home.php');
      	
    }
    else
    {
     output_error_login();
    }
    

include "footer.html";
?>
