<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08/03/2017
 * Time: 11:35
 */
//function dbConnect($host, $dbName, $uname, $pw)
//{
    $connectstr_dbhost = $host;
    $connectstr_dbname = $dbName;
    $connectstr_dbusername = $uname;
    $connectstr_dbpassword = $pw;
    foreach ($_SERVER as $key => $value) {
        if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
            continue;
        }
        $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
        echo $connectstr_dbhost;
        $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
        echo $connectstr_dbname;
        $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
        echo $connectstr_dbusername;
        $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
        echo $connectstr_dbpassword;
    }
    $link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword, $connectstr_dbname);
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
  //  return $link;
//}
?>