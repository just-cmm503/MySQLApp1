<?php
/**
 * Created by PhpStorm.
 * User: 1017166
 * Date: 16/03/2017
 * Time: 19:45
 */
include "dbConnect.php";
$sql = "select * from marvelmovies";
// execute the SQL query
//$result=mysqli_query($link,$sql);
$result=$link->query($sql);
//echo mysqli_num_rows($result)." rows returned from database ";
while($row = $result->fetch_array())
{
    /* the code inside here is repeated for each item in the array
    You can do things like the following to print out each movie title */
    print " <div class='row'> \r\n";
    //$movieTitle = $row['title'];
    //print "<p>" . $movieTitle . "</p>";

    foreach ($row as &$col){
        print " <div class='col'> \r\n";
        print "  $col  ";
        print " </div> \r\n";
    }
    print " </div> \r\n";
}
$result->close();
$link->close();

?>


