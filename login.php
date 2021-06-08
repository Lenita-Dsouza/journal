<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="journa.css">
</head>

<body>
<h1>welcome to daily journal</h1>
    <div class="login-page">
        <div class="form">
            login :
            <form method="post" class="l-form" action="login.php">
            <?php include('errors.php'); ?>
                <p>
                    <input type="text" name="username"  placeholder="username" required>
                </p>
                <p>
                    <input type="password" name="password" placeholder="password" required>
                </p>
               
                <button type="submit" name="login_user">LOGIN</button>
                <p>New user? <a href="registration.php"><b>Register Here</b></a></p>
               
            </form>
        </div>

    </div>



    <script>
        let em = document.getElementsByClassName('form')
        console.log(em)
    </script>

</body>

</html>