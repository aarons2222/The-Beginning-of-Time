<?php ob_start(); require_once 'core/init.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Servicing & Repairs</title>
<!--Viewport-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Main CSS-->
<link href="watches.css" rel="stylesheet" type="text/css">
<!--Bootstrapp CSS-->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

<!--Footer position and width fix  CSS-->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<style>
#footer {
  background: #A2A2A2;
  width:100%;
  margin-bottom:-20px;
  border:0.25px solid #4C4C4C;
}
</style>
</head>
<body>

	
	
<?php if(isset($_SESSION['user_id'])){
	 include ('headerloggedin.php');
}else{
	
	include ('header.php');
	}

?>    <!--Breadcrumbs-->
      <ol class="breadcrumb hidden-xs" id="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Servicing</li>
</ol>

<ol class="breadcrumb hidden-lg hidden-md hidden-sm" id="breadcrumbsmall">
  <li><a href="index.php">Home</a></li>
  <li class="active">Servicing</li>
</ol>
			
            
            <!--CONTENT START-->
            <div id="topservice" class="container">
            	<center>
     <img src="images/repairbanner.jpg" width="959" height="249" class="img-responsive" alt=""/>
     			</center>
                <br />  
              
                <div class="container">
                
                		<div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-8">
                      
                        <p>It’s said that if you look after your most treasured possessions, they’ll last a lifetime. When it comes to a finely crafted Swiss watch, that’s certainly true. At Beginning Of Time  we're able to offer our customers a comprehensive range of services - from replacing a worn out strap to repairing a damaged watch. Our talented team of expert in-house watchmakers take great pride in their work, which is why generations of watch buyers have trusted us to care for their timepieces.
<br/><br/>
Beginning Of Time is a brand-accredited agent of a number of luxury Swiss watch houses, including Rolex, Breitling, TAG Heuer and Omega.</p>
                        </div>
                        
                        
                                   <div class="col-xs-6 col-lg-4">
                       <hr>
                        <p>Contact us to take advantage of our services</p>
                        <a href="contact.php" class="btn btn-default">Contact us</a>
                        </div>
                                 
                        </div><!--end of row-->
                        
                    </div><!--end of container-->
                    
 </div><!--end of top service-->      
 
 
 <!--accordian-->
 
 			  <div id="bottomservice" class="container">
              			
             			<center><h2>Our Services</h2></center>                    
                    <div class="container">
                    
                    
                    <div class="panel-group" id="accordion">
                    
                    <!--WATCH SERVICING-->
                    
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel1">
	<div class="panel panel-default">
    	<div class="panel-heading">
        		
                <img src="images/cog.png"/>
                <h6>Watch Servicing</h6>
        
		</div></a>
		<div id="panel1" class="panel-collapse collapse">
			<div class="panel-body">
               	<div class="container">
                	<p>TO MAKE IT LAST A LIFETIME, A LUXURY SWISS TIMEPIECE NEEDS SERVICING EVERY THREE TO FIVE YEARS</p>
                	<h4>Servicing Mechanical</h4>
                    <h5>Mechanical watches are made up of hundreds of tiny parts, many of which are in constant motion. Because of this, they’re subject to wear and tear. <br />But with regular care, your luxury Swiss timepiece will keep ticking for years.<br /><br />

We recommend servicing a new watch every three to five years, even if it still seems to be in perfect working order. This is because lubricants that prevent friction <br /> and possible damage to fragile inner components break down over time and need replacing. On a less happy note, we all know that no matter how careful<br /> you are with your watch, accidents happen. Fortunately, there are very few repairs our specialist watchmakers cannot undertake.
<br /><br />
Some repairs are time-consuming, so we will always prepare a full estimate for you before going ahead.<br /><br />

When servicing a mechanical watch, our watchmakers perform an exhaustive series of checks to make sure your watch returns to you in peak condition.</h5>
<br />

