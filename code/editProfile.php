<?php
$id=$_POST['id'];
$user=$_GET['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Info</title>
    <style>
        *{
            box-sizing:border-box;
            margin: 0;
            padding: 0;
        }
        body{
            height:100vh;
            width:100%;
            display:flex;
            align-items:center;
            justify-content:center;
            background-image:url('../images/bg.jpg');
        }
        .form{
            background-color:whitesmoke;
            padding:20px;
            box-shadow: 2px 2px 5px 5px lightgrey;
        }
        form{
            padding:10px;
            text-align:center;
            font-size:large;
            font-weight: 600;
            font-family:'Segoe UI';
        }
        label{
            color:darkcyan;
        }
        label,input{
            margin-bottom:5px;
        }
        input{
            border-radius:5px;
            border:1px solid darkcyan;
            text-align:center;
            padding:3px;
            margin-left:5px;
        }
        h2{
            text-align:center;
            font-family:'Segoe UI';
            margin-bottom:6px;
            color:darkcyan;
        }
        hr{
            border:2px solid darkcyan;
        }
        input[type="submit"]{
            margin-top:8px;
            padding:5px;
            font-size:medium;
            font-weight:bold;
            border:2px solid darkcyan;
            border-radius:0;
            background-color:darkcyan;
            color:white;
            cursor:pointer;
        }
        input[type="submit"]:hover{
            background-color:white;
            color:darkcyan;  
        }
    </style>
</head>
<body>
    <div class="form">
        <h2>Edit Your Profile</h2>
        <hr>
        <form action="editProfileHelper.php?user=<?php echo$user; ?>" method="POST">
            <label for="name">Enter Your Name</label>
            <input type="text" name="name" id="name" required>
            <br>
            <label for="email">Enter Your Email</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label for="phone">Enter Your Phone Number</label>
            <input type="phone"name="phone" id="phone" required>
            <br>
            <label for="city">Enter Your City</label>
            <input type="text" name="city" id="city" required>
            <br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>