<?php
/*
config.php

Provides a place to put all configuration info for our app
*/


include 'credentials.php';

define('DEBUG',true); #we want to see all errors

//THIS_PAGE is the name of the current page
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));


$day = date('D');
//$saleDay = "";
//$special = '';

$nav1['index.php'] = "Home";
$nav1['template.php'] = "Daily Special";
$nav1['contact.php'] = "Contact Us";
$nav1['disclaimer.php'] = "Disclaimer";
$nav1['allspecials.php'] = "All Specials";


ob_start();//prevents header errors


switch($day)
{
	case "Sun": $special = "PAPERCLIPS"; $saleDay  = "Sunday"; break;
	case "Mon": $special = "PAPERWEIGHTS"; $saleDay  = "Monday"; break;
	case "Tue": $special = "MOUSE PADS"; $saleDay  = "Tuesday"; break;
	case "Wed": $special = "SCISSORS"; $saleDay  = "Wednesday"; break;
	case "Thu": $special = "ENVELOPES"; $saleDay  = "Thursday"; break;
	case "Fri": $special = "TAPE"; $saleDay  = "Friday"; break;
	case "Sat": $special = "STAPLERS"; $saleDay  = "Saturday";
}


//echo THIS_PAGE;
//die;


switch(THIS_PAGE)
{
    case "index.php": 
        $title = "SPOT Office Supply";
        $pageID = "Welcome to the Home Page";
        break;

    case "template.php": 
        $title = "Daily Special";
        $pageID = "Welcome to the Daily Special Page";
        break;
		
	case "contact.php": 
        $title = "Contact Us";
        $pageID = "Welcome to the Contact Page";
        break;
		
	case "disclaimer.php": 
        $title = "Disclaimer";
        $pageID = "Welcome to the Disclaimer Page";
        break;
		
	case "allspecials.php": 
        $title = "All Specials";
        $pageID = "Welcome to the All Specials Page";
        break;
        
    default: 
        $title = THIS_PAGE;
        $pageID = "";  

}

	

function makeLinks($ar)
{
	$myReturn = '';
	$day = date('D');
	
	foreach($ar as $url => $label)
	{
		
		if($url == THIS_PAGE)
		{
			echo '<li class="active"><a href="' . $url . '?id=' . $day .' ">' . $label . '</a></li>';
			
		}else{
			echo '<li><a href="' . $url . '?id=' . $day .'">' . $label . '</a></li>';	
			
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








