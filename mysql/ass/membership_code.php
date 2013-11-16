<!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" --><!DOCTYPE html><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="adventure, adventure gear, sports, camping, recreational equipment,">
<meta name="description" content="With the widest range of outdoor adventure and sporting gear in Australia at the best prices. Your Adventure Starts here!">



<!-- InstanceBeginEditable name="doctitle" -->
<title>BE OUR MEMBER!</title>
<!-- InstanceEndEditable -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/fontello.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
				  $(function() {
					$(".rslides").responsiveSlides({
								  auto: true,             // Boolean: Animate automatically, true or false
								  speed: 500,            // Integer: Speed of the transition, in milliseconds
								  timeout: 2000,          // Integer: Time between slide transitions, in milliseconds
								  pager: false,           // Boolean: Show pager, true or false
								  nav: false,             // Boolean: Show navigation, true or false
								  random: false,          // Boolean: Randomize the order of the slides, true or false
								  pause: false,           // Boolean: Pause on hover, true or false
								  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
								  prevText: "Previous",   // String: Text for the "previous" button
								  nextText: "Next",       // String: Text for the "next" button
								  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
								  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
								  manualControls: "",     // Selector: Declare custom pager navigation
								  namespace: "rslides",   // String: Change the default namespace used
								  before: function(){},   // Function: Before callback
								  after: function(){}     // Function: After callback
						});				  	
				  });
				  				
</script>


<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>

<body>
<div id="main">
  <div id="header">
      <div id="logo"><img src="images/xtreme_logo.png" width="288" height="160" border="0" usemap="#Map" />
<map name="Map"><area shape="rect" coords="1,0,288,159" href="home.html" alt="">
</map>
      
    </div>    
    <div id="manual"><a href="home.html">Home</a><a href="about.html">Our History</a><a href="products.html">Products</a><a href="members.html">Members</a><a href="contact.html">Contact Us</a>
  
    </div>    
  </div>
  
<div id="content"><!-- InstanceBeginEditable name="EditRegion1" --><div id="pcode">
<?php
$fname=$_POST[fname];
$lname=$_POST[lname];
$allStates=array("New South Wales", "Northern Territory", "Queensland", "South Australia", "Western Australia."); 
$comma_separated = implode(", ", $allStates);
$state=$_POST[state];
$mtype=$_POST[mtype];


echo "<h2>Welcome to Extreme Explorer ".$fname."&nbsp;".$lname."."."</h2><br>";
echo "Extreme Explorer have branches in ";
echo $comma_separated."<br>";

switch ($state){
	
	case "- Please Specify your state -":
		echo "Please make a selection..."; 
		break;
	case "New South Wales":
		echo "The nearest shop in your state is 27 Bathurst St. Sydney, New South Wales. <br>"; 
		break;
	case "Northern Territory":
		echo "The nearest shop in your state is 16 Kincumber St., Darwin, Northern Territory. <br>"; 
		break;
	case "Queesland":
		echo "The nearest shop in your state is 7 Tulipwood Road, Brisbane, Queensland. <br>"; 
		break;
	case "South Australia":
		echo "The nearest shop in your state is 18 Rebecca Road, Adelaide, South Australia. <br>"; 
		break;
	case "Western Australia":
		echo "The nearest shop in your state is 2 Catherine St., Perth, Western Australia. <br>"; 
		break;
	default:
		echo "Please make a selection...";
		break;	
	}

switch ($mtype){
	
	case "- Select a membership type -":
		echo "Please make a selection...";
		break;
	case "Platinum (2 years)":
		echo "You will have a <b>10% discount</b> on the total amount of purchase you make. <br>"; 
		break;
	case "Silver (3 years)":
		echo "You will have a <b>20% discount</b> on the total amount of purchase you make. <br>";
		break;
	case "Gold (5 years)":
		echo "You will have a <b>30% discount</b> on the total amount of purchase you make. <br>";
		break;
	default:
		echo "Please make a selection...";
		break;	
	}


?>


</div><!-- InstanceEndEditable --></div> 
      
  
      <div id="footer">
      	
        <div id="ftable"><table width="100%" border="0">
  <tr>
    <td>@2013 Extreme Explorer<br>ABN: 456 987 321</td>
    <td><div align="center"><a class="fcamatti" href="http://twitter.com">Privacy Policy</a>|<a class="fcamatti" href="http://twitter.com">Terms and Condtitions</a></div></td>
    <td><div align="right"><a class="icon-facebook-squared" href="http://facebook.com"></a><a class="icon-twitter-squared" href="http://twitter.com"></a><a class="icon-pinterest-squared" href="http://pinterest.com"></a>by<a class="fcamatti" href="http://twitter.com">@fcamatti</a></div></td>
    
  </tr>
</table>
</div>
   </div>
</div> 

</body>
<!-- InstanceEnd --></html>
