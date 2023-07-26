<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Payment Gateway</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            width:99vw;
            height:90vh;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .outerdiv{
            box-shadow: 2px 2px 10px 5px lightgray;
            width:45%;
        }
        .innerdiv1{
            text-align: center;
            padding: 10px 10px;
            color: darkcyan;
            font-family: fantasy;
            font-size: large;
        }
        hr{
            border: 2px solid darkcyan;
            width: 100%;
        }
        input[type='text'],input[type='password'],input[type='month']{
            text-align: center;
            font-family: cursive;
            font-weight: bold;
            font-size: large;
            margin-left: 20px;
            color: darkcyan;
        }
        input[type='submit']{
            text-align: center;
            font-size:  medium;
            font-weight: bold;
            font-family: cursive;
            padding: 8px;
            border: 2px solid darkcyan;
            background-color:white;
            color: darkcyan;
            letter-spacing: 2px;
        }
        input[type='text']:hover,input[type='password']:hover,input[type='month']:hover{
            box-shadow: 2px 2px 10px 3px darkcyan;
        }
        input[type='submit']:hover{
            background-color:darkcyan;
            color:white;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <?php
    $user=$_GET['user'];
    $total=$_GET['total'];
    ?>
    <div class='outerdiv'>
        <div class='innerdiv1'>
            <h1>Payment Details</h1>
            <hr>
            <?php
            echo"<form action='ordering.php' method='POST'>
                <p><input type='text' name='Name' id='Name' placeholder='Enter Your Name' required></p>
            
                <p><input type='text' name='Card_Number' id='Card_Number' placeholder='Enter Valid Card Number' required maxlength='16'></p>
                
                <p><input type='month' name='Exp_Date' id='Exp_Date'placeholder='MM/YY' required></p>
                
                <p><input type='password' name='CVV' id='CVV' placeholder='Enter Your CVV' required maxlength='3'></p>
                <input type='hidden' name='user' value='$user'>
                <input type='hidden' name='total' value='$total'>
                <input type='submit' value='Pay' name='submit'>
                
            </form>
            ";
            ?>
        </div>
    </div>
    
</body>
</html>