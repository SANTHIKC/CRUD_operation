<?php
$conn=mysqli_connect("localhost","root","","student");
{
    if(mysqli_connect_error())
    {
        die("error in connection");
    }
    else
    {
        echo"connected";
    }
}
?>