<?php
/**
 * Simple Login
 *
 * @package		Simple Login 
 * @author		Ricky Apuzzo III
 * @since		Version 1.0
 */
 
/**
 * $enc_passwd 
 * Paste a sha1 encrypted password in-between the quotes below.
 * This variable holds the sha1 encrypted password 
 * used to log into the redirect-login.php page.
 * HINT: the password is password
 */
 
$enc_passwd = '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8';

/** 
 * error_reporting
 * All Errors for this php script are disabled.
 *
 * error_reporting(E_ALL); // This would display all errors
 *
 */
 
error_reporting(0);

/**
 * session_start()
 * This function creates our session.
 */

session_start();

/**
 * Login and Logout requests
 * If the GLOBAL $_REQUEST equals "logout" then the first
 * if statement is executed. 
 * If the GLOBAL $_REQUEST equals "pwd" (for password) then
 * the second if statement is executed.
 *
 * Username is valid if set, no specific user required here.
 */

	if (isset($_REQUEST['logout'])) {
		$_SESSION['auth'] = 'incomplete';
		header('Location: index.php');
		exit(0);
	}
	$err = 0;
	if ( (isset($_REQUEST['usr']) && $_REQUEST['usr'] != '') && (isset($_REQUEST['pwd']) && $_REQUEST['pwd'] != '')) {
		if (sha1($_REQUEST['pwd']) == $enc_passwd) {
			$_SESSION['auth'] = 'completed';
			$is_index = ($_SERVER['REQUEST_URI'] != '' ? $_SERVER['REQUEST_URI'] : 'index.php');
			header('Location:' . $is_index);
			exit(0);
		}
	} else {
		// Logic flaw! if() fails when the values checked are set to empty strings
		// Check if isset and != ''
		if (!isset($_REQUEST['usr']) && !isset($_REQUEST['pwd'])) {
			$err = 'You must enter a username and password.';
		} else {
			$err = 'The username and password combination you entered is invalid!';
		}
	}

/** 
 * Login form - will return if $_SESSION['auth'] is 'incomplete'. 
 *
 * When login is successful $_SESSION['auth'] is 'complete'
 * and the user is redirected to the protected index and test pages.
 */
 
$authed = $_SESSION['auth'];
	
if ($authed !== 'completed') {
	?><!DOCTYPE html>
	<head>
		<title>Login</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
				
		<!-- Latest compiled and minified JavaScript -->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>			
	</head>
	<body>
    <div class="container">
		<?php if ($err !== 0) {?>
			<div class="alert alert-warning col-xs-12">
				<?php echo $err; ?>
		    </div>
		<?php }?>
      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
		
        <label for="user">Username</label>
        <input class="form-control" type="text" name="usr" id="user" tabindex="1" placeholder="Username" required autofocus><br>
		
        <label for="inputPassword">Password</label>
        <input class="form-control" type="password" name="pwd" id="passwd" tabindex="2" required><br>
		
        <input class="btn btn-lg btn-primary btn-block" type="submit" id="login" value="Login" tabindex="3" />
      </form>

    </div> <!-- /container -->	

	</body>
	</html>
	<?php exit(0);
} 
/**
 * End of file 
 */