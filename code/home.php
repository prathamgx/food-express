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
        .rest{
            margin-top: 50px;
            display: grid;
            grid-template-columns: repeat(3,1fr);
            row-gap: 40px;
            column-gap: 20px;
            padding-left: 30px;
            padding-right: 30px;
        }
        .in1{
            width: 80%;
            display: flex;
            flex-direction: column;
            padding: 10px;
        }
        .in1:hover{
            border: 1px solid darkcyan;
            box-shadow: 2px 2px 20px 2px darkcyan;
        }
        .in1 .img img{
            width: 80%;
            display: block;
            margin: auto;
        }
        .in1 .det{
            padding-top: 6px;
        }
        .in1 .det,.exp{
            text-align: center;
        }
        .in1 .det span{
            color: darkcyan;
            font-weight: bold;
            font-family:sans-serif;
        }
        .in1 .det .big{
            font-size: large;
            font-weight: bolder;
        }
        
        .exp{
            border: 1px solid darkcyan;
            background-color: darkcyan;
            padding: 6px;
            width: 25%;
            margin:auto;
            display:block;
            margin-top: 8px;
        }
        .in1 .exp a{
            text-align:center;
            text-decoration: none;
            color: white;
            font-size: medium;
            font-weight: bolder;
            font-family: 'Segoe UI';
        }
        .heading{
            margin-top: 10px;
            padding-left: 12px;
            font-family: 'Birthstone Bounce', cursive;
            font-size: 55px;
            color: darkcyan;
        }
        .light{
            border: 1px solid darkcyan;
        }
        #restaurants{
            margin-top: 40px;
        }
        .Banner{
            margin-top: 50px;
            width: 100%;
        }
        .Banner .bimg{
            width:60%;
            margin:auto;
            display:block;
            height: 60vh;

        }
        /* footer .social a img{
            width: 80px;
            height: 50px;
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

    </style>
</head>
<body>
    <?php
    $user=$_GET['user'];
    $conn=mysqli_connect("localhost","id18320683_root","LPL.7e-ffPf%PY8","id18320683_foodexpress");;
    if(!$conn){
        die("Couldn't connect to the database due to ".mysqli_connect_error());
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
                    echo"<li><a href='home.php?user=$user'>Home</a></li>
                    <li><a href='aboutus.php?user=$user'>About Us</a></li>
                    <li><a href='#footer'>Contact Us</a></li>
                    <li id='cart'><a href='mycart.php?user=$user'>My Cart($count)</a></li>
                    <li><a href='profile.php?user=$user'>Profile</a></li>
                    <li><a href='index.php'>Logout</a></li>
                    ";
                    ?>
                </ul>
            </div>
            <hr>
        </div>
        <div class="Banner">    
            <img src="../images/banner1.png" alt="Banner" class="bimg">
        </div>
    </div>
    <br>
    <?php
    $conn=mysqli_connect("localhost","id18320683_root","LPL.7e-ffPf%PY8","id18320683_foodexpress");;
    if(!$conn){
        die("Couldn't connect to the database due to ".mysqli_connect_error());
    }
    else{
        $sql="SELECT distinct City from customer where User_Name='$user'";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
                    $city=$row['City'];
                }
    }
    ?>
    <div id="restaurants">
        <h1 class="heading">Restaurants</h1>
        <hr class="light">
        <div class="rest">
        <?php 
                $sql1="SELECT * from site_info where Address='$city'";
                $result1=$conn->query($sql1);
                while($row=$result1->fetch_assoc()){
                    echo"
                    <div class='in1'>
                        <div class='img'>
                            <img src='../images/{$row['Img']}.jpg' alt='Restaurant'>
                        </div>
                        <div class='det'>
                            <span class='big'>{$row['Name']}</span>
                        </div>
                        <div class='exp'>
                            <a href='res1.php?user=$user&id={$row['Id']}'>Explore</a>
                        </div>
                    </div>
                    ";
                }
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