<?php
$servername="localhost";
$username="root";
$password="";
$databasename="ecom";
$conn=mysqli_connect($servername,$username,$password,$databasename);
if($conn)
{
    //echo "<script>alert('Successfull')</script>";
}
else
{
    echo "<script>alert('Not Successfull')</script>";
}
?>