<h5>1.  Check the case and the bracelet or strap.<br />
2.  Detach the bracelet, open the case and remove the stem, crown, seals and movement.<br />
3.  Reset the stem and crown, and check the winding mechanism.<br />
4.  Examine the working of the hands, calendar functions and rotor (if fitted).<br />
5.  Inspect and adjust the escapement.<br />
6.  Fully disassemble the watch case and inspect the movement and component parts.<br />
7.  Replace any worn or damaged parts.<br />
8.  Clean all parts in specialist chemical baths using automated cleaning machines.<br />
9.  Reassemble the movement, checking and making fine adjustments in line with brand specifications.<br />
10.  Lubricate the movement if using 4/5 fine oils and greases, and double check the escapement.<br />
11.  De-magnetise, regulate and check the timing of the movement to brand standards using specialist Swiss timing equipment.<br />
12.  Refit the dial and hands, and clean the case and bracelet using ultrasound technology.<br />
13.  Replace case seals where necessary, and restore the movement to the case.<br />
14.  Double check timekeeping, and adjust where required using timing equipment.</h5><br />
           
           <h5>Once we’ve completed these steps, we test the watch on a wrist simulator for between three and four-and-a-half hours to make sure the automatic winding system is running smoothly. The watch’s power reserve is then tested statically for 24 hours, dial down, and the rate checked, until the power has run down in the dial up position.
<br /><br />
This final inspection before we return your watch is critical – it’s then guaranteed for 12 or 24 months, depending on the brand.
</h5>      <br />

<h4>Servicing Quartz</h4>  

<h5>Quartz watches don’t have as many moving parts as mechanicals, but they still require routine maintenance. Our expert watchmakers perform the following checks:</h5>
                 
                
<h5>
1.  Check the case and bracelet or strap.<br />
2.  Open the case, remove the stem and crown, and check the setting mechanism.<br>
3.  Inspect the working of the hands and calendar functions as appropriate.<br>
4.  Disassemble the movement, and check the mechanical components and electronic module.<br>
5.  Replace any worn or malfunctioning mechanical or electronic parts.<br>
6.  Carefully clean all the mechanical parts in special chemical baths, using automated cleaning machines.<br>
7.  Reassemble the movement, checking it and making fine adjustments in line with brand specifications.<br>
8.  Lubricate the setting and calendar mechanisms, using fine oils and greases.<br>
9.  Make sure the timing of the movement is in working order, using specialist Swiss electronic testing equipment.<br>
10.  Refit the dial and hands, and clean the case and bracelet using ultrasound technology.<br>
11.  Renew the case seals where necessary, and restore the movement to the case.<br>
12.  Check the watch’s water-resistance according to brand specification.<br>
13.  And finally, check the correct functioning of the hands and calendar mechanism if fitted. To ensure the watch is<br>
functioning accurately, we then test it statically for two days.
</h5>            

    <h5>This final inspection before we return your watch is critical – it’s then guaranteed for 12 or 24 months, depending on the brand.</h5> 	
    
    <a href="http://www.youtube.com/watch?v=R8LzKljGh9g#t=12"><strong>View Omega video</strong></a>
    </div><!--end of panel-->
			</div>
		</div>
    </div> <!--END OF WATCH SERVICING-->
    
    
    
    
    
    
    										<!--WATCH REPAIRS-->
                
                
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel2">		
	<div class="panel panel-default">
		<div class="panel-heading">
				<img src="images/repair.png"/>
                <h6>Repairs & Restoration</h6>
			
		</div></a>
		<div id="panel2" class="panel-collapse collapse">
			<div class="panel-body">
               <div class="container">
                	<h5>Every watch has a different story so will have different requirements. That’s why our specialist watchmakers are trained to look at watches of any age, regardless of brand or type and will do everything they can to help restore it. Certain watches may be returned to the manufacturers to undertake a repair, while others will be managed by our own technicians, some of whom work in our showrooms, so your watch may not even have to leave the building.<br><br>

