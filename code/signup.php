<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <style>
        *{
            box-sizing: border-box;
        }
        html{
            background-image: url('../images/bg.jpg');
        }
        body{
            width:99%;
            height:90vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .body{
            text-align: center;
            width: 50%;
            background-color: whitesmoke;
            box-shadow: 2px 2px 5px 5px lightgrey;
            
        }
        h1{
            font-family: 'Segoe UI';
            font-weight: bold;
            color: darkcyan;
            padding-top: 10px;
        }
        form{
            text-align:center;
            font-size:large;
        }
        input[type="text"],input[type="phone"],input[type="email"],input[type=password]{
            margin: 10px 0;
            padding: 6px 6px;
            border-radius: 6px;
            border: 2px solid darkcyan;
            width: 50%;
            text-align: center;
        }
        input[type="submit"]{
            margin: 10px 0;
            padding: 6px 6px;
            background-color:white;
            border: 2px solid darkcyan;
            font-size:medium;
            color: darkcyan;
            cursor: pointer;
            text-align: center;

        }
        input[type="submit"]:hover{
            background-color:darkcyan;
            color: white;
        }
    </style>
</head>
<body>
    <div class="body">
    <div>
        <h1>Sign up</h1>
    </div>
    <form class="form" action="signupconn.php" method="POST">
        <input type="text" name="name" id="name" required placeholder="Enter your name">
        <br>
        <input type="text" name="uname" id="uname" required placeholder="Enter your user name">
        <br>
        <input type="phone" name="phone_number" id="phone_number" required placeholder="Enter your phone number" maxlength="10">
        <br>
        <input type="email" name="email" id="email" required placeholder="Enter your email id">
        <br>
        <input type="text" name="loc" id="loc" required placeholder="Enter your city name">
        <br>
        <input type="password" name="password" id="password" required placeholder="Enter your password" maxlength="8">
        <br>
        <input type="submit" value="Sign up">
    </form>
    </div>
</body>
</html>