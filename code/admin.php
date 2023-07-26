<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Express</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Birthstone+Bounce:wght@500&family=Pacifico&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        html,body{
            width:100%;
            height:100vh;
        }
        .logo{
            height: max-content;
            text-align: center;
            background-color: darkcyan;
            color:white;
            font-family: 'Birthstone Bounce', cursive;
            word-spacing: 10px;
            font-size: 70px;
            padding:18px ;
        }
        .nav .rand{
            text-align: center;
        }
        .nav .rand ul{
            list-style: none;
            padding: 10px 0px;
            
        }
        .nav .rand ul li{
            display: inline;
            text-align: center;
            margin: 15px;
        }
        .nav .rand ul li a{
            text-decoration:none;
            text-align: center;
            color:darkcyan;
            font-family:'Oswald';
            font-size: large;
            font-weight: bolder;
            
            
        }
        /* footer .social a img{
            width: 160px;
            height: 80px;
        } */
        footer .social a i{
            color:white;
            font-size:xx-large;
            margin-right:8px;
        }
        footer{
            margin-top: 40px;
            bottom:0;
            position:relative;
            width:100%;
            background-color: darkcyan;
        }
        footer h3{
            padding-top: 10px;
            color: white;
            font-family:'Segoe UI';
        }
        footer .social,footer h3{
            text-align: center;
        }
        /* #insta{
            width: 100px;
        } */
        .copyright{
            margin-top: 8px;
        }
        .copyright p{
            padding: 5px;
            color:white;
            text-align: center;
            font-weight: bold;
            font-size: medium;
            font-family:'Segoe UI';
        }
        hr{
            border: 2px solid darkcyan;
        }
        .orders{
            padding-top:10px;
            text-align: center;
            width:100%;
            min-height:50vh;
            max-height:max-content;
        }
        table{
            margin:auto;
            display:block;
            color:darkcyan;
            width:max-content;
        }
        th,td{
            padding-right:10px;
            text-align:center;
            padding-bottom:8px;
            
        }
        th{
            font-size:medium;
            font-family:'Segoe UI';
        }
        td{
            font-family:Arial;
            font-size:medium;
        }
        button{
            font-size:x-small;
            padding:4px;
            background-color:white;
            border:2px solid darkcyan;
            color:darkcyan;
            font-weight:bold;
        }
        button:hover{
            background-color:darkcyan;
            color:white;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
    $user=$_GET['user'];
    ?>
    <div class="maindiv">
        <div class="banner">
            <p class="logo">Food Express</p>
        </div>
        <div class="nav">
            <div class="rand">
                <ul>
                    <?php
                    echo"<li><a href='admin.php?user=$user'>Home</a></li>
                    <li><a href='#footer'>Contact Us</a></li>
                    <li><a href='adminlogin.php'>Logout</a></li>
                    ";
                    ?>
                </ul>
            </div>
            <hr>
        </div>
    </div>
    <?php
    $conn=mysqli_connect("localhost","id18320683_root","LPL.7e-ffPf%PY8","id18320683_foodexpress");
    if(!$conn){
        die("Couldn't connect to the database due to ".mysqli_connect_error());
    }
    else{
        $sql="SELECT Id from user where User_Name='$user'";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
            $uid=$row['Id'];
        }
        $sql2="SELECT Id from site_info where User_Id='$uid'";
        $result=$conn->query($sql2);
        while($rows=$result->fetch_assoc()){
            $rid=$rows['Id'];
        }
    }
    ?>
    <div class="orders">
        <table>
            <tbody>
                <tr>
                    <th>Item Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Order Date</th>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th></th>
                </tr>
                <?php
                $sql2="SELECT * from order_details where Processed_By='$rid' and Order_Status='Active'";
                $result=$conn->query($sql2);
                while($row=$result->fetch_assoc()){
                    $sql3="Select Name from menu where Id={$row['Menu_Id']}";
                    $result1=$conn->query($sql3);
                    while($row1=$result1->fetch_assoc()){
                        $itemname=$row1['Name'];
                        $sql4="Select Name from customer where Id={$row['Customer_Id']}";
                        $result2=$conn->query($sql4);
                        while($row2=$result2->fetch_assoc()){
                            $custname=$row2['Name'];
                            echo"
                            <form action='deliver.php' method='post'>
                            <tr>
                            <td>$itemname</td>
                            <td>{$row['Qty']}</td>
                            <td>{$row['Price']}</td>
                            <td>{$row['Order_Date']}</td>
                            <td>{$row['Order_Id']}</td>
                            <td>$custname</td>
                            <input type='hidden' name='orderid' value='{$row['Order_Id']}'>
                            <input type='hidden' name='rid' value='$rid'>
                            <input type='hidden' name='user' value='$user'>
                            <td><button type='submit' name='Deliver'>Deliver</button></td>
                            </tr>
                            </form>
                            ";
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <footer id="footer">
        <h3>Connect With Us</h3>
        <br>
        <div class="social">
            <a href="https://www.instagram.com/foodexpressjiit/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/Food-Express-103696265440982" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="mailto: foodexpressjiit@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
        </div>
        <div class="copyright">
            <p>
                &copy;2021, Food Express
            </p>
        </div>
    </footer>
</body>
</html>