<?php
    $loc=$_POST['location'];
    $conn=mysqli_connect("localhost","id18320683_root","LPL.7e-ffPf%PY8","id18320683_foodexpress");
    if(!$conn){
        die("Couldn't connect to the database due to ".mysqli_connect_error());
    }
    else{
        $sql="SELECT * from site_info where Address='$loc'";
        $result=$conn->query($sql);
        if(mysqli_num_rows($result)){
        header("location:login.php");

        }
        else{
        header('location:index.php');
        }
    }
    ?>