<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name = "viewport" content = "user-scalable=no, width=device-width">
<meta name="apple-mobile-web-app-capable" content="yes" />

<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>

</head>

<body>

<div class="clearout"></div> 

<ul id="flexiselDemo1"> 
    <li><img src="../images/omegathumb.png"/></li>
    <li><img src="../images/breitlingthumb.png" /></li>    
    <li><img src="../images/rolexthumb.png" /></li>     
    <li><img src="../images/chopardthumb.png" /></li> 
    <li><img src="../images/franckmullerthumb.png" /></li>                                                          
</ul>
 
<div class="clearout"></div> 






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
    
    
</body>
</html>