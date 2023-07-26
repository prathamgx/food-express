<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            box-sizing: border-box;
            
        }
        html{
            background-image: url(../images/bg.jpg);
        }
        body{
            width:99%;
            height:90vh;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .body{
            /* text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-top: 75px;
            margin-bottom: 75px; */
            width: 50%;
            background-color:whitesmoke;
            box-shadow: 2px 2px 5px 5px lightgrey;
            
        }
        .heading{
            font-family:'Segoe UI';
            font-weight: bold;
            color: darkcyan;
            text-align: center;
            padding-top: 10px;
            font-size: large;
        }
        .form1{
            text-align: center;
        }
        input[type="text"],input[type="password"]{
            margin: 10px 0;
            padding: 6px 6px;
            text-align: center;
            width: 50%;
            border-radius: 6px;
            border: 2px solid darkcyan;
        }
        .form1 a{
            margin: 10px 0;
            text-decoration: none;
            font-family: 'Lucida Sans';
            color:blue;
        }
        input[type="submit"]{
            margin: 10px 0;
            padding: 6px 6px;
            cursor: pointer;
            background-color:white;
            font-size: medium;
            border: 2px solid darkcyan;
            color: darkcyan;
        }
        input[type="submit"]:hover{
            background-color:darkcyan;
            color: white;
        }


    </style>
</head>
<body>
    <div class="body">
        <div class="heading">
            <h2>Login</h2>
        </div>
        <form action="loginconn.php" method="post"class="form1">
            <input type="text" name="uname" id="uname" required placeholder="Enter your username ...">
            <br>
            <input type="password" name="pass" id="pass"required placeholder="Enter your password ...">
            <p><a href="signup.php" class="forgot">New User? Register Here</a></p>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>