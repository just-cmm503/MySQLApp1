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


print "<div class='cHr'>";
for ($i=0; $i< mysqli_num_fields($result);$i++){
    $hRow=mysqli_fetch_fields($result,$i);
    print "<div class='cH'>";
    print "   $hRow  ";
    print "</div>";
}
print "</div>";


while($row = $result->fetch_array())
{
    /* the code inside here is repeated for each item in the array
    You can do things like the following to print out each movie title */
    print " <div class='row'> \r\n";
    $count1=0;
    foreach ($row as $col){
        $count1++;
        if (($count1 % 2)==0) {
            print " <div class='col'> \r\n";
            print "  $col  ";
            print " </div> \r\n";
        }
    }

    print " </div> \r\n";
}
$result->close();
$link->close();

?>


