<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>rating</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding:0;
        }
        .container{
            width: 100%;
            height: 100vh;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        form{
            width: 60%;
            padding: 15px;
            text-align: center;
            display: inline-block;
            border: 2px solid darkcyan;
        }
        label{
            font-size:40px;
        }
        textarea{
            text-align: center;
            font-size:large;
            margin-top:30px;
            border: 2px solid darkcyan;
            color:darkcyan;
            font-weight:bold;
        }
        input[type='submit']{
            color:darkcyan;
            border:2px solid darkcyan;
            font-size:medium;
            font-weight:bold;
            text-align: center;
            margin-top:10px;
            padding:5px;
            background-color:white;
        }
        input[type='submit']:hover{
            background-color:darkcyan;
            color:white;
            cursor: pointer;
        }
        p{
            color:darkcyan;
            font-family:'Segoe UI';
            padding-bottom:10px;
            font-size:30px;
            font-weight:bolder;
        }
    </style>
</head>
<body>
    <?php
    $user=$_GET['user'];
    ?>
    <div class='container'>
        <?php
        echo"<form action='ratinghelper.php' method='post'>
            <p>Rating</p>
            <label><input type='radio' name='rating' id='rating' value='1'>&#128542;</label>
            <label><input type='radio' name='rating' id='rating' value='2'>&#128543;</label>
            <label><input type='radio' name='rating' id='rating' value='3'>&#128578;</label>
            <label><input type='radio' name='rating' id='rating' value='4'>&#128522;</label>
            <label><input type='radio' name='rating' id='rating' value='5'>&#128525;</label>
            <br>
            <textarea name='review' id='review' cols='30' rows='5' placeholder='Enter Your Feedback'></textarea>
            <br>
            <input type='hidden' name='uname' value='$user'>
            <input type='submit' value='Submit'>
        </form>
        ";
        ?>
    </div>
</body>
</html>