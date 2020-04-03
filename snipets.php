<?php

require("server.php");

// collect data
$sql="SELECT * FROM Apetizers";
if ($result=$mysqli()->query($sql)){
    while($row=$result->fetch_assoc())
    {
        echo "<b>Name: </b>". $row['itemName']." at ( ".$row['itemPrice']." ) - ".$row['itemDesc']."<br/>";
    }
}else{
        die('Invalid query: ' . $mysqli->error())
}



//another example: insert
$sql = "INSERT INTO login (itemName,itemPrice,itemDesc) VALUES ('NewFood',100.2,'Delicious');";
// or $sql = "UPDATE Appetizers SET itemName='updateFood',50.5,'so so food update') where itemID=1;";
// or $sql = "DETELE FROM Appetizers where itemID=10;";
$result = $mysqli->query($sql) or ($mysqli->error);



$mysqli->close();
