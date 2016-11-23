<?php

$filename = 'req.data';
echo json_encode(get_defined_vars());
// echo "reply from website - \n";
if (isset($_POST)) {
	if (isset($_POST['u_email'])) {
		if(isset($_POST['u_passwd'])) {
			//either sign up or login.
			$email = $_POST['u_email'];
			$passwd = $_POST['u_passwd'];
			// echo "sent data as - \n";
			// echo $email." \n";
			// echo $passwd." \n";

			$success = saveRequest($filename,'signup',[$email,$passwd]);

			echo $success;
			// if ($success > 0) {
			// 	echo "done successfully \n";
			// } else {
			// 	echo "not done successfully \n";
			// 	if ($success === false) {
			// 		echo "success is myth \n";
			// 	}
			// }
			
			//if success > 0 OK
			//if success === false -> not OK
			

			//save data in file
		}
	}
}

function saveRequest($filename, $type, $data)
{
	$stringToWrt = $type.' : '.$data[0].','.$data[1].'||';
	$flag = file_put_contents ( $filename, $stringToWrt, FILE_APPEND );
	return $flag;
}
?>