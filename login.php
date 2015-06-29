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
		echo "Indeed you got the submited information right";
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