<?php ob_start(); require_once 'core/init.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Product</title>
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
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<?php 
$query = mysql_query("SELECT `price` FROM `products` WHERE `brand` = 'Omega'");
	while($rows = mysql_fetch_array($query)):
		
		$product_id 		= $rows['product_id'];
		$price 			= $rows['price'];
		
	endwhile;
	
	
	$query = mysql_query("SELECT * FROM `product_information` WHERE `product_id` = 1");
	while($rows = mysql_fetch_array($query)):
		
			$case_size 		= $rows['case_size'];
			$gender 			= $rows['gender'];
			$dial_colour 	= $rows['dial_colour'];
		
	endwhile;

?>
<body>
		
		
<?php if(isset($_SESSION['customerNumber'])){
	 include ('headerloggedin.php');
}else{
	
	include ('header.php');
	}

?>        <!--Breadcrumbs-->
      <ol class="breadcrumb hidden-xs" id="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="brands.php">Brands</a></li>
  <li><a href="productrange.php">Product Range</a></li>
  <li class="active">Omega Seamaster</li>
</ol>

<ol class="breadcrumb hidden-lg hidden-md hidden-sm" id="breadcrumbsmall">
  <li><a href="index.php">Home</a></li>
    <li><a href="brands.php">Brands</a></li>
  <li><a href="productrange.php">Product Range</a></li>
  <li class="active">Omega Seamaster</li>
</ol>

		<!-- START OF CONTENT-->
        
      <!--CONTENT START-->
            <div id="topproduct" class="container">
            	
              
                <div class="container">
                
                		<div class="row">
                        <div class="col-xs-12 col-sm-12 col-lg-8">
                      
   								<center>
                                 <img src="images/seamasterchrono.png" width="295" height="506" alt=""/>
                                </center>

                        			</div>
                        
                                   <div class="col-xs-12 col-lg-4">
                                   
                                   <center>
                                   <img src="images/OMEGABRAND.png" width="150" height="80" class="img-responsive" alt=""/>
                                 
                                     <hr>
                                     
                                     <p>Seamaster</p>
                                     
                                     <p>Price: £<strong><?php echo "$price";?></strong> incl VAT</p>
                                    
                                    	<button class="btn btn-addtobag btn-responsive">Add To Bag</button>
                        				
                                     </center>
                                     <h6>Estimated delivery: 1-5 working days</h6>
                       
                        	
                            			<!--dropdown-->
                                          <div class="panel-group" id="productdropdown">
                    
                    <!--WATCH SERVICING-->
                    
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#productdropdown" href="#panela">
	<div class="panel panel-default">
    	<div class="panel-heading">
        			<center>
                <h6>Product Details</h6>
        			</center>
		</div></a>
		<div id="panela" class="panel-collapse collapse">
			<div class="panel-body">
               	<div class="container">
 <!--DROP DOWN CONTENT-->
 			<p><br>
SKU: 17333226<br><br>
Case dimension: <?php echo "$case_sizer";?>mm<br><br>
Dial colour: <?php echo "$dial_colour";?><br><br>
Gender: <?php echo "$gender";?><br><br>
Water resistant: Up to 300 meters<br><br>
Complication: Chronograph<br><br>
Watch Style: Aviation Watches</p>
 
 
    </div><!--end of panel-->
			</div>
		</div>
    </div> <!--END OF WATCH SERVICING-->
    
    
    
    
    
    
    										<!--PAYMENT OPTIONS-->
                
                
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#productdropdown" href="#panelb">		
	<div class="panel panel-default">
		<div class="panel-heading">
					<center>
                <h6>Payment Options</h6>
					</center>
		</div></a>
		<div id="panelb" class="panel-collapse collapse">
			<div class="panel-body">
               <div class="container">
                	
                     <!--DROP DOWN CONTENT-->
                     <p><br>
We accept payment by Visa, MasterCard and American Express.<br>
Interest Free Credit options are also available*
</p>
                </div>
			</div>
		</div>
    </div><!--END OF WATCH REPAIRS-->
    
    
    
    									<!--Delivery and Returns-->
            
                     <a class="accordion-toggle" data-toggle="collapse" data-parent="#productdropdown" href="#panelc">
	<div class="panel panel-default">
		<div class="panel-heading">
		<center>
       <h6>Delivery And Returns</h6>
			</center>
		</div></a>
		<div id="panelc" class="panel-collapse collapse">
			<div class="panel-body">
                 <div class="container">
                	
                    <!--DROP DOWN CONTENT-->
                    
                    		<p><br>
We offer a complimentary insured delivery service for customers within the UK and Northern Ireland, to reach you within 1 to 5 working days.<br><br>
Our Click and Collect service is available for authorised brands only*<br>
We also offer a Refund Service within 14 days of despatch and an Exchange within 30 days of despatch.<br><br>

*Please note that Click and Collect is unavailable at Airports and that orders paid using Interest Free Credit are excluded from this service.<br><br>
Click for full Delivery or Returns information</p>
                    
                    
                </div>
			</div>
		</div>
    </div><!--END OF BATTERY CHANGE-->
    
 
   

    			
                
                		
</div><!--END OF ACCORDIAN-->
                                        
                                        
                                        
                                        <!--endofdropdown-->
                        </div>
                    </div><!--end of row-->
                 </div><!--end of container-->
                    
                    
</div><!--end of topproduct-->

                    
                <script type="text/javascript">
    $(".openpanel").on("click", function() {
    $("#panela").collapse('show');
});
$(".closepanel").on("click", function() {
    $("#panela").collapse('hide');
});

/* ensure any open panels are closed before showing selected */
$('#productdropdown').on('show.bs.collapse', function () {
    $('#productdropdown .in').collapse('hide');
});
</script>

                    
                    
      <div class="clearout">&nbsp;</div>
<div></div>
      
     <?php include ('footer.php'); ?>              
                
                  
</body>
</html>