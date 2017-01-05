<?php ob_start(); require_once 'core/init.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Product Range</title>
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

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
</head>

<body>
		
<?php if(isset($_SESSION['customerNumber'])){
	 include ('headerloggedin.php');
}else{
	
	include ('header.php');
	}?>        <!--BREADCRUMBS-->
        <ol class="breadcrumb hidden-xs" id="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="brands.php">Brands</a></li>
  <li class="active">Product Range</li>
</ol>

<ol class="breadcrumb hidden-lg hidden-md hidden-sm" id="breadcrumbsmall">
  <li><a href="index.php">Home</a></li>
    <li><a href="brands.php.php">Brands</a></li>
  <li class="active">Product Range</li>
</ol>

			<!--PAGE CONTENT-->
            
       <div class="container" id="rangeselection">

        		<div class="row">
							<!--LEFT PRODUCT-->
            			<div class="col-lg-4">
                       			<center>
                                <h3>OMEGA Seamaster Professional<br>
                                <span>Chronograph</span></h3>
                                <img src="images/seamasterchrono.png" width="204" height="350" class="img-responsive" alt=""/>
                                 <p>£2300</p>
                             <div class="btn-group">
   <a href="product.php"><button type="button" class="btn btn-default">View Watch</button></a>
   <a href="product.php"><button type="button" class="btn btn-default">Add To Bag</button></a>
							</div>
                                </center>
                       </div>  <!--END OF col-md-4-->
           		
            
                
                
                
              
							<!--CENTER PRODUCT-->
            			<div class="col-lg-4">
                        		<center>
                         <h3>OMEGA De Ville<br>
                         <span>Ladymatic</span></h3>
                         <img src="images/ladymatic.png" width="204" height="350" class="img-responsive" alt=""/>
                         			<p>£2300</p>
                                   <div class="btn-group">
  <a href="product.php"><button type="button" class="btn btn-default">View Watch</button></a>
   <a href="#"><button type="button" class="btn btn-default">Add To Bag</button></a>
							</div>
                        		</center>
          				</div>  <!--END OF col-md-4-->
           		
       
                		<!--RIGHT PRODUCT-->
         				 <div class="col-lg-4">
                        			<center>
                        <h3>OMEGA Seamaster<br>
                        <span>Planet Ocean</span></h3>
                        <img src="images/planetoceanorange.png" width="204" height="340" class="img-responsive" alt=""/>
                         <p>£2300</p>
                         <div class="btn-group">
  <a href="product.php"><button type="button" class="btn btn-default">View Watch</button></a>
  <a href="#"><button type="button" class="btn btn-default">Add To Bag</button></a>
							</div>
                        </center>
          				</div>  <!--END OF col-md-4-->

           		
                </div> <!--END OF ROW-->
           
      </div> <!--END OF CONTAINER-->
      
   

 <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    
    <div class="clearout">&nbsp;</div>
<div></div>
      
     <?php include ('footer.php'); ?>
</body>
</html>