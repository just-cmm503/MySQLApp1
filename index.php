<?php
/**
 * Created by PhpStorm.
 * User: 1017166
 * Date: 07/03/2017
 * Time: 16:49
 */

$result=mysqli_query($db,$sql);
while($row = $result->fetch_array())
{
    /* the code inside here is repeated for each item in the array
    You can do things like the following to print out each movie title */

    $movieTitle = $row['title'];
    echo "<p>" . $movieTitle . "</p>";

}
?>