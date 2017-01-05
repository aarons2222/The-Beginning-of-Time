<?php ob_start(); require_once 'core/init.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Our Collection</title>
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
<!--<style> 

*{ border:1px solid red;}</style>-->
</head>

<body>
<?php 
if (isset($_SESSION['user_id'])){
	 include ('headerloggedin.php');
}else{
	
	include ('header.php');
	}

?>        <!--Breadcrumbs-->
      <ol class="breadcrumb hidden-xs" id="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Collection</li>
</ol>

<ol class="breadcrumb hidden-lg hidden-md hidden-sm" id="breadcrumbsmall">
  <li><a href="index.php">Home</a></li>
  <li class="active">Collection</li>
</ol>

<br><br>
	 <div  class="container">

        <div class="row">
				
               <h2 class="title text-center">Our Collection</h2>  
            <div class="col-lg-12">
          
          
</div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
              <center>
     <h4>Omega Seamaster<br>
				Professional 300m</h4>
             <img src="images/seamasterchronosmall.png" width="175" height="300" class="img-responsive" alt=""/>
             <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
                </center>
            </div>
            <div class ="col-lg-4 col-md-4 col-xs-6 thumb">
                 <center>
             <h4>Breitling Navitimer 01<br>
			Automatic Chronograph</h4>
                <img src="images/breitling.png" width="175" height="300" class="img-responsive" alt=""/>
                <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
                </center>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                   <center>
                <h4>Tag Heuer Link<br>
					Caliber 36</h4>
                <img src="images/linkauto.png" width="175" height="300" class="img-responsive" alt=""/>
                <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
                </center>
            </div>
            
            
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                   <center>
                 <h4>Rolex <br>
					Submariner 5513</h4>
               <img src="images/submariner.png" width="175" height="300" class="img-responsive" alt=""/>
               <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
         		</center>
            </div>
            
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                 <center>
               <h4>Mondaine<br>
				Evo Quartz Analogue</h4>
                <img src="images/mondainesmall.png" width="175" height="300" class="img-responsive" alt=""/>
                <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
                </center>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                   <center>
                <h4>Omega Seamaster<br>
				Planet Ocean</h4>
                <img src="images/planetoceanorange.png" width="175" height="300" class="img-responsive" alt=""/>
                <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
                </center>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                   <center>
                  <h4>Omega De Ville<br>
				Ladymatic</h4>
                <img src="images/ladymatic.png" width="175" height="300" class="img-responsive" alt=""/>
              	 <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
               </center>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                   <center>
                  <h4>Franck Muller<br>
				 Aeternitas Mega 4</h4>
               <img src="images/franckmuller.png" width="175" height="300" class="img-responsive" alt=""/>
                <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
                </center>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <center>
                 <h4>Ronde Solo De<br>Cartier
				</h4>
                <img src="images/cartier.png" width="175" height="300" class="img-responsive" alt=""/>
                 <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
                </center>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            		<center>
            				   <h4>Hublot<br>
				Big Bang Gold</h4>
           			    <img src="images/hublot.png" width="175" height="300" class="img-responsive" alt=""/>
                         <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
            		</center>
            </div>
            
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            		<center>
            			  <h4>Chopard<br>
				Jacky Ickx Edition 5</h4>
           			    <img src="images/chopard.png" width="175" height="300" class="img-responsive" alt=""/></a>
                           <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
            		</center>
            </div>


            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            		<center>
            			  <h4>Breitling<br>
				Avenger Seawolf</h4>
            			<img src="images/avenger.png" width="175" height="300" class="img-responsive" alt=""/>
                         <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
            		</center>
            </div>
            
             <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            		<center>
            			  <h4>Rolex<br>
				Daytona</h4>
            			<img src="images/Daytona.png" width="175" height="300" class="img-responsive" alt=""/>
                         <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
            		</center>
            </div>

     <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            		<center>
            			  <h4>Tag Heuer<br>
				Monaco Calibre 12</h4>
            			<img src="images/tagmonaco.png" width="175" height="300" class="img-responsive" alt=""/>
                         <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
            		</center>
            </div>
            
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            		<center>
            			  <h4>Mondaine<br>
				Evo Gents Big-Size</h4>
            			<img src="images/mondainebigevo.png" width="175" height="300" class="img-responsive" alt=""/>
                         <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
            		</center>
            </div>
            
              <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            		<center>
            			  <h4>Ballon Bleu<br>
				De Cariter</h4>
            			<img src="images/cartierballon.png" width="175" height="300" class="img-responsive" alt=""/>
                         <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
            		</center>
            </div>
				
                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            		<center>
            			  <h4>Chopard<br>
				Mille Miglia 2013</h4>
            			<img src="images/choppardmilli.png" width="175" height="300" class="img-responsive" alt=""/>
                         <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
            		</center>
            </div>
            
                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            		<center>
            			  <h4>Breitling<br>
				 Superocean Heritage Chronogaphe</h4>
            			<img src="images/superocean.png" width="175" height="300" class="img-responsive" alt=""/>
                         <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
            		</center>
            </div>
        
        
                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            		<center>
            			  <h4>Franck Muller<br>
				 			Heart</h4>
            			<img src="images/franckmullerheart.png" width="175" height="300" class="img-responsive" alt=""/>
                         <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
            		</center>
            </div>
            
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            		<center>
            			  <h4>Hublot<br>
				 			Classic Fusion</h4>
            			<img src="images/hublotclassicfusion.png" width="175" height="300" class="img-responsive" alt=""/>
                         <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
            		</center>
            </div>
            
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            		<center>
            			  <h4>Omega Speedmaster<br>
				 			Moon Watch</h4>
            			<img src="images/speedmasterMoonwatch.png" width="175" height="300" class="img-responsive" alt=""/>
                         <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
            		</center>
            </div>
            
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            		<center>
            			  <h4>Tag Heuer<br>
				Aquaracer</h4>
            			<img src="images/aquaracer.png" width="175" height="300" class="img-responsive" alt=""/>
                         <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
            		</center>
            </div>
            
             <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            		<center>
            			  <h4>Rolex<br>
					Milgauss</h4>
            			<img src="images/milgaus.png" width="175" height="300" class="img-responsive" alt=""/>
                         <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
            		</center>
            </div>
        
        
          <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            		<center>
            			  <h4>Franck Muller<br>
							Mariner</h4>
            			<img src="images/franckmullermariner.png" width="175" height="300" class="img-responsive" alt=""/>
                         <br>
                 <a href="product.php" class="btn btn-default">View watch</a>
            		</center>
            </div>
        
        
        </div>


</div>
<br><br><br><br><br>
   <?php  include ('footer.php');?>

</body>
</html>