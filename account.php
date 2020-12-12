<?php
$srvrnm='localhost';
$usrnm='root';
$pass='';
$dbname='information';
$con=mysqli_connect($srvrnm,$usrnm,$pass,$dbname);

$FNAME=$_POST["fname"];
$LNAME=$_POST["lname"];
$ADDRESS=$_POST["address1"];
$NO=$_POST["number"];
$PASSWORD=$_POST["password"];
$CITY=$_POST["city"];
$ZIP=$_POST["zip"];
$UNAME=$_POST["uname"];
$EMAIL=$_POST["email"];
$ACC=$_POST["account_type"];






$S="INSERT INTO user_info (fname,lname)
VALUES ('$FNAME','$LNAME')";

if(mysqli_query($con,$S))

{
    echo "yes";
}
else
{
    echo "no";
}

?>
