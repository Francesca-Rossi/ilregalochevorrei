<?php
	/********* VARIABILI GLOBALI *********
	Inizializzo array contenti i nomi dei campi delle mie tabelle
	*/

$evento=array("Compleanno", "Cresima", "Comunione", "Laurea", "Matrimonio", "Battesimo", "Pensione");
$utente=array("Nome", "Cognome", "Data_n", "Email", "Numero", "Paypal", "Password");
$regalo=array("NomeR", "Evento", "Descrizione", "Scadenza", "Obiettivo", "IDutente");
$province = array(
    'AG' => 'Agrigento',
    'AL' => 'Alessandria',
    'AN' => 'Ancona',
    'AO' => 'Aosta',
    'AR' => 'Arezzo',
    'AP' => 'Ascoli Piceno',
    'AT' => 'Asti',
    'AV' => 'Avellino',
    'BA' => 'Bari',
    'BT' => 'Barletta-Andria-Trani',
    'BL' => 'Belluno',
    'BN' => 'Benevento',
    'BG' => 'Bergamo',
    'BI' => 'Biella',
    'BO' => 'Bologna',
    'BZ' => 'Bolzano',
    'BS' => 'Brescia',
    'BR' => 'Brindisi',
    'CA' => 'Cagliari',
    'CL' => 'Caltanissetta',
    'CB' => 'Campobasso',
    'CI' => 'Carbonia-Iglesias',
    'CE' => 'Caserta',
    'CT' => 'Catania',
    'CZ' => 'Catanzaro',
    'CH' => 'Chieti',
    'CO' => 'Como',
    'CS' => 'Cosenza',
    'CR' => 'Cremona',
    'KR' => 'Crotone',
    'CN' => 'Cuneo',
    'EN' => 'Enna',
    'FM' => 'Fermo',
    'FE' => 'Ferrara',
    'FI' => 'Firenze',
    'FG' => 'Foggia',
    'FC' => 'Forlì-Cesena',
    'FR' => 'Frosinone',
    'GE' => 'Genova',
    'GO' => 'Gorizia',
    'GR' => 'Grosseto',
    'IM' => 'Imperia',
    'IS' => 'Isernia',
    'SP' => 'La Spezia',
    'AQ' => 'L\'Aquila',
    'LT' => 'Latina',
    'LE' => 'Lecce',
    'LC' => 'Lecco',
    'LI' => 'Livorno',
    'LO' => 'Lodi',
    'LU' => 'Lucca',
    'MC' => 'Macerata',
    'MN' => 'Mantova',
    'MS' => 'Massa-Carrara',
    'MT' => 'Matera',
    'ME' => 'Messina',
    'MI' => 'Milano',
    'MO' => 'Modena',
    'MB' => 'Monza e della Brianza',
    'NA' => 'Napoli',
    'NO' => 'Novara',
    'NU' => 'Nuoro',
    'OT' => 'Olbia-Tempio',
    'OR' => 'Oristano',
    'PD' => 'Padova',
    'PA' => 'Palermo',
    'PR' => 'Parma',
    'PV' => 'Pavia',
    'PG' => 'Perugia',
    'PU' => 'Pesaro e Urbino',
    'PE' => 'Pescara',
    'PC' => 'Piacenza',
    'PI' => 'Pisa',
    'PT' => 'Pistoia',
    'PN' => 'Pordenone',
    'PZ' => 'Potenza',
    'PO' => 'Prato',
    'RG' => 'Ragusa',
    'RA' => 'Ravenna',
    'RC' => 'Reggio Calabria',
    'RE' => 'Reggio Emilia',
    'RI' => 'Rieti',
    'RN' => 'Rimini',
    'RM' => 'Roma',
    'RO' => 'Rovigo',
    'SA' => 'Salerno',
    'VS' => 'Medio Campidano',
    'SS' => 'Sassari',
    'SV' => 'Savona',
    'SI' => 'Siena',
    'SR' => 'Siracusa',
    'SO' => 'Sondrio',
    'TA' => 'Taranto',
    'TE' => 'Teramo',
    'TR' => 'Terni',
    'TO' => 'Torino',
    'OG' => 'Ogliastra',
    'TP' => 'Trapani',
    'TN' => 'Trento',
    'TV' => 'Treviso',
    'TS' => 'Trieste',
    'UD' => 'Udine',
    'VA' => 'Varese',
    'VE' => 'Venezia',
    'VB' => 'Verbano-Cusio-Ossola',
    'VC' => 'Vercelli',
    'VR' => 'Verona',
    'VV' => 'Vibo Valentia',
    'VI' => 'Vicenza',
    'VT' => 'Viterbo',
);
$mesi = array('gennaio', 'febbraio', 'marzo', 'aprile',
                'maggio', 'giugno', 'luglio', 'agosto',
                'settembre', 'ottobre', 'novembre','dicembre');

/*funzioni base*/
    
 	function Connes_db()
    {
    	/*funzione di connessione al DB mi restituisce il link di connesione*/
    	/*$host='localhost';
		$user='ilregalochevorrei';
		$password='';
		$database='my_ilregalochevorrei';*/ /*-connessione ad altervista*/
		$host='localhost';
		$user='root';
		$password='';
		$database='my_ilregalochevorrei';
		$link = mysqli_connect($host, $user, $password, $database);
        return $link;
  }
    
    function Insert_db($table, $attribute, $value) 
    {
    	/*funz d'inserimento record in DB*/
    	 $link=Connes_db(); //mi connetto al DB
    
    	$sql="INSERT INTO ".$table." ".$attribute."VALUES ".$value;
        if (mysqli_query($link, $sql)) {
               return true;
               
            } else {
               //echo "Error: " . $sql . "" . mysqli_error($link);
               return false;
            }
        
	}
    function Request_db($table, $list, $condiz) 
    {
    	/*funz di restituzione record di un DB*/
    	 $link=Connes_db(); //mi connetto al DB
    	if (empty($condiz))
        {
        	$sql="SELECT ".$list." FROM ".$table;
           
        }
        else
        {
    		$sql="SELECT ".$list." FROM ".$table." WHERE ".$condiz;
        
        }
   //echo $sql;
        $result=mysqli_query($link, $sql);
        return $result;
        
        
	}
    function Update_db($table, $setattribute, $setvalue, $condattribute, $condvalue) 
    {
    	/*funz d'aggiornamento record in DB*/
    	 $link=Connes_db(); //mi connetto al DB
    
    	$sql="UPDATE ".$table." SET ".$setattribute."=".$setvalue." WHERE ".$condattribute."='".$condvalue."'";
        //echo $sql;
        if (mysqli_query($link, $sql)) {
               return true;
               
            } else {
               //echo "Error: " . $sql . "" . mysqli_error($link);
               return false;
            }
        
	}
        function Delete_db($table,$condattribute, $condvalue) 
    {
    	
        
        /*funz cancellazione record in DB*/
    	 $link=Connes_db(); //mi connetto al DB
    
    	$sql="Delete  from ".$table." WHERE ".$condattribute."='".$condvalue."'";
        //echo $sql;
        if (mysqli_query($link, $sql)) {
               return true;
               
            } else {
               //echo "Error: " . $sql . "" . mysqli_error($link);
               return false;
            }
        
	}

function output_error_login()
{?>
 <div class="alert alert-danger text-center" role="alert">
  		<p>Password o username errati</p>
        <button class="btn btn-primary" onclick="goBack()">Indietro</button>
	</div>
<?php }
?>