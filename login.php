<?php ob_start(); require_once 'core/init.php';
logged_in_redirect();?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign In Up</title>
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
	 include ('header2.php');
}else{
	
	include ('header.php');
	}

?>




<ol class="breadcrumb hidden-xs" id="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Sign In</li>
</ol>

<ol class="breadcrumb hidden-lg hidden-md hidden-sm" id="breadcrumbsmall">
  <li><a href="index.php">Home</a></li>
  <li class="active">Sign In</li>
</ol>

						<!--contentStart-->
                        
                        
                         <div id="signin" class="container">
    	<div class="bg">
	       			   			
				    			    				    				
				
    		<div class="row">  	
           
	    		<div class="col-sm-6 col-md-6">
	    			<div class="signup">
	    				<h2 class="title">Existing Customers</h2>
                      
                        <p>If you already have an account with us, log in using your email address.</p>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="login-form" class="login-form row" name="login-form" method="POST" action="loginscript.php">
				          
				            <div class="form-group col-md-12">
				                <input type="text" name="username" class="form-control" required="required" placeholder="Username">
				            </div>
				            <div class="form-group col-md-12">
				                  <input type="password" name="password" class="form-control" required="required" placeholder="Password">
				            </div>                        
				            <div class="form-group col-md-12">
                             <p class="pull-left">Forgotten</p><a  class="pull-left" href="recovery.php?mode=username">Username</a>
                   <a  class="pull-left" href="recovery.php?mode=password">Password</a>
                             
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Login">
				            </div>
                          
				        </form>
                        
                       
	    			</div>
	    		</div>
	    		<div class="col-sm-6 cold-md-6">
	    			<div class="registerlink">
	    				<h2 class="title">New Customers</h2>
	   						<p>By creating an account with our store, you will be able to move through the<br>
 					checkout process faster, store multiple shipping addresses, view and track <br>
						your orders in your account and more.</p>
                        
                       <a href="registration.php"> <input type="button"  name="submit" class="btn btn-primary pull-right" value="Register"></a>
				            </div>
				        </form>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	</div>
 </div>

			<?php include('footer.php');?>
              			<!--bootstrap javascript-->
    <script src="js/bootstrap.js"></script>
              <!--jquery-->
<script src="http://ajax.gooleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  
</body>
</html>