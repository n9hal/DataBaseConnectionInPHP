<?php
$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "WebsiteDB";
$con = mysqli_connect($server_name,$username,$password,$dbname);
echo "Connected";
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
?>
