<?php

require_once 'token.php';


$val = $_POST["token"];


if(isset($_POST['msg'])){
	if(token::checkToken($val,$_COOKIE['SesT'])){
		echo "<h2> Valid request, Updated status: ".$_POST['msg']."</h2>";
		echo "<h3> Token:  ".$val."</h2>";	
		echo "<h3> Session ID:  ".$_COOKIE['SesT']."</h2>";	
	}
	else{
	   echo "<h2> Invalid (csrf token does not match) :  ".$_POST['msg']."</h2>";
	}
}
?>