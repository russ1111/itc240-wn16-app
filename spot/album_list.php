<?php
/*
album_list.php

Use this file as a model for making more application pages


' . xxx . '

*/

?>
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<link rel="stylesheet" type="text/css" href="spot.css">


<?php 
$sql = "select * from test_Customers";

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
    while ($row = mysqli_fetch_assoc($result))
    {
       echo "<p>";
       echo 'FirstName: ';
       echo '<a href="customer_view.php?id=' . $row['CustomerID'] . '">' . $row['FirstName'] . '</a><br />';    
        
        
       //echo "FirstName: <b>" . $row['FirstName'] . "</b><br />";
       echo "LastName: <b>" . $row['LastName'] . "</b><br />";
       echo "Email: <b>" . $row['Email'] . "</b><br />";
       echo "</p>";
    }
}else{//no records
    echo '<div align="center">What! No customers?  There must be a mistake!!</div>';
}

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database



?>


<br />

<p id="large"><?=$_GET["id"]?> <br /> <?=date("Y-m-d")?> </p>


<p></p>
<p>The daily special sale item is <?=$special?>!</p>

<p>Eu eros virtute vel, nec id cetero suavitate. Mei an illud vidisse consetetur, detraxit adipisci vulputate nec ex, eu pri augue saepe. Everti recusabo liberavisse ex eum. Sea ea percipitur eloquentiam. Putent assueverit quo cu, virtute equidem antiopam mel ea. <br /><br />

Quem omnis neglegentur nec at, semper admodum fuisset ad mei. Ea enim quodsi doctus per, sententiae dissentiunt reprehendunt sed in. Eos ne nisl magna docendi. An qui petentium scripserit, id vis fugit signiferumque. Eos eleifend definiebas ei. No vero saepe pri. <br /><br />

Te pri stet aliquid inciderint, enim munere ut duo, harum tollit suavitate in pro. Ad eos nulla pericula. Ex eam inermis tractatos. Inani zril perfecto ad eum, eam altera vivendo ei, ne agam consul mel.</p>
    
<?php include 'includes/footer.php';?>