<?php ob_start(); require_once 'core/init.php';
protect_page();?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Change Password</title>
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
</head>
<body>

<?php if(isset($_SESSION['user_id'])){
	 include ('headerloggedin.php');
}else{
	
	include ('header.php');
	}
?>

<ol class="breadcrumb hidden-xs" id="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Change Password</li>
</ol>

<ol class="breadcrumb hidden-lg hidden-md hidden-sm" id="breadcrumbsmall">
  <li><a href="index.php">Home</a></li>
  <li class="active">Change Password</li>
</ol>
<?php 

 if (empty($_POST) === false) {
	 $required_fields = array('current_password', 'password', 'password_again');
	 foreach($_POST as $key=>$value){
		 if (empty($value) && in_array($key, $required_fields) === true){
			 $errors[] = 'Fields marked with an asterisk are required';
			 break 1;
		 }
	 }
	 
	 if (md5($_POST['current_password']) === $user_data['password']) {
			if (trim($_POST['password']) !== trim($_POST['password_again'])) {
					$errors[] = 'Your new passwords do not match';
			} else if (strlen($_POST['password']) < 6) {
				$errors[] = 'Your password muct be at least 6 characters';
			}
	} else {
		$errors[] = 'Your current password is incorrect';
	}
	 
 }
?>


					<!--contentStart-->
                        
                        
                         <div id="passwordchange" class="container">
    	
	       			   			
				    			    				    				
				
    		<div class="row">  	
           
	    		<div class="col-sm-12 col-md-12">
	    			<div class="pwordchange">
	    				
                      
                      <?php  
					  	if (isset($_GET['success']) && empty($_GET['success'])) {
								echo '
								<center>
<img src="images/success-01-512.png" width="175" height="175" alt=""/>
<h2>Your password has been changed</h2>
<h4>Check your email to activate your account</h4>
</center>';
						} else {
					  
					  	if (empty($_POST) === false && empty($errors) === true){
								change_password($session_user_id, $_POST['password']);
								header('Location: changepassword.php?success');
						} else if (empty($errors) === false) {
								echo output_errors($errors);
						}
					  ?>
                    <h2 class="title">Change Password</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="changepassword" class="changepassword-form row" name="login-form" method="POST" action="">
				          
				            <div class="form-group col-md-12">
				                <input type="password" name="current_password" class="form-control" required="required" placeholder="Current Password">
				            </div>
                            
                            
				            <div class="form-group col-md-12">
				                  <input type="password" name="password" class="form-control" required="required" placeholder="New Password">
				            </div> 
                            
                              
                              <div class="form-group col-md-12">
				                  <input type="password" name="password_again" class="form-control" required="required" placeholder="Repeat New Password">
				            </div> 
                            
                                                   
				            <div class="form-group col-md-12">
                             
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Send">
				            </div>
                          
				        </form>
                        
                       <?php } ?>
	    			</div>
	    		</div>
	    	
	    
    			</div>    			
	    
    	</div>	
 <br><br>

			<?php include('footer.php');?>
              			<!--bootstrap javascript-->
    <script src="js/bootstrap.js"></script>
              <!--jquery-->
<script src="http://ajax.gooleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  
</body>
</html>