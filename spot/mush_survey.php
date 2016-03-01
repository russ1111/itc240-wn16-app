<?php
/*
mush_contact.php

Use this file as a model for making more application pages


' . xxx . '

*/

?>
<?php include 'includes/mush_config.php';?>
<?php include 'includes/mush_header.php';?>
<link rel="stylesheet" type="text/css" href="mush.css">

<?php 

$to = "rschne07@seattlecentral.edu";
$subject = "contact form from Mush App";
$replyTo = $_POST['Email'];

$content = '
<p><b>Comments: </b></p>
<p>' . $_POST['Comments'] . '</p>




';

?>
<h3>Survey</h3>
<?php

/*
if(isset($_POST['Email']))
{//data sent - send email
*/
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    */
    /*
    $response = safeEmail($to, $subject, $content, $replyTo, 'html');
    
    if($response)
    {
        echo '<p>We will get back to you shortly</p>';
    }else{
       echo 'Trouble with HTML email!<br />'; 
    }
    
    
    
}else{//show form
    echo'
    <form action="mush_contact.php" method="post">
    <p>Name: <input type="text" name="Name" /></p>
    <p>Email: <input type="email" name="Email" /></p>
    <p>Comments: <textarea name="Comments"></textarea></p>
    <p><input type="submit" value="Contact Us: "></p>
    </form>
    ';
}
*/

/*
if($response)
{
    echo 'hopefully HTML email sent!<br />';
}else{
   echo 'Trouble with HTML email!<br />'; 
}
*/

/*
function safeEmail($to, $subject, $message, $replyTo = '',$contentType='text')
{
    $fromAddress = "Automated Email <noreply@" . $_SERVER["SERVER_NAME"] . ">";

    if(strtolower($contentType)=='html')
    {//change to html format
        $contentType = 'Content-type: text/html; charset=iso-8859-1';
    }else{//default is text
        $contentType = 'Content-type: text/plain; charset=iso-8859-1';
    }
    
    $headers[] = "MIME-Version: 1.0";//optional but more correct
    //$headers[] = "Content-type: text/plain; charset=iso-8859-1";
    $headers[] = $contentType;
    //$headers[] = "From: Sender Name <sender@domain.com>";
    $headers[] = 'From: ' . $fromAddress;
    //$headers[] = "Bcc: JJ Chong <bcc@domain2.com>";
    
    if($replyTo !=''){//only add replyTo if passed
        //$headers[] = "Reply-To: Recipient Name <receiver@domain3.com>";
        $headers[] = 'Reply-To: ' . $replyTo;   
    }
    
    $headers[] = "Subject: {$subject}";
    $headers[] = "X-Mailer: PHP/". phpversion();
    
    //collapse all header data into a string with operating system safe
    //carriage returns - PHP_EOL
    $headers = implode(PHP_EOL,$headers);

    //use mail() command internally and pass back the feedback
    return mail($to, $subject, $message, $headers);

}//end safeEmail()
*/
?>


<script type="text/javascript">
		//place local js code here
		
		function init()
		{//init places focus on the first form element
			document.myForm.Name.focus();
		}
		
		//here we make sure the user has entered valid data	
		function checkForm(thisForm)
		{//check form data for valid info
			if(empty(thisForm.Name,"Please Enter Your Name")){return false;}
			if(!isEmail(thisForm.Email,"Please enter a valid Email Address")){return false;}
			return true;//if all is passed, submit!
		}
		
		addOnload(init); //with addOnload() we can add as many functions as we wish to window.onload (one by one)!
	</script>



<form action="http://www.newmanic.com/formtest.asp" method="post" name="myForm" onsubmit="return checkForm(this);">
<div align="center"><span class="required">(*required)</span></div>
	<table border="1" style="border-collapse:collapse" align="center">
		<tr><!-- the form elements 'Name' and 'Email' are sigificant to the app, any others can be added/deleted -->
			<td align="right"><span class="required">*</span>Name:</td>
			<td><input type="text" name="Name"  /></td>
		</tr>
		<tr><td align="right"><span class="required">*</span>Email:</td>
			<td><input type="text" name="Email" /></td>
		</tr>
		<tr><td align="right">How Interested Are You In Mushrooms?</td>
			<td>
				<select name="How_Did_You_Hear_About_Us?">
					<option value="">Choose Your Interest Level</option>
					<option value="Extremely Interested">Extremely Interested</option>
					<option value="Moderately Interested">Moderately Interested</option>
					<option value="Indifferent">Indifferent</option>
					<option value="Moderately Uninterested">Moderately Uninterested</option>
					<option value="Extremely Uninterested">Extremely Uninterested</option>
				</select>
			</td>
		</tr>
		<tr><td align="right">What Are You Interested In Regarding Mushrooms?:</td>
			<td>
				<input type="checkbox" name="Interested_In[]" value="Identification" /> Identification <br />
				<input type="checkbox" name="Interested_In[]" value="Cultivation" /> Cultivation <br />
				<input type="checkbox" name="Interested_In[]" value="Foraging" /> Foraging <br />
				<input type="checkbox" name="Interested_In[]" value="Cooking" /> Cooking <br />
				<input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
			</td>
		</tr>
		<tr>
			<td align="right">Would You Like To Join Our Mailing List?</td>
			<td>
				<input type="radio" name="Join_Mailing_List?" value="Yes" /> Yes <br />
				<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
			</td>
		</tr>
		<tr><td align="right">Comments:</td>
			<td><textarea name="Comments" cols="40" rows="4" wrap="virtual"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="submit" /></td>
		</tr>
    </table>
    </form>
<br /><br />




<!--<meta http-equiv="content-type" content="text/html; charset=utf-8" />-->
<!--<meta name="robots" content="noindex, nofollow" />-->
	<!--<script src="include/util.js" type="text/javascript"></script>--><!-- utility file of handy JS functions -->
	<!--<link rel="stylesheet" type="text/css" href="include/styles.css" />--><!-- optional stylesheet reference -->
	<style type="text/css">
		/* required class for identifying mandatory elements */
		.required {font-style:italic;color:#FF0000;font-weight:bold;}
	</style>
	<script type="text/javascript">
		//place local js code here


<?php 
$sql = "select * from test_mush";

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));


@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database

?>
<br />

<?php include 'includes/mush_footer.php';?>