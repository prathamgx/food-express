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
        body{
            width: 100%;
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
            /* margin-top: 40px; */
            bottom:0;
            position:relative;
            width:100%;
            background-color: darkcyan;
        }
        footer h3{
            margin-bottom: 20px;
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
        .main1{
            /* display: grid;
            grid-template-rows: repeat(1,1fr);
            grid-template-columns: repeat(2,1fr); */
            display:flex;
            width:100%;
            background-image:url('../images/pizza.jpg');
            color:white;
        }
        .main1 .inin1{
            width:100%;
            margin:30px 0;
        }
        .main1 .inin1 .search{
            display:flex;
            flex-direction:column;
            justify-content:space-between;
        }
        .form{
            padding-top: 10px;
            display: flex;
            flex-direction: column;
        }
        form{
            width:100%;
            margin-top:10px;
            text-align:center;
        }
        input[type="text"]{
            border:1px solid darkcyan;
            padding: 5px 5px;
            /* width: 70%; */
            font-size: large;
        }
        button{
            border: 1px solid darkcyan;
            border-left: none;
            background-color: darkcyan;
            color: white;
            padding: 5px 5px;
            /* width: 10%; */
            font-size: large;
        }
        .nav{
            background-color: darkcyan;
            padding-top: 20px;
        }
        .nav .list ul{
            list-style: none;
            float: right;
            padding-top: 5px;
        }
        .list{
            display: none;
        }
        .nav .list ul li{
            display: inline;
        }
        .nav .list ul li a{
            text-decoration: none;
            color: white;
            font-family: 'Segoe UI';
            font-size: x-large;
            font-weight: bold;
            margin-right: 20px;
        }
        .search{
            padding-top: 2px;
        }
        .search p{
            
            font-family:'Oswald';
            font-size: large;
            font-weight: bolder;
            /* margin-bottom: 20px; */
            padding-left: 10px;
            float:right;
            /* height:25%; */
            /* padding-top:10px ; */
        }
        /* form{
            margin-top: 80px;
        } */
        input[type="text"]{
            text-align: center;
            font-weight: bold;
            width: 55%;
            padding: 10px;
            border:1px solid white;
        }
        button{
            width: 8%;
            padding: 10px;
            border:1px solid white;
        }
        button:hover{
            cursor:pointer;
        }
        .specs{
            background-color:lightgrey;
            display: grid;
            grid-template-rows: repeat(1,1fr);
            grid-template-columns: repeat(3,1fr);
            /* align-items:center;
            justify-content:center; */
            text-align:center;
        }
        .specs .spec{
            padding-top: 10px;
            padding-bottom: 20px;
        }
        .spec h2{
            font-family:'Oswald';
            text-align: center;
        }
        .spec p{
            font-size: large;
            font-family: 'Segoe UI';
            font-weight: bold;
        }
        /* .main1 .inin2{  
            width:50%;
            display:grid;
            grid-template-columns:repeat(2,1fr);
            column-gap:4px;
        } */
        /* .main1 .inin2 img{
            width:100%;
            margin:auto;
            display:block;
        }
        .spaced{
            margin-top: 80px;
        } */
    </style>
</head>
<body>
    <div class="maindiv">
        <div class="nav">
            <div class="list">
                <ul>
                    <li><a href="">Log in</a></li>
                    <li><a href="">Sign up</a></li>
                </ul>
            </div>
            <div class="banner">
                <p class="logo">Food Express</p>
            </div>
        </div>
        <div class="main1">
            <div class="inin1">
                <div class="search">
                    <p>Order food from your favourite restaurants.</p>
                    <form action="location.php" method="post">
                        <input type="text" name="location" id="location" placeholder="Enter Your City Name"><button type="submit"><i class="fa fa-search"></i></button>
                        <!-- <p id="response"></p>
                        <p id="wrongresp"></p> -->
                    </form>
                    <!-- <p id="response"></p> -->
                    <p class="spaced">Delivering In </p>
                    <p>Delhi Only, but we are looking forward to deliver in pan India</p>
                </div>
            </div>
            <!-- <div class="inin2">
                <img src="../images/one.jpg" alt="">
                <img src="../images/two.jpg" alt="">
                <img src="../images/three.jpg" alt=""> -->
                <!-- <img src="../images/four.jpg" alt=""> -->
            </div>
        </div>
    </div>
    <div class="specs">
        <div class="spec">
            <h2>Free Delivery</h2>
            <br>
            <p>Get your food without paying any delivery charges</p>
        </div>
        <div class="spec">
            <h2>No Minimum Order</h2>
            <br>
            <p>Order food without freely with no restrictions on order value</p>
        </div>
        <div class="spec">
            <h2>Lighting Fast Delivery</h2>
            <br>
            <p>Get your food within 30 minutes</p>
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