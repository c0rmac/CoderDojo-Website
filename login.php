<?php

if (isset($_POST["email"]) && ($_POST["password"])) 
{
	$email = $_POST["email"];
	include_once "config.php";
	
$sql = "SELECT email, password_hash FROM users";
$result = $conn->query($sql);

//Login initaites
if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	if($_POST["email"] == $row["email"]){
		echo "Oi you, ya got the email right, lets see 'bout the password now ya junkie";
		if($_POST["password"] == 'password'){
			echo "<p>guess what ya junkie, the flippin password is roight, now ya can go smuggle weed 'cross the border</p>"
		}
	}
	else{
		echo "Data is not in server, did you enter the right info?";
	}
		} 
}
}
else {
	echo "You left the password field blank";
}

?>