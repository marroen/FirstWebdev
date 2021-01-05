<?php
if(isset($_POST['mailform']))
	
  $name = $_POST['Navn'] ;
  $name = $_POST['Navn'] ;
  $name = $_POST['Navn'] ;
  $epost = $_POST['Epost'] ;
  $phone = $_POST['Telefon'] ;
  $message = $_POST['Melding'] ;
  $date = $_POST['Dato'] ;
  $fylke = $_POST['Fylke'] ;
  $deltagere = $_POST['Deltagere'] ;
  $rydding = $_POST['Rydding'] ;
  $vasking = $_POST['Vasking'] ;
  $dorvakt = $_POST['Dorvakt'] ;
  $to = "bestilling@spiel.no";
  $subject = $_POST['Fest'] ;
  $body = "Fra: $name\n Email: $epost\n Telefon: $phone\n Fylke: $fylke\n Dato: $date\n Deltagere: $deltagere\n Rydding: $rydding\n Vasking: $vasking\n Dorvakt: $dorvakt\n Message: $message\n";
  
  $headers .= "From: $name < $epost >\n";
  phpversion();
	
	mail ($to, $subject, $body, $headers);
	echo "<p>Bestillingen din har blitt sendt, du vil høre tilbake fra oss straks!</p>";
	echo '<form><input type="button" value="Gå tilbake til startsiden" onClick="javascript:history.go(-1)"></form>';
?>