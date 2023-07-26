<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
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
        body{
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
        .cart{
            display:flex;
            flex-direction: row;
            width: 100%;
            min-height:50vh;
            max-height:max-content;
        }
        .cart .tables{
            width: 100%;
            padding-bottom:20px;
        }
        .cart .tables table{
            width:50%;
            /* padding-left:10%; */
            display:block;
            margin:auto;
            padding-top:30px;
        }
        .cart .tables table td,th{
            padding-bottom:8px;
            padding-right:10px;
            text-align: center;
            font-family:'Segoe UI';
            font-size:medium;
            color:darkcyan;
        }
        .tables button{
            text-align: center;
            font-family:'Segoe UI';
            font-size:x-small;
            font-weight:bold;
            padding:5px;
            border:2px solid red;
            color:red;
            background-color:white;
        }
        .tables button:hover{
            cursor:pointer;
            background-color:red;
            color:white;
        }
        .cart .total{
            width: 100%;
            text-align: center;
        }
        .tables h2{
            /* padding-left:26%; */
            padding-top:30px;
            text-align: center;
            font-family:'Segoe UI';
            color:darkcyan;
        }
        .total{
            display:block;
            margin: auto;
            font-family:'Segoe UI';
            font-size:larger;
        }
        .total h2{
            color:darkcyan;
            padding-bottom:8px;
        }
        .total p{
            color:darkcyan;
            padding-bottom:10px;
            font-weight:bold;
        }
        .total button{
            font-family: 'Segoe UI';
            font-size:large;
            padding: 10px;
            border: 2px solid darkcyan;
            color:darkcyan;
            background-color:white;
            font-weight:bold;
        }
        .total button:hover{
            background-color:darkcyan;
            color:white;
            cursor:pointer;
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
                    echo"<li><a href='home.php?user=$user'>Home</a></li>
                    <li><a href='aboutus.php?user=$user'>About Us</a></li>
                    <li><a href='#footer'>Contact Us</a></li>
                    <li><a href='profile.php?user=$user'>Profile</a></li>
                    ";
                    ?>
                </ul>
            </div>
            <hr>
        </div>
    </div>
    <?php
    $conn=mysqli_connect("localhost","id18320683_root","LPL.7e-ffPf%PY8","id18320683_foodexpress");;
    if(!$conn){
        die("Couldn't connect to the database due to '".mysqli_connect_error());
    }
    ?>
    <div class="cart">
        <div class="tables">
        <h2>Your Order</h2>
                <table>
                    <tbody>
                        <tr>
                            <th>Food Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th></th>
                        </tr>
                        <?php
                        $sql="SELECT * FROM cart where User='$user'";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                            echo"
                            <form action='managecart.php' method='POST'>
                            <tr>
                            <td>{$row['Name']}</td>
                            <td>{$row['Price']}</td>
                            <td>{$row['Qty']}</td>
                            <input type='hidden' name='Menu_Id' value='{$row['M_Id']}'>
                            <input type='hidden' name='Rest_Id' value='{$row['Rest_Id']}'>
                            <input type='hidden' name='Name' value='{$row['Name']}'>
                            <input type='hidden' name='Price' value='{$row['Price']}'>
                            <input type='hidden' name='user' value='$user'>
                            <td><button type='Submit' name='Remove'>Remove</button></td>
                            </tr>
                            </form>
                            ";
                        }
                        ?>
                    </tbody>
                </table>
        </div>
        <div class="total">
            <h2>Total</h2>
            <?php
            $sql2="Select * from cart where User='$user'";
            $result=$conn->query($sql2);
            $total=0;
            while($row=$result->fetch_assoc()){
                $total=$total+($row['Price'])*($row['Qty']);
            }
            echo"<p>&#8377; $total</p>";
            ?>
            <?php
            echo"<form action='managecart.php' method='post'>
                <input type='hidden' name='total' value='$total'>
                <input type='hidden' name='user' value='$user'>
                <button type='submit' name='place_order'>Place Order</button>
            </form>"
            ;
            ?>
        </div>
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