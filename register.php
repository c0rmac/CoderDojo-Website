<?php
include_once "config.php";

				$name = $_POST["fullname"];
				$email = $_POST["email"];
                $user_password = $_POST['password'];

                // crypt the user's password with PHP 5.5's password_hash() function, results in a 60 character
                // hash string. the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using
                // PHP 5.3/5.4, by the password hashing compatibility library
                $password_hash = password_hash($user_password, PASSWORD_DEFAULT);

				echo $password_hash;
$sql = "INSERT INTO users (name, password_hash, email)
		VALUES('" . $name . "', '" . $password_hash . "', '" . $email . "')";
							
if ($conn->query($sql) === TRUE) {
    echo "Well your registerd...";
}
else
{
	echo "flippin hell somethin went wrong: ".$conn->error;
}
?>