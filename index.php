<?php
/**
 * Created by PhpStorm.
 * User: 1017166
 * Date: 07/03/2017
 * Time: 16:49
 */
// create a SQL query as a string
include "dbConnect.php";
$sql = "select * FROM 'marvelmovies' ";
// execute the SQL query
//$result = $db->query($sql);
//$db="localdb";
$result=mysqli_query($link,$sql);
//$result=$link->query($sql);
echo mysqli_num_rows($result)." ... ... ok ... ... ";
while($row = $result->fetch_array())
{
    /* the code inside here is repeated for each item in the array
    You can do things like the following to print out each movie title */
    echo "row 1 <br>";
    $movieTitle = $row['title'];
    echo "<p>" . $movieTitle . "</p>";

}
$result->close();
$link->close();
?>
