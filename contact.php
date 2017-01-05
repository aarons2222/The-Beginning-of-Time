<?php ob_start(); require_once 'core/init.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Us</title>
<!--Viewport-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Main CSS-->
<link href="watches.css" rel="stylesheet" type="text/css">
<!--Bootstrapp CSS-->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--BRAND SLIDER-->
<link href="BrandSlider/css/style.css" rel="stylesheet" type="text/css">
<!--PRODUXT SLIDER CSS-->
<link href="productslider/css/productslider.css" rel="stylesheet" type="text/css">

<link href="css/font-awesome.min.css" rel="stylesheet">
  
<link href="css/responsive.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
<!--fixes footer position and width issues-->
<style>
body > div.container{
	
	width:100%;
}
	
body > div.navbar.navbar-inverse.navbar-static-bottom{width:100%;
margin-right:-40px;}


</style>

	
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
  <li class="active">Contact Us</li>
</ol>

<ol class="breadcrumb hidden-lg hidden-md hidden-sm" id="breadcrumbsmall">
  <li><a href="index.php">Home</a></li>
  <li class="active">Contact Us</li>
</ol>

    

 
		                                                
 <div id="contact-page" class="container">
    	<div class="bg">
	       			   			
					<h2 class="title text-center">Contact Us</h2>    			    				    				
				
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	
                        
      <form id="main-contact-form" class="contact-form row" name="contact-form" action="scripts/botcontactform.php" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" id="name" class="form-control" required="required" placeholder="Name">
                             
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                               
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                              
				            </div>
				            <div class="form-group col-md-12">
		<textarea name="message" id="message" required class="form-control" rows="8" placeholder="Your Message Here"></textarea>
        					
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				      </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Address</h2>
	    				<address>
	    					<p>Beginning Of Time</p>
							<p>60 Second Avenue, Grimsby</p>
							<p>N.E. Lincolnshire DN34 4zz</p>
							<p>Mobile: +447447 123456</p>
							<p>Phone: +441472 356789</p>
							<p>Email: info@beginningoftime.co.uk</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	</div>
    </div><!--/#contact-page-->
    
    <div></div>
    <?php include ('footer.php');?>
</body>
</html>