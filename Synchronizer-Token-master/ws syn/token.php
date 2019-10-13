<?php

class token {
   
	public static function checkToken($token,$sessionIdentifier){
		
		
		$wsfile = fopen("savedTokens.txt", "r") or die("Unable to open file!");
		list($tok,$sid) = explode(",",chop(fgets($wsfile)),2);
		fclose($wsfile);
		if($tok == $token){
			if($sessionIdentifier == $sid ) {
		       return true;
			}
		}
	}
}
?>