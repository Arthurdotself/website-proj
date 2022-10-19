<?php
include('connect.php');
$pid = $_GET['id'];
$sql = "delete from prodacts where id= '$pid' ";
$result = mysqli_query($conn,$sql);
if($result){
    header('location:display.php');
}

?>