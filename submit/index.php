<?php

echo "reply from website - \n";
if (isset($_POST)) {
	if (isset($_POST['u_email'])) {
		if(isset($_POST['u_passwd'])) {
			//either sign up or login.
			$email = $_POST['u_email'];
			$passwd = $_POST['u_passwd'];
			echo "received inputs as - \n";
			echo $email." \n";
			echo $passwd." \n";

			//$var_dump($_POST);

			//save data in file
		}
	}
}

?>