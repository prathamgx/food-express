<?php
$user=$_GET['user'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$conn=mysqli_connect("localhost","id18320683_root","LPL.7e-ffPf%PY8","id18320683_foodexpress");;
if(!$conn){
    die("Couldn't connect to the cerver due to ".mysqli_connect_error());
}
else{
    $sql="UPDATE customer SET Name='$name',Email='$email',Ph_No='$phone',City='$city' WHERE User_Name='$user'";
    mysqli_query($conn,$sql);
    header("Location:profile.php?user=$user");
}
?>