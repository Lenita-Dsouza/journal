<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Document</title>
     
    <style>
        html {
            height: 100%;
        }

        body {
            background-image: url('dan-cristian-padure-3bb9RUp86M0-unsplash.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover; 
           margin:0px;
            background-color: aqua;
            height: 100%;
            width: 100%;
        }
    .form{
    position:relative;
    display:inline;
    background-color: rgb(212, 33, 33);
    /* width:300px; */
    max-width: 400px;
    /* padding:40px; */
    z-index: 1;
    margin:0 auto 100px;
    align-content: center;
    text-align: center;
 font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;


}

        textarea{
            background-color: rgb(217, 245, 245);
            margin-left:100px ;
            margin-top: 60px;
            opacity:0.6;
        }
        textarea::placeholder{
            color:black;
        }
        button{
            background-color: rgb(217, 245, 245);;
           size: 2%;
           color:black;
           border:2px solid black;
          padding:1%;
          font-size: 14;;

}
a
{
    color:black;
    background-color: rgb(217, 245, 245);;
    margin-left:700px;
    padding:0%;
    border:2px solid black;
    margin-bottom:100px;
}
    </style>
</head>


<body>


    <div class="form">
        <h2 class="text-centre">daily journal</h2>
        <form method="post" class="l-form" action="journal.php">

            
            <label for="personal"></label>
            <textarea cols="50" rows="30" name="personal" class="form-control"
                placeholder=" enter your personal thoughts here" id="personal"></textarea>

           

         
            <label for="work"></label>
            <textarea cols="50" rows="30" name="work" class="form-control2"
                placeholder=" enter yoour work  related thoughts here" id="work"></textarea>
           
            
            <p>
            <button type="submit" class="btn" name="SAVE"> SAVE</button>
        </p>

        </form>
       
        </div>
        <a href="login.php"><b>LOGOUT</b></a>
    
</body>

</html>