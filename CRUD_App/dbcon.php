<?php
define("Hostname" , "localhost");
define("Username" , "root");
define("Password" , "");
define("Database" , "crud");

$connection = mysqli_connect(Hostname , Username , Password , Database);

if(!$connection)
{
    die("Connection Failed");
}

else{
    // echo "Yes Connect to db😀";
}
?>