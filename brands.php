<?php ob_start(); require('core/init.php');?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Brands</title>
<link href="css/thumbnail-gallery.css" rel="stylesheet" type="text/css">
<!--Viewport-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Main CSS-->
<link href="watches.css" rel="stylesheet" type="text/css">
<!--Bootstrapp CSS-->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--footer css-->
 <link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
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
  <li class="active">Brands</li>
</ol>

<ol class="breadcrumb hidden-lg hidden-md hidden-sm" id="breadcrumbsmall">
  <li><a href="index.php">Home</a></li>
  <li class="active">Brands</li>
</ol>


<!-- Page Content -->


    <div  class="container">

        <div class="row">

            <div class="col-lg-12">
          
            </div>

            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a id="brandthumb" class="thumbnail" href="productrange.php">
                   <img src="images/OMEGABRAND.png" width="300" height="159" class="img-responsive" alt=""/>
                   
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a id="brandthumb" class="thumbnail" href="productrange.php">
                  <img src="images/BRIETLINGBRAND.png" width="300" height="159" class="img-responsive" alt=""/>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a id="brandthumb" class="thumbnail" href="productrange.php">
                   <img src="images/ROLEXBRAND.png" width="300" height="159" class="img-responsive" alt=""/>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a id="brandthumb" class="thumbnail" href="productrange.php">
                    <img src="images/HUBLOTBRAND.png" width="300" height="159" class="img-responsive" alt=""/>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a id="brandthumb" class="thumbnail" href="productrange.php">
                   <img src="images/FRANCKMULLERBRAND.png" width="300" height="159" class="img-responsive" alt=""/>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a id="brandthumb" class="thumbnail" href="productrange.php">
                    <img src="images/TAGBRAND.png" width="300" height="159" class="img-responsive" alt=""/>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a id="brandthumb" class="thumbnail" href="productrange.php">
                    <img src="images/CARTIERBRAND.png" width="300" height="159" class="img-responsive" alt=""/>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a id="brandthumb" class="thumbnail" href="productrange.php">
                   <img src="images/MONDAINEBRAND.png" width="300" height="159" class="img-responsive" alt=""/>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a id="brandthumb" class="thumbnail" href="productrange.php">
                   <img src="images/CHOPARDBRAND.png" width="300" height="159" class="img-responsive" alt=""/>
                </a>
            </div>
        
        </div>


</div>
     


    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

  <link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet"> 
<div class="clearout">&nbsp;</div>
<?php include ('footer.php'); ?>



</body>
</html>