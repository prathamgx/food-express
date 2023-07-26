<?php
$name=$_POST['name'];
$uname=$_POST['uname'];
$phone=$_POST['phone_number'];
$email=$_POST['email'];
$pass=$_POST['password'];
$loc=$_POST['loc'];
$conn=mysqli_connect("localhost","id18320683_root","LPL.7e-ffPf%PY8","id18320683_foodexpress");
if(!$conn){
    die("Couldn't connect to the database due to .".mysqli_connect_error());
}
else{
   $sql="SELECT * from customer where User_Name='$uname'";
   $result=$conn->query($sql);
   if(mysqli_num_rows($result)>0){
       header("Location:signup.php");
   } 
   else{
    $sql1="INSERT into customer(Name,Email,User_Name,Password,Ph_No,City) values('$name','$email','$uname','$pass','$phone','$loc')";
    $result1=$conn->query($sql1);
    header("location:login.php");
   }
}
?>