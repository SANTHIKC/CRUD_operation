<?php 
$conn=mysqli_connect("localhost","root","","student");
if(mysqli_connect_error())
{
    die("Error in connection");
}
else{
     echo "connected";
}
?>