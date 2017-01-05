<?php ob_start(); require_once 'core/init.php';
include 'header.php';
if (empty($_POST) === false){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if (empty($username) === true || empty($password) === true) {
			$errors[] = 'You need to enter a username and password';
		} else if (user_exists($username) === false) {
			$errors[] = 'We can\'t find that username. Have you registered?';
		} else if (user_active($username) === false) {
			$errors[] = 'You haven\'t activated your account!';
		} else {
			
			if (strlen($password) > 32) {
				$errors[] = 'Password too long';
			}
			
			$login = login($username, $password);
			if ($login === false) {
				$errors[] = 'That username/password combination is incorrect';
			} else {
				$_SESSION['user_id'] = $login;
				header('Location: index.php');
				exit();
			}
		}
		
}	else  {
		$errors[] = 'No data received';
}
 
if (empty($errors) === false) {
?>
<center>
  <img src="warning.png" width="175" height="154" alt=""/>
<h2>We tried to log you in, but...</h2>
<?php
	echo output_errors($errors);
}
?>
<h4><a href="login.php">Try again</h4>
</center>
<br><br>
<?php include 'footer.php' ?>