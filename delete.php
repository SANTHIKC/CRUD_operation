<?php
include 'connection.php';
$id= $_GET['id'];
$sql=mysqli_query($conn,"DELETE FROM class WHERE id='$id'");
if($sql)
{
    echo'<script>alert("delete successfully");window.location.href="read.php";</script>';
}
else
{
    echo'<script>alert("something wrong");</script>';
}
?>