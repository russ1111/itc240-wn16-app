<?php
/*
config.php

Provides a place to put all configuration info for our app

*/

include 'credentials.php';

define('DEBUG',true); #we want to see all errors

//THIS_PAGE is the name of the current page
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav1['index.php'] = "Home";
$nav1['template.php'] = "Template";
$nav1['contact.php'] = "Contact Us";
$nav1['disclaimer.php'] = "Disclaimer";

//echo THIS_PAGE;
//die;


switch(THIS_PAGE)
{
    case "index.php": 
        $title = "Home page title";
        $pageID = "Home Page";
        break;

    case "template.php": 
        $title = "Template page title";
        $pageID = "Template Page";
        break;
		
	case "contact.php": 
        $title = "Contact page title";
        $pageID = "Contact Page";
        break;
		
	case "disclaimer.php": 
        $title = "Disclaimer page title";
        $pageID = "Disclaimer Page";
        break;
        
    default: 
        $title = THIS_PAGE;
        $pageID = "";  

}

	
	$day = date('D');
	$color = "";
	$pic = "";
	$alt = "";
	$special = "";
	
	
	switch($day){
		case "Sun": $day = "Sunday"; $color = "#FF308A"; $pic = "images/coffee_beans.jpg"; 
			$alt = "Enjoy our delicious roasted coffee beans"; $special = "Dark-Roasted Blend"; break;
		case "Mon": $day = "Monday"; $color = "#BA0F17"; $pic = "images/coffee_drip.jpg"; 
			$alt = "Our freshly-dripped coffee has a wonderful aroma"; $special = "Espresso"; break;
		case "Tue": $day = "Tuesday"; $color = "#E95732"; $pic = "images/coffee_drop.jpg"; 
			$alt = "Our double espresso will have you up & at 'em"; $special = "Double Espresso"; break;
		case "Wed": $day = "Wednesday"; $color = "#E9BD32"; $pic = "images/coffee_foam.jpg"; 
			$alt = "Enjoy our delectable latte"; $special = "Latte"; break;
		case "Thu": $day = "Thursday"; $color = "#6DB27B"; $pic = "images/coffee_heart.jpg"; 
			$alt = "Pumpking Spice will have you feeling nice"; $special = "Pumpkin Spice"; break;
		case "Fri": $day = "Friday"; $color = "#5256D3"; $pic = "images/pumpkin-spice-latte.jpg"; 
			$alt = "Our cappuccino will help you start your day right"; $special = "Cappuccino"; break;
		case "Sat": $day = "Saturday"; $color = "#86289A"; $pic = "images/coffee_swirl.jpg"; 
			$alt = "Our triple espresso will have you running up the walls"; $special = "Triple Espresso"; break;
	}		
	


function makeLinks($ar)
{
	$myReturn = '';
	foreach($ar as $url => $label)
	{
		if($url == THIS_PAGE)
		{
			echo '<li class="active"><a href="' . $url . '">' . $label . '</a></li>';
			
		}else{
			echo '<li><a href="' . $url . '">' . $label . '</a></li>';	
			
		}
	}
	
	return $myReturn;
}


/*
<ul class="nav navbar-nav navbar-right">
	<li class="active"><a href="index.html">HOME</a></li>
	<li><a href="about.html">ABOUT</a></li>
	<li><a href="services.html">SERVICES</a></li>
	<li><a href="works.html">WORKS</a></li>
	<li><a data-toggle="modal" data-target="#myModal" 
	href="#myModal"><i class="fa fa-envelope-o"></i></a></li>
</ul>
*/

function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
        echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
        die();
    }
}










