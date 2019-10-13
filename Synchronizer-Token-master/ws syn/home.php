<?php
if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'password'){
		echo '<h3>Successfully logged in</h3>';
	
	}
	else{
		echo 'Invalid Credentials';
		exit();
	}
}
else{
	header('Location:./login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

<script>
	
	$(document).ready(function(){

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("token_value").setAttribute('value', this.responseText) ;
		}
	
	
	};
	
	xhttp.open("GET", "tokenGen.php", true);
	xhttp.send();
	
	});
</script>
</head>

<body>
<div style="padding-top:8px;">
    <h2>Update a Status</h2>
    
    <div >
            <form  action="result.php" method="post" name="comment">
          
                 
                    <textarea id="msg"  name="msg" placeholder="comment here"></textarea><br><br>
				    <input type="hidden" name="token" value="" id="token_value"/>
                    <input class="button" type="submit" name="cSubmit" class="subcom" value="Update">
            </form>
                   
                
    </div>

</body>

</html>