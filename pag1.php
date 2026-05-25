<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cont{
            display: flex;
            flex-direction: column;
            align-items: center;        
        }
        h1{
            color: blue;
        }
        .botones{
            display: flex;
            gap: 2rem;
            padding-block: 3rem;
        }
        .botones button{
            padding: 1rem;
            padding-inline: 3rem;
            font-size: larger;
            border: 0px;
            border-radius: 1rem;  
        }
        .boton1{
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <div class="cont">
    <div>
        <img src="img1.png" alt="">
    </div>
    <div>
        <h1>Discover Your Dream Job here</h1>
    </div>
    <div>
        <p>Explore all the existing job roles based on your interest and study major</p>
    </div>
    <div class="botones">
        <a href="form.php"><button class="boton1">Login</button></a>
        <a href="form2.php"><button class="boton2">Register</button></a>
    </div>
</div>
</body>
</html>