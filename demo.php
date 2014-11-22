<?php 
	$userAgant = $_SERVER["HTTP_USER_AGENT"];
	echo "User-Agant: " . $userAgant;
	echo "<hr>";
	
	$p = isset($_GET["p"]) ? $_GET["p"] : "No Paramter";
	echo "Parameter p = $p";
	
?>