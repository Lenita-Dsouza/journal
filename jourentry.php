<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>



    
    <div class="tag">

    <p class="head">DAILY JOURNAL</p>
    <h2>your entries</h2>
        
    
        <div id="display">

        <p>  <b>  Work Entries:</b></p>
        
            <?php if(isset($_SESSION['username']))
        {
           
            // echo "displat page";
            displaydata($_SESSION['username'],'work');
        }
            ?>

        </div>


        <div id="personal">
            <p><b>Personal Entries:</b><p>

            <?php if(isset($_SESSION['username']))
        {
            displaydata($_SESSION['username'],'personal');}
            ?>
        </div>
    </div>
     <div id="logo"> 
    <a href="login.php"><b>LOGOUT</b></a>
     </div> 
</body>

</html>