<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        html{
            background-image: url('../images/bg.jpg');
        }
        body{
            width:100%;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .container{
            background-color:whitesmoke;
            text-align: center;
            width: 50%;
            height:max-content;
            padding: 20px;
            box-shadow:2px 2px 5px 5px darkgrey;
        }
        h2{
            color:darkcyan;
            padding-top:5px;
            padding-bottom:10px;
            font-family:'Segoe UI';
        }
        p{
            padding-top:15px;
            font-size:large;
            color:darkcyan;
            font-weight:bold;
            font-family:Arial;
        }
        input[type="text"],input[type="password"]{
            font-size:large;
            border:2px solid darkcyan;
            text-align:center;
            color:darkcyan;
            padding:5px;
            border-radius:8px;
        }
        input[type="submit"]{
            font-size:medium;
            color:darkcyan;
            border:2px solid darkcyan;
            padding:5px;
            font-weight:bold;
        }
        input[type="submit"]:hover{
            background-color:darkcyan;
            color:white;
            cursor:pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="heading">
            <h2>Admin Login</h2>
        </div>
        <form action="adminlogincon.php" method="post">
            <p><input type="text" name="user" id="user" placeholder="Enter Your Username" required></p>
            <p><input type="password" name="pass" id="pass" placeholder="Enter Your Password" required></p>
            <p><input type="submit" value="Login"></p>
        </form>
    </div>
    
</body>
</html>