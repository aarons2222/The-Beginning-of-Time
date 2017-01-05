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
    <script src="js/bootstrap.js"></script>
              <!--jquery-->
<script src="http://ajax.gooleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

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
  <li class="active">Account Info</li>
</ol>

<ol class="breadcrumb hidden-lg hidden-md hidden-sm" id="breadcrumbsmall">
  <li><a href="index.php">Home</a></li>
  <li class="active">Account Info</li>
</ol>

	    				<?php 

if (empty($_POST) === false) {
	$required_fields = array('firstname', 'email');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true){
			$errors[] = 'Fields Marked with an asterisks are required';
			break 1;
		}
	}
	
	if (empty($errors) === true) {
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
				$errors [] = 'A valid email address is required';
		} else if (email_exists($_POST['email']) === true && $user_data['email'] !== $_POST['email']) {
			$errors [] = 'Sorry, the email \'' . $_POST['email'] . '\' is already taken.';
			
		}
	}

}

?>							<!--contentStart-->
           <div id="changeinfo" class="container">
    				<div class="row">  	
           				<div class="col-sm-12 col-md-12">
	    			<div class="changeinfo">
                    
	    				<?php 
if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
			echo '
			<center>
			
			<img src="images/success-01-512.png" width="175" height="175" alt=""/>
			<h4>Your details have been updated successfully!</h4>
			
			</center>
			';											
			} else {
					if (empty($_POST) === false && empty($errors) === true) {
						$update_data =array(
						
						'firstname'  => $_POST['firstname'],
						'lastname' 	 => $_POST['lastname'],
						'email'		 => $_POST['email']
						);
						
						update_user($update_data);
						header('Location: useraccount.php?success');
						exit();
						
						
					} else if (empty($errors) === false){
						echo output_errors($errors);
					}
					?>
                      
                   
                    <h2 class="title">Update Information</h2>
                    <p>Update your records by changing the information below</p>
					
				    	<form id="updateinfo" class="updateinfo-form row" name="login-form" method="POST" action="">
				          
				            <div class="form-group col-md-12">
                            	
				                <input type="text" name="firstname" class="form-control" required="required" value="<?php echo $user_data['firstname'];?>">
				            </div>
                            
                            
				            <div class="form-group col-md-12">
                            
				                  <input type="text" name="lastname" class="form-control" required="required" value="<?php echo $user_data['lastname'];?>">
				            </div> 
                            
                              
                              <div class="form-group col-md-12">
                             
				                  <input type="text" name="email" class="form-control" required="required" value="<?php echo $user_data['email'];?>">
				            </div> 
                            
                                                  
				            <div class="form-group col-md-12">
                             
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Update">
				            </div>
                          
				        </form>
                        
                     
	    			</div>
	    		</div>
	    	
	   </div>
        <?php } ?>
    	</div>	
       
		<?php include 'footer.php'; ?>
 <br><br> <br><br>

			
              			<!--bootstrap javascript-->
  
</body>
</html>