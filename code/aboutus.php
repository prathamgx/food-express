<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
        .body{
            margin-top: 30px;
        }
        .body .img img{
            clip-path: circle(50% at 50% 50%);
            width:15%;
            display: block;
            margin: auto;
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
        .content{
         margin-top: 50px;

        }
        .content .desc p{
            font-size: large;
            font-weight: bold;
            font-family: cursive;
            padding-left :8px;
            padding-right: 8px;
            
        }
        .cards{
            padding-left :8px;
            padding-right: 8px;
            margin-top: 35px;
            display: grid;
            grid-template-rows: repeat(1,1fr);
            grid-template-columns: repeat(4,1fr);
            column-gap: 30px;
            
        }
        .cards .c{
            border: 2px solid darkcyan;
            text-align: center;
            padding: 10px;
        }
        .cards .c .img1{
            width:50%;
            margin:auto;
            display:block;
        }
        .cards .c .img1 img{
            width:100%;
        }
        .details span{
            font-size: large;
            font-weight: bold;
            font-family: 'Segoe UI';
        }
        .details .imgs{
            padding-top:4px;
        }
        .details .imgs a i{
            font-size:60px;
            color:darkcyan;
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
                    echo"
                    <li><a href='home.php?user=$user'>Home</a></li>
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
    <div class="body">
        <div class="img">
            <img src="../images/F.png" alt="####">
        </div>
        <div class="content">
            <div class="desc">
                <p>
                    Food Express is an online food delivering platform giving its customers to deliver their tasty and delicious food within 30 minutes from the time of your order at your doorstep because we understand and value the importance of the prestigious time of our customers. 

                
                </p>
                <br>
                <p>Food Express was founded in 2021.</p>
            </div>
            <div class="cards">
                <div class="c">
                    <div class="img1">
                        <img src="../images/samarth.png" alt="Profile pic">
                    </div>
                    <div class="details">
                        <span>Atul Goyal</span>
                        <br>
                        <span>B7</span>
                        <br>
                        <span>LATG10074</span>
                        <div class="imgs">
                            <a href="https://www.instagram.com/atul250603/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="c">
                    <div class="img1">
                        <img src="../images/samarth.png" alt="Profile pic">
                    </div>
                    <div class="details">
                        <span>Pratham Goswami</span>
                        <br>
                        <span>B7</span>
                        <br>
                        <span>LATG10073</span>
                        <div class="imgs">
                            <a href="https://www.instagram.com/prxtham.g/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="c">
                    <div class="img1">
                        <img src="../images/samarth.png" alt="Profile pic">
                    </div>
                    <div class="details">
                        <span>Priyansh Gupta</span>
                        <br>
                        <span>B7</span>
                        <br>
                        <span>20103198</span>
                        <div class="imgs">
                            <a href="https://www.instagram.com/priyanshgupta_03/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="c">
                    <div class="img1">
                        <img src="../images/samarth.png" alt="Profile pic">
                    </div>
                    <div class="details">
                        <span>Samarth Srivastva</span>
                        <br>
                        <span>B7</span>
                        <br>
                        <span>20103194</span>
                        <div class="imgs">
                            <a href="https://www.instagram.com/sriv.sam424/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
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