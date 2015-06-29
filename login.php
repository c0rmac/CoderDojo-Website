<?php

if (isset($_POST["email"]) && ($_POST["password"])) 
{
	echo "login will initiate";
}
else {
	echo "no info found";
}

?>