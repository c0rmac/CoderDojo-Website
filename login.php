<?php

if (isset($_POST["email"]) && ($_POST["password"])) 
{
	$email = $_POST["email"];
	include_once "config.php";
	
$sql = "SELECT email, password_hash FROM users";
$data = $conn->query($sql);
    while($result = $data->fetch_assoc()) {
		
						if($_POST["email"] == $result['email']){
							
		echo "Oi you, ya got the email right, lets see 'bout the password now ya junkie";
						
		if (password_verify($_POST['password'], $result['password_hash'])) {
						
						echo "<p>da flippin hash was right, ya got in a'ight</p>";
					}
		else	{
			    echo $conn->error;
			echo "<p>jaesus ya flippin eejit, ya got the password wrong</p>";

		}
	}
	else{
		echo "Data is not in server, did you enter the right info?";
	}
				
	}
}
else {
	echo "You left the password field blank";
}

?>