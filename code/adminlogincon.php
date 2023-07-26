<?php
$uname=$_POST['user'];
$pass=$_POST['pass'];
$conn=mysqli_connect("localhost","id18320683_root","LPL.7e-ffPf%PY8","id18320683_foodexpress");
if(!$conn){
    die("Couldn't connect to the database due to ".mysqli_connect_error());
}
else{
    $sql="SELECT * from user where User_Name='$uname' and Password='$pass'";
    $result=$conn->query($sql);
    if(mysqli_num_rows($result)){
        header("Location:admin.php?user=$uname");
    }
    else{
        header("Location:adminlogin.php");
    }
}

?>