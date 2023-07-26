<?php
$uname=$_POST['user'];
$total=$_POST['total'];
$conn=mysqli_connect("localhost","id18320683_root","LPL.7e-ffPf%PY8","id18320683_foodexpress");
if(!$conn){
    die("Couldn't connect to the database due to ".mysqli_connect_error());
}
else{
    $sql4="Select max(Order_Id) as oids from order_details";
    $results=$conn->query($sql4);
    while($row=$results->fetch_assoc()){
        $orderid=$row['oids'];
    }
    if($orderid==NULL){
        $orderid=1;
    }
    $sql="SELECT Id from customer where User_Name='$uname'";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
        $id=$row['Id'];
    }
    $oid=order_id($conn,$orderid);
    if($oid){
        $sql="SELECT * from cart where User='$uname'";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
            $sql2="INSERT into order_details(Menu_Id,Qty,Price,Processed_By,Order_Id,Customer_Id) values({$row['M_Id']},{$row['Qty']},{$row['Price']},{$row['Rest_Id']},$oid,$id)";
            $result1=$conn->query($sql2);
        }
        
    }
    $sql="DELETE from cart where User='$uname'";
    $result=$conn->query($sql);
    $sql5="SELECT distinct Order_Id,Processed_By from order_details where Order_Status='Active' and Customer_Id='$id'";
    $result=$conn->query($sql5);
    while ($row=$result->fetch_assoc()){
        $sql7="Select * from payment where Order_Id={$row['Order_Id']}";
        $result2=$conn->query($sql7);
        if(mysqli_num_rows($result2)==0){
            $sql6="INSERT INTO payment(Order_Id,Paid_By,Amount,Processed_By) values({$row['Order_Id']},'$uname','$total',{$row['Processed_By']})";
            $result1=$conn->query($sql6);
        }
    }
    header("Location:rating.php?user=$uname");
}
?>
<?php
function order_id($conn,$orderid){
    $sql1="Select * from order_details where Order_Id='$orderid'";
    $result=$conn->query($sql1);
    if(mysqli_num_rows($result)==0){
        return $orderid;
    }
    else{
        $orderid=$orderid+1;
        order_id($conn,$orderid);
        return $orderid;
    }
}

?>
