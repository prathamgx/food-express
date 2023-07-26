<?php
$user=$_POST['uname'];
$pass=$_POST['pass'];
$conn=mysqli_connect("localhost","id18320683_root","LPL.7e-ffPf%PY8","id18320683_foodexpress");
if(!$conn){
    die("Couldn't connect to the database due to ".mysqli_connect_error());
}
else{
    $sql="SELECT * from customer where User_Name='$user' and Password='$pass'";
    $result=$conn->query($sql);
    if(mysqli_num_rows($result)>0){
        header("location:home.php?user=$user");
    }
    else{
        header("location:login.php");
    }
}
?>