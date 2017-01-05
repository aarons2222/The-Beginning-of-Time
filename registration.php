<?php ob_start(); require_once 'core/init.php'; 
logged_in_redirect();?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
<!--Viewport-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Main CSS-->
<link href="watches.css" rel="stylesheet" type="text/css">
<!--Bootstrapp CSS-->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--BRAND SLIDER-->
<link href="BrandSlider/css/style.css" rel="stylesheet" type="text/css">
<!--PRODUCT SLIDER CSS-->
<link href="productslider/css/productslider.css" rel="stylesheet" type="text/css">
<!--Footer position and width fix  CSS-->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<style> body{margin:0 auto;}</style>
  <link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet"> 

<!--PREVENT COPY AND PASTE IN PASSWORD-->
<script type="text/javascript">
window.onload = function() {
 var confirm_password = document.getElementById('confirm_password');
confirm_password.onpaste = function(e) {
   e.preventDefault();
 }
}
</script>
</head>
<body>


<?php include ('header.php');?>

<ol class="breadcrumb hidden-xs" id="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Register</li>
</ol>

<ol class="breadcrumb hidden-lg hidden-md hidden-sm" id="breadcrumbsmall">
  <li><a href="index.php">Home</a></li>
  <li class="active">Register</li>
</ol>








<div id="maincontainer">
  <?php 
if (empty($_POST) === false){
		$required_fields = array('username', 'password', 'confirm_password', 'firstname', 'lastname',);
		foreach($_POST as $key=>$value){
			if (empty($value) && in_array($key, $required_fields) === true){
				$errors[] = 'Fields marked with an asterisk are required';
				break 1;
			}
		}
		
		if (empty($errors) === true) {
			if (user_exists($_POST['username']) === true){
				$errors[] = 'Sorry, the username \'' . $_POST['username'] . '\' is already taken';
			}
			if (preg_match("/\\s/", $_POST['username']) == true) {
				$errors[] = 'Your username must not contain any spaces';
			}
			if (strlen($_POST['password']) < 6) {
				$errors[] = 'Your password must be at least 6 characters';
			}
			if ($_POST['password'] !== $_POST['password']) {
				$errors[] = 'Your passwords do not match';
			}
			if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
				$errors[] = 'A valid email address is required';
			}
			if (email_exists($_POST['email']) === true) {
				$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already in use';
			}
		}	
}
?>
<?php 

	if (isset($_GET['success']) === true && empty ($_GET['success']) === false){
		echo '
		<center>
		<img src="images/success-01-512.png" width="175" height="175" alt=""/>
		<p>You\'ve been registered successfully!</p>
		<p>Check your emails to activate your account!</p>
			</center>';	
	} else {
		if (empty($_POST) === false && empty($errors) === true) {
			$register_data = array(
				
		'username'    => $_POST['username'],
		'password'    => $_POST['password'],
		'firstname'   => $_POST['firstname'],
		'lastname'    => $_POST['lastname'],
		'email' 		  => $_POST['email'],
		'email_code'  => md5($_POST['username'] + microtime())
		);
		header('Location: registration.php?success');
		register_user($register_data);
		// redirect
		exit();
	} else if (empty($errors) === false){
		echo output_errors($errors);
	}

?>

               
<div id="registrationcontainer" class="container">


<div class="row">
 
	<div class="col-lg-4 col-md-4">
        
            <h2>Register For An Account</h2>
            
<p>By creating an account, you will be able<br>
 to move through the checkout process <br>
faster, store multiple shipping<br>
 addresses, view and track your orders in your <br>
account and more.
</p>            

</div>


          
              <div class="col-lg-4 col-md-4">
    
             
                        
<form id="registration-form" class="registration-form row" name="registration-form" method="post" action="#">
				
               <div class="form-group col-md-12">
				     <input type="text" name="firstname" id="firstname" class="form-control" required="required" placeholder="First name*">
				            </div>          
                            
                   <div class="form-group col-md-12">
				                <input type="text" name="lastname" id="lastname" class="form-control" required="required" placeholder="Last name">
				            </div>   
                            
                            
                     <div class="form-group col-md-12">
				                <input type="text" name="email" id="email" class="form-control" required="required" placeholder="Email address*">
				            </div>   
                     <div class="form-group col-md-12">
				                <input type="text" name="username" id="username" class="form-control" required="required" placeholder="Username*">
				            </div>   
                          
 
                </div>
                
                
                			<div class="col-lg-4 col-md-4">
                   
                   <div class="form-group col-md-12">
				    <input type="password" name="password" id="password" class="form-control" placeholder="Password*">
				            </div>   
                     
                     
                     <div class="form-group col-md-12">
	<input type="password" name="confirm_password" id="confirm_password" class="form-control"  placeholder="Confirm password*">
					</div>
                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
   					</div>   
             </form>
       </div> <!--end of row-->   
</div><!--end of container-->



<div class="clearout">&nbsp;</div>

</div>


<?php } include 'footer.php'; ?>
              <!--jquery-->
<script src="http://ajax.gooleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    			<!--bootstrap javascript-->
    <script src="js/bootstrap.js"></script>
</body>
</html>