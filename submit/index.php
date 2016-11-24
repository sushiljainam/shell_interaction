<?php

$filename = 'req.data';
//echo json_encode(get_defined_vars());
//print_r(array_keys(get_defined_vars()));
print_r(get_defined_vars());

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
                                     saveLog('log.data','log'.$email);
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
function saveLog($filename, $type)
{
	$stringToWrt = $type.' : '.'||';
	$flag = file_put_contents ( $filename, $stringToWrt, FILE_APPEND );
                file_put_contents ( $filename, print_r(get_defined_vars()), FILE_APPEND);
	return $flag;
}
?>