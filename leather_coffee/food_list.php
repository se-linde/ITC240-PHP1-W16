<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<?php

echo "<h1>Food Library - a list of foods, types, and their purchase & expiry dates:</h1><br />";
echo "<p>";   

$sql = "select * from Food_Library";
// This is plumbing: 
$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0) //at least one record!
{ //show results. This is the partial. 
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<p>";
        // echo "FoodNumber: <b><i>" . $row['FoodID'] . "</i></b><br />";
        // echo "FirstName: <b>" . $row['FirstName'] . "</b><br />";
        echo "Food Name: "; 
        echo '<i><a href="food_view.php?id=' . $row['FoodID'] . '">' . $row['FoodName'] . '</a></i><br />'; 
        }
}else{//no records
    echo '<div align="center">What! No customers?  There must be a mistake!!</div>';
}
@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database
?> 
<?php include 'includes/footer.php';?>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      