<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="journa.css">
</head>

<body>
    <h1><b>your daily journal</b></h1>
    <div class="login-page">
        <div class="form">
            <h2> Register here: </h2>
            <form  method="post" class="l-form" action="registration.php">
            <?php include('errors.php'); ?>
                <p>
                    <input type="text" name="username" placeholder="username" required value="<?php echo $username; ?>"> 
                </p>
                
                <p>
                    <input type="password" name="password_1" placeholder="password" required >
                </p>
                <p>
                    <input type="password" name="password_2" placeholder=" confirm password" required >
                </p>
                <p>
                    <input type="email" name="email" placeholder="email" required value="<?php echo $email; ?>">
                </p>
               
                <button type="submit" name="reg_user">SUBMIT</button>
                <p>Already a user? <a href="login.php"><b>login</b></a></p>
            </form>
        </div>

    </div>



    <script>
        let em = document.getElementsByClassName('form')
        console.log(em)
    </script>

</body>

</html>