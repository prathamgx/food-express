<!-- <?php
// session_start();
?> -->
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
        hr{
            border: 2px solid darkcyan;
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
        #insta{
            width: 100px;
        }
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
        .head{
            display:flex;
            flex-direction: row;
            background-color:lightgray;
            /* width:100%; */
            /* height:100%; */
            height:max-content;
            justify-content:flex-start;
        }
        .text{
            display:flex;
            flex-direction: column;
            padding:10px;
            font-family:'Segoe UI';
            /* justify-content:space-between; */
        }
        .name,.details{
            height:100%;
            /* text-align:center; */
            /* padding-top:18%; */
        }
        .details{
            font-size:large;
            font-weight:bold;
        }
        .name .p1{
            font-size:x-large;
            font-weight:bolder;
        }
        .name .p2{
            font-size:large;
            font-weight:bold;
        }
        .img{
            padding:10px;
            width:19%;
        }
        .img img{
            width:100%;
        }
        .rating,.delivery{
            border-right:1px solid black;
            padding-right:10px;
            padding-left:10px;
        }
        .price{
            padding-left:10px;
        }
        .menu{
            padding:20px;
            width:100%;
        }
        .menu table{
            width:50%;
            margin:auto;
            display:block;
        }
        .menu table tbody tr td{
            padding : 8px;
            font-size :larger;
            color :darkcyan;
            font-family:'Segoe UI';
            font-weight :500;
            text-align: center;
            width : 30%;
        }
        .menu table tbody tr td button{
            font-size :small;
            padding : 5px;
            border : 2px solid darkcyan;
            background-color:white;
            color :darkcyan;
            font-weight :bold;
            text-align:center;
        }
        .menu table tbody tr td button:hover{
            background-color:darkcyan;
            color :white;
            cursor:pointer;
        }
        .menu h2{
            font-family :'impact';
            text-align :center;
            font-weight :200;
            color :darkcyan;
            margin-bottom:20px;
        }
    </style>
</head>
<body>
<?php
    $user=$_GET['user'];
    $id=$_GET['id'];
    $conn=mysqli_connect("localhost","id18320683_root","LPL.7e-ffPf%PY8","id18320683_foodexpress");;
    if(!$conn){
        die("Couldn't connect to the database due to ".mysqli_connect_error());
    }
    else{
        $sql="SELECT * from site_info where Id='$id'";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
            $img=$row['Img'];
            $name=$row['Name'];
            $address=$row['Address'];
        }
    }
    ?>
    <?php
    $sql8="SELECT sum(Qty) as Sum from cart where User='$user'";
    $result=$conn->query($sql8);
    while ($row=$result->fetch_assoc()){
        $count=$row['Sum'];
    }
    ?>
<div class="maindiv">
        <div class="banner">
            <p class="logo">Food Express</p>
        </div>
        <div class="nav">
            <div class="rand">
                <ul>
                    <?php
                    echo"
                    <li><a href='home.php?user=$user'>Home</a></li>
                    <li><a href='aboutus.php?user=$user'>About Us</a></li>
                    <li><a href='#footer'>Contact Us</a></li>
                    <li><a href='profile.php?user=$user'>Profile</a></li>
                    <li id='cart'><a href='mycart.php?user=$user'>My Cart($count)</a></li>
                    ";
                    ?>
                </ul>
            </div>
            <hr>
        </div>
    </div>
    <div class="head">
        <div class="img">
            <img src="../images/<?php echo$img;?>.jpg" alt="<?php echo$name ;?>">
        </div>
        <div class="text">
            <div class="name">
                <p class="p1"><?php echo$name;?></p>
                <br>
                <p class="p2"><?php echo$address;?></p>
            </div>
            <div class="details">
                <span class="rating">&starf;4.2 Ratings</span>
                <span class="delivery">Free Delivery</span>
                <span class="price">&#8377;200 FOR TWO</span>
            </div>
        </div>
    </div>
    
    <div class="menu">
        <h2>Menu</h2>
        <table>
            <tbody>
                <?php
                $sql1="SELECT * from menu where Rest_Id='$id'";
                $result=$conn->query($sql1);
                while($row=$result->fetch_assoc()){
                    echo"
                    <form action='managecart.php?id=$id' method='POST'>
                    <tr>
                    <td>{$row['Name']}</td>
                    <td>&#8377; {$row['Price']}</td>
                    <input type='hidden' name='Menu_Id' value='{$row['Id']}'>
                    <input type='hidden' name='Rest_Id' value='$id'>
                    <input type='hidden' name='Name' value='{$row['Name']}'>
                    <input type='hidden' name='Price' value='{$row['Price']}'>
                    <input type='hidden' name='user' value='$user'>
                    <td><button type='submit' name='Add'>ADD</button></td>
                    </tr>
                    </form>
                    ";
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