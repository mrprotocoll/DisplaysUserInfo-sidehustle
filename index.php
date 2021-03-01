<?php
    $submitted = false;
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $submitted = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        .form{
            width: 50%;
            padding: 30px;
            margin:0 auto;
            text-align: center;
        }
        .input{
            width: 100%;
            height: 30px;
            margin-bottom: 10px;
        }
        h1{
            text-align: center;
            color: gray;
        }
        .submit{
            width: 200px;
            background-color: gray;
            color: white;
            height: 40px;
            margin-top: 10px;
        }
        span{
            font-weight: bold;
        }

        .out{
            border: 1px solid gray;
            margin:20px 0;
            text-align: left;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="form">
        <h1>Registration Form</h1>

        <?php if($submitted){ ?>
            <div class="out">
                <p><span>Name: </span> <?php echo $name?></p>
                <p><span>Email: </span> <?php echo $email?></p>
                <p><span>Telephone: </span> <?php echo $phone?></p>
                <p><span>Address: </span> <?php echo $address?></p>
            </div>
        <?php } ?>

        <form action="index.php" method="post">
            <input type="text" name="name" placeholder="Fullname" class="input">
            <input type="email" name="email" placeholder="Email Address" class="input">
            <input type="text" name="phone" placeholder="Telephone Number" class="input">
            <input type="text" name="address" placeholder="Address" class="input">
            <input type="submit" name="submit" class="submit" value="Submit">
        </form>
    </div>
</body>
</html>