<?php
$uname=$_POST['uname'];
$rating=$_POST['rating'];
$feedback=$_POST['review'];
$conn=mysqli_connect("localhost","id18320683_root","LPL.7e-ffPf%PY8","id18320683_foodexpress");
if(!$conn){
    die("Couldn't connect to the database due to ".mysqli_connect_error());
}
else{
$sql="SELECT Id from customer where User_Name='$uname'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
    $id=$row['Id'];
}

$sql1="INSERT into rating(Customer_Id,Score,Feedback) values('$id','$rating','$feedback')";
$result=$conn->query($sql1);
header("location:profile.php?user=$uname");
}
?>