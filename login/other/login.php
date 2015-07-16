<?php
class Loginbool
{
	
	  public function __construct()
    {
        // create/read session, absolutely necessary
        session_start();

        // check the possible login actions:
        // if user tried to log out (happen when user clicks logout button)
        if (isset($_GET["logout"])) {
            $this->doLogout();
        }
        // login via post data (if user just submitted a login form)
        elseif (isset($_POST["login"])) {
            $this->dologinWithPostData();
        }
    }

    /**
     * log in with post data
     */
    private function dologinWithPostData()
    {
if (isset($_POST["email"]) && ($_POST["password"])) 
{
	$email = $_POST["email"];
	include_once "config.php";
	
$sql = "SELECT pid, email, password_hash, name FROM users";
$data = $conn->query($sql);
    while($result = $data->fetch_assoc()) {
		
						if($_POST["email"] == $result['email']){
							
		echo "Oi you, ya got the email right, lets see 'bout the password now ya junkie";
						
		if (password_verify($_POST['password'], $result['password_hash'])) {
						
						echo "<p>da flippin hash was right, ya got in a'ight</p>";
						$_SESSION['pid'] = $result['pid'];
                        $_SESSION['name'] = $result['name'];
                        $_SESSION['email'] = $result['email'];
                        $_SESSION['login_status'] = 1;
						header ('Location:summary.php');
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
}


 public function isUserLoggedIn()
    {
        if (isset($_SESSION['login_status']) AND $_SESSION['login_status'] == 1) {
            return true;
        }
        // default return
        return false;
    }
}
?>