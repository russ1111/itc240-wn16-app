<?php
/*
contact2.php

Use this file as a model for making more application pages


*/

?>
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<link rel="stylesheet" type="text/css" href="spot.css">

<h3>Contact Us</h3>
<?php 
if(isset($_POST['Email']))
{//data sent - send email
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    
    ' . xxx . '
    */
    
    
    $to = "rschne07@seattlecentral.edu";
    $subject = "contact form from spot app";
    $replyTo = $_POST['Email'];
    
    $content = '
    <p><b>Comments: </b></p>
    <p>' . $_POST['Comments'] . '</p>
    
    
    
    ';
    
    
    $response = safeEmail($to, $subject, $content, $replyTo, 'html');

    if($response)
    {
        echo '<p>We will get back to you shortly</p>';
    }else{
       echo 'Trouble with HTML email!<br />'; 
    }
    
    
    
    
    
    
    

}else{//show form
    echo '
    <form action="contact2.php" method="post">
    <p>Name: <input type="text" name="Name" /></p> 
    <p>Email: <input type="email" name="Email" /></p> 
    <p>Comments: <textarea name="Comments"></textarea></p>
    <p><input type="submit" value="Contact Us: " /></p>
    </form>
    ';

}

?>

<br />
<p>Eu eros virtute vel, nec id cetero suavitate. Mei an illud vidisse consetetur, detraxit adipisci vulputate nec ex, eu pri augue saepe. Everti recusabo liberavisse ex eum. Sea ea percipitur eloquentiam. Putent assueverit quo cu, virtute equidem antiopam mel ea. <br /><br />

Quem omnis neglegentur nec at, semper admodum fuisset ad mei. Ea enim quodsi doctus per, sententiae dissentiunt reprehendunt sed in. Eos ne nisl magna docendi. An qui petentium scripserit, id vis fugit signiferumque. Eos eleifend definiebas ei. No vero saepe pri. <br /><br />

Te pri stet aliquid inciderint, enim munere ut duo, harum tollit suavitate in pro. Ad eos nulla pericula. Ex eam inermis tractatos. Inani zril perfecto ad eum, eam altera vivendo ei, ne agam consul mel.</p>
	
<?php include 'includes/footer.php';?>