<?php
$orderid=$_POST['orderid'];
$rid=$_POST['rid'];
$user=$_POST['user'];
$conn=mysqli_connect("localhost","id18320683_root","LPL.7e-ffPf%PY8","id18320683_foodexpress");
if(!$conn){
    die("Couldn't connect to the database due to ".mysqli_connect_error());
}
else{
    $sql="UPDATE order_details set Order_Status='Delivered' where Order_Id='$orderid' and Processed_By='$rid' and Order_Status='Active'";
    $result=$conn->query($sql);
    header("location:admin.php?user=$user");
}
?>