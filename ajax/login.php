<?php

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST' ) {
		// Always return JSON format
		// header('Content-Type: application/json');

		$return = [];

		$email = Filter::String( $_POST['email'] );
		$password = $_POST['password'];

		// Make sure the user does not exist.
		$findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
		$findUser->bindParam(':email', $email, PDO::PARAM_STR);
		$findUser->execute();

		if($findUser->rowCount() == 1) {
			// User exists
			// We can also check to see if they are able to log in.
			$User = findUser->fetch(PDO::FETCH_ASSOC);
			$user_id = (int) $User['user_id'];
			$hash = (string) $User['password'];

			if (password_verify($password, $hash)) {
				 //currect password
				 $return['redirect'] = '/php_login_course/dashboard.php';
				 $_SESSION['user_id'] = $user_id;
			}else{
				 //invalid password
				 $return ['error'] = "Invalid user email/passowrd";
			}
			$return['error'] = "You already have an account";

		} else {
			// User does not exist, add them now.
			$return['error'] = "You do not have a ccount. <a href='php_login_course/register.php'>Create now!</a>";

		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		// Die. Kill the script. Redirect the user. Do something regardless.
		exit('Invalid URL');
	}
?>
