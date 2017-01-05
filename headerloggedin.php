<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Header</title>
<!--Viewport-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Main CSS-->
<link href="watches.css" rel="stylesheet" type="text/css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<style>/*SEARCH BAR*/




input {
	background-color:#A2A2A2;
  float:right;
	outline: none;
	margin-top: 4px;
}
input[type=search] {
	-webkit-appearance: textfield;
	-webkit-box-sizing: content-box;
	font-family: inherit;
	font-size: 100%;
}
input::-webkit-search-decoration,
 input::-webkit-search-cancel-button {
	display: none; 
}


 input[type=search] {
	background: #a2a2a2 url(images/magnifying_glass.png)  no-repeat 9px center;
	border: solid 1px #4C4C4C;
	padding: 9px 10px 9px 32px;
	width: 100px;
	
	-webkit-border-radius: .1em;
	-moz-border-radius: .1em;
	border-radius: .1em;
	
	-webkit-transition: all .5s;
	-moz-transition: all .5s;
	transition: all .5s;
}
input[type=search]:focus {
	width: 200px;
	background-color: #a2a2a2;
	border-color: #4C4C4C;
	
	
}


#mainsearch input:-moz-placeholder {
	color: #FFFFFF;
	font-weight:300;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
#mainsearch input::-webkit-input-placeholder {
	color: #FFFFFF;
	font-weight:300;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}

/* smallsearch */
#smallsearch input[type=search] {
	width: 15px;
	padding-left: 10px;
	color: transparent;
	cursor: pointer;
}
#smallsearch input[type=search]:hover {
	background-color: #A2A2A2;
}
#smallsearch input[type=search]:focus {
	width: 150px;
	padding-left: 32px;
	color: #4C4C4C;
	background-color: #A2A2A2;
	cursor: auto;
}
#smallsearch input:-moz-placeholder {
	color: transparent;
}
#smallsearch input::-webkit-input-placeholder {
	color: transparent;
}</style>

</head>

<body>


					<!--Topbar-->
		<div id="topbar" class="navbar navbar-inverse navbar-static-top">
        
        	<div class="container">
           
            <img class="pull-left hidden-xs" src="images/iphone.png" width="22" height="39" alt=""/>
            <a href="contact.php"><p class="pull-left hidden-xs">0800 123 4567</p></a>
           
            <form id="mainsearch" name="mainsearch" class="hidden-xs pull-right">
	<input type="search" placeholder="Search">
</form>



            
            <form id="smallsearch" name="smallsearch" class="hidden-lg hidden-md hidden-sm pull-right">
	<input type="search" placeholder="Search">
</form>
            <div class="pull-right">
          <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
<h4>Hello, <?php include 'loggedin.php'; ?></h4> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
   <li role="presentation"><a role="menuitem" tabindex="-1" href="useraccount.php">Update Info</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="changepassword.php">Change Password</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">Logout</a></li>
  </ul>
</div>

 </div>
 
 
 
 
 
           <a href="login.php"><img class="pull-right hidden-lg hidden-md hidden-sm" src="images/personicon.png" width="27" height="30" alt=""/></a>
         
             
             <button id="menutoggle" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navBarHeader">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                  </div>
                  <div class="container">
            
            		<div class="collapse navbar-collapse navBarHeader">
                    
                    		<ul class="nav navbar-nav hidden-lg hidden-md hidden-sm">
                            	<li><a href="index.php">Home</a></li>
                            	<li><a href="brands.php">Brands</a></li>
                               <li><a href="collection.php">Collection</a></li>
                               <li><a href="servicing.php">Servicing</a></li>
                               <li><a href="contact.php">Contact</a></li>
                            </ul>
               			 </div>
                         
    
            				</div>
        			</div><!--endOfTopBar-->
                    
                    
                   
                   
                    
                    
                    <!--logo-->
                    
                    <center>
                    		
                         	<div id="logo">
                              	<a href="index.php"> <img src="images/mainlogo copy.png" width="503" height="80" class="img-responsive" alt=""/></a>
                            </div>
                           
                    <!--endoflogo-->
                    
                  </center>
                  
                  
                  		<!--NAVBAR-->
                 
              <div class="navbar navbar-custom navbar-inverse navbar-static-top hidden-xs" id="nav">
    <div class="container">
  
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav nav-justified">
          <li><a href="brands.php">Brands</a></li>
          <li><a href="collection.php">Collection</a></li>
         <li><a href="servicing.php">Servicing</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
                  
                 
         
                 <!--ENDOFNAVIGATION-->

	
              <!--jquery-->
<script src="http://ajax.gooleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    			<!--bootstrap javascript-->
    <script src="js/bootstrap.js"></script>
 
</body>
</html>