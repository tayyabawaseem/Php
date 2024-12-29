<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ems";

$con = mysqli_connect($servername , $username , $password , $dbname);

if($con)
{
    // echo (" Database Connect Successfully!!! 😊");
}
else{
    echo (" Database Connection Failed!!! 😐");

}

?>