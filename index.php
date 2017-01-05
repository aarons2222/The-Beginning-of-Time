<?php ob_start(); include 'core/init.php'; ?>


<!--When I wrote this, only God and I understood what I was doing
Now, God only knows-->


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Beginning Of Time</title>
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

<!--end of header-->
<body>
							<!--Include Header-->
                            
<?php 
if (isset($_SESSION['user_id'])){
	 include ('headerloggedin.php');
}else{
	
	include ('header.php');
	}

?>


    
    <!--main slider-->
    <center>
<div id="carousel" class="carousel slide carousel-fade hidden-xs" data-ride="carousel">
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
<img src="images/banneromega.jpg" width="530" height="50" class="img-responsive" alt=""/>		
 
    </div>
    <div class="item">
     <img src="images/bannerbreitling.jpg" width="530" height="50" class="img-responsive" alt=""/>		
   
    </div>
    <div class="item">
     <img src="images/bannerrolex.jpg" width="530" height="50" class="img-responsive" alt=""/>		
    
    </div>
  </div>
 </div> <!-- Carousel -->
 
 				<!--small slider-->
                
                    <center>
<div id="carousel" class="carousel slide carousel-fade hidden-lg hidden-md hidden-sm" data-ride="carousel">
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
<img src="images/banneromega.jpg" width="530" height="50" class="img-responsive" alt=""/>		
 
    </div>
    <div class="item">
     <img src="images/bannerbreitling.jpg" width="530" height="50" class="img-responsive" alt=""/>		
   
    </div>
    <div class="item">
     <img src="images/bannerrolex.jpg" width="530" height="50" class="img-responsive" alt=""/>		
    
    </div>
  </div>
 </div> <!-- Carousel -->
 
 
 
 
 
 
			<!--end of image-->
            				
                            </center>
                       
                            <!--brandlogo-->
                            <center>
                   
                   <div class="container hidden-xs">
                   
    						<a href="brands.php"><img src="images/brandlogo.png" width="300" height="42" class="img-responsive" alt=""/></a>
                            
                             </div>
                             
                             
       
                             
                             
							</center>
			<!--brandslider-->
           
<br />



<ul id="flexiselDemo1"> 
<li><img src="images/omegathumb.png" /></li>
    <li><img src="images/breitlingthumb.png" /></li>    
    <li><img src="images/rolexthumb.png" /></li>     
    <li><img src="images/franckmullerthumb.png" /></li> 
    <li><img src="images/chopardthumb.png" /></li>                                                         
</ul>
 


<!--brandsliderscript-->

<script type="text/javascript" src="BrandSlider/js/jquery.flexisel.js"></script>
<script type="text/javascript">

$(window).load(function() {
    $("#flexiselDemo1").flexisel({
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

  
    
});
</script>
    
            
            
            
            
    
                <!--jquery-->
    <script src="http://ajax.gooleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    			<!--bootstrap javascript-->

		 <br /><br /><br /><br />
	<!--product-slider-->
    <script type="text/javascript" src="productslider/js/jquery.productslider.js"></script>
				
                <!--PRODUCT 1-->
            
<ul id="productslider"> 
    <li><img src="images/seamasterchrono.png" width="160" height="275" alt=""/>
    			<p>OMEGA Seamaster Professional</p>
                <p>Chronograph 300m</p>
              	<a href="product.php" id="productbutton" class="btn btn-danger">View Watch</a>
    		</li>						
    
    		 <!--PRODUCT 2-->
    			
                  <li><img src="images/breitling.png" width="160" height="275" alt=""/>
    			<p>Breitling</p>
                <p>Chronograph 300m</p>
              	<a href="product.php" id="productbutton" class="btn btn-danger">View Watch</a>
            </li> 
    
     <!--PRODUCT 3-->
    <li><img src="images/ladymatic.png" width="160" height="275" alt=""/>
    			<p>OMEGA Ladymatic</p>
                <p>Chronograph 300m</p>
              	<a href="product.php" id="productbutton" class="btn btn-danger">View Watch</a>
           </li> 
    
         
          <!--PRODUCT 4-->
  
            <li><img src="images/submariner.png" width="160" height="275" alt=""/>
    			<p>ROLEX Submariner</p>
                <p>Chronograph 300m</p>
              	<a href="product.php" id="productbutton" class="btn btn-danger">View Watch</a>
         </li> 
           
            <!--PRODUCT 5-->
    <li><img src="images/planetoceanorange.png" width="160" height="275" alt=""/>
    			<p>ROLEX Submariner</p>
                <p>Chronograph 300m</p>
              	<a href="product.php" id="productbutton" class="btn btn-danger">View Watch</a>
           </li> 
           
            <!--PRODUCT 6-->
    <li><img src="images/linkauto.png" width="160" height="275" alt=""/>
    			<p>TAG HEURER</p>
                <p>LINK AUTOMATIC</p>
              	<a href="product.php" id="productbutton" class="btn btn-danger">View Watch</a>
           </li> 
  
  			 <!--PRODUCT 7-->
             
              <li><img src="images/planetoceansteel.png" width="160" height="275" alt=""/>
    			<p>OMEGA Seamaster</p>
              
                <p>Planet Ocean</p>
              	<a href="http://www.facebook.com" id="productbutton" class="btn btn-danger">View Watch</a>
                </li>                                                         
</ul>

<script type="text/javascript">

$('.carousel').carousel({
  interval: 7000
})</script>

<script type="text/javascript">

$(window).load(function() {
    $("#productslider").productslider({
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

 
  });
</script>

<div class="clearout">&nbsp;</div>
<div></div>
      
     <?php include ('footer.php'); ?>

</body>
</html>