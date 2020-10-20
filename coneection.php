


<?php
$sever="localhost";
$username="root";
$password="";

$con=mysqli_connect($sever,$username,$password);
if(!$con){
    die("connection failed due to".mysqli_connect_error());
}
?>