If you have a refurbishment and restorations enquiry you would like to discuss with our team, please contact us.</h5>
                </div>
			</div>
		</div>
    </div><!--END OF WATCH REPAIRS-->
    
    
    
    									<!--BATTERY CHANGE-->
            
                     <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<img src="images/battery.png"/>
       <h6>Battery Replacement</h6>
			
		</div></a>
		<div id="panel3" class="panel-collapse collapse">
			<div class="panel-body">
                 <div class="container">
                	<h5>A battery can run out at any time, so if your watch is battery-powered, we advise that you replace it every 12 months to two years. <br><br>

Our watchmakers will replace your battery and reseal your watch, following five steps:
<br><br>
1. Replace the old battery, making sure it hasn’t leaked and damaged the movement.
<br><br>
2. Examine the general condition of the movement, and check the consumption rate of the new battery.
<br><br>
3. Renew all the sealing gaskets on the glass, crown and watch back, as well as pusher seals for chronographs where required.
<br><br>
4. Test the watch’s water-resistance to brand specification, using specialist equipment.
<br><br>
5. Check timekeeping and adjust if required. We do need to point out that only the battery and reseal is covered by our 12-month guarantee. <br>
If the watch hasn’t been maintained to the manufacturer’s guidelines and serviced within the last three to five years, we cannot offer a guarantee on the future reliability of the timepiece.</h5>
                </div>
			</div>
		</div>
    </div><!--END OF BATTERY CHANGE-->
    
    						<!--REPROOFING-->
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel4">
    <div class="panel panel-default">
		<div class="panel-heading">
				<img src="images/water.png"/>
                <h6>Reproofing</h6>
			
		</div></a>
		<div id="panel4" class="panel-collapse collapse">
			<div class="panel-body">
                  <div class="container">
                	<h5>It’s a little-known fact that, over time, a water-resistant watch will lose its resistance – especially if it’s used regularly for diving - so don't
forget to have your watch tested and re-waterproofed in line with the manufacturer’s recommendations.</h5>
                </div>
			</div>
		</div>
    </div><!--END OF REPROOFING-->
   
   							<!--VALUATIONS-->
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel5">
    <div class="panel panel-default">
		<div class="panel-heading">
				<img src="images/valuations.png" />
               <h6>Valuations</h6>
			
		</div></a>
		<div id="panel5" class="panel-collapse collapse">
			<div class="panel-body">
                  <div class="container">
                	<h5>Purchasing a luxury Swiss watch is an investment, so it’s important you insure it against damage, loss and theft.<br><br>

To do this, you’ll need to know how much the watch is worth. That’s where our experts come in.
<br><br>
Armed with a vast knowledge of Swiss brands and the current watch market, their reputation for accurate valuations is highly regarded<br>
 by insurers.<br><br>

We also offer a Watch Authenticity Service so you can verify the legitimate origins of a watch. Watches from genuine sources receive a certificate of authenticity.</h5>
                </div>
			</div>
		</div>
    </div><!--END OF VALUATIONS-->
    			
                
                			<!--STRAP REPLACEMENT-->
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel6">
    <div class="panel panel-default">
		<div class="panel-heading">
			<img src="images/strap.png" />
             <h6>Strap Replacement</h6>
			
		</div></a>
		<div id="panel6" class="panel-collapse collapse">
			<div class="panel-body">
                  <div class="container">
                	<h5>Give your timepiece a facelift by updating the strap, whether as a replacement for an old model, or as an 
                    <br>
alternative to match an outfit or occasion. At Watches of Switzerland, we stock a wide range of styles and colours.</h5>
                </div>
			</div>
		</div>
    </div><!--STRAP REPLACEMENT-->
</div><!--END OF ACCORDIAN-->

                    </div><!--END OF CONTAINER-->
              </div><!--end of bottom service-->  
	<script type="text/javascript">
    $(".openpanel").on("click", function() {
    $("#panel3").collapse('show');
});
$(".closepanel").on("click", function() {
    $("#panel3").collapse('hide');
});

/* ensure any open panels are closed before showing selected */
$('#accordion').on('show.bs.collapse', function () {
    $('#accordion .in').collapse('hide');
});
</script>

<?php include ('footer.php');?>

</body>
</html>