<?php
if(isset($_POST['Add'])){
    $M_id=$_POST['Menu_Id'];
    $R_id=$_POST['Rest_Id'];
    $name=$_POST['Name'];
    $price=$_POST['Price'];
    $user=$_POST['user'];
    $id=$_GET['id'];
    $conn=mysqli_connect("localhost","id18320683_root","LPL.7e-ffPf%PY8","id18320683_foodexpress");
    if(!$conn){
        die("Couldn't connect to the database due to '".mysqli_connect_error());
    }
    else{
        $sql="SELECT * from cart where M_Id='$M_id' and Rest_Id='$R_id' and user='$user'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==0){
            $sql1="INSERT INTO cart VALUES('$M_id','$R_id','$name','$price',1,'$user')";
            $conn->query($sql1);
           
        }
        else{
            $sql2="UPDATE cart set Qty=(Qty+1) where M_Id='$M_id' and Rest_Id='$R_id' and User='$user'";
            mysqli_query($conn,$sql2);
        }
    }
    header("Location:res1.php?user=$user&id=$R_id");
}
else if(isset($_POST['Remove'])){
    $M_id=$_POST['Menu_Id'];
    $R_id=$_POST['Rest_Id'];
    $name=$_POST['Name'];
    $price=$_POST['Price'];
    $user=$_POST['user'];
    $conn=mysqli_connect("localhost","id18320683_root","LPL.7e-ffPf%PY8","id18320683_foodexpress");
    if(!$conn){
        die("Couldn't connect to the database due to '".mysqli_connect_error());
    }
    else{
        $sql1="SELECT * from cart where Rest_Id='$R_id' and M_Id='$M_id' and User='$user'";
        $result=$conn->query($sql1);
        while($row=$result->fetch_assoc()){
            if($row['Qty']==1){
                $sql2="DELETE from cart where Rest_Id='$R_id' and M_Id='$M_id' and User='$user'";
                mysqli_query($conn,$sql2);
            }
            else{
                $sql2="UPDATE cart set Qty=Qty-1 where Rest_Id='$R_id' and M_Id='$M_id' and User='$user'";
                mysqli_query($conn,$sql2);
            }
        }
        header("Location:mycart.php?user=$user");
    }
}
else if(isset($_POST['place_order'])){
    $total = $_POST['total'];
    $user = $_POST['user'];
    if($total > 0){
        header("Location:placeorder.php?user=$user&total=$total");
    }
    else{
        header("Location:mycart.php?user=$user");
    }
}
?>