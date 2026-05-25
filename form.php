<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *{
            font-family:"Poppins", sans-serif;
        }
        main{
            padding: 5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 3rem;
        }
        .cont-1{
            text-align: center;
        }
        .cont-1 h2{
            color: blue;
            font-size: 2rem;
        }
        .cont-1 p{
            font-size: 1.5rem;
            font-weight: bold
        }
        .cont-2{
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .barra1{
            background-color: lightgrey;
            border-radius: 0.5rem;
            border: 0px;
            padding: 1rem;
            width: 25rem;
        }  

        .p{
            color: blue;
            text-align: end;
            font-weight: bold;
        }
        .p2{
            color: blue;
            text-align: center;
            font-weight: bold;
        }
        .options{
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4rem;
            font-size: large;
        }
        .options button{
            border: 0px;
            border-radius: 1rem;
            padding: 1rem;
            width: 25rem;
            background-color: blue;
            color: white;
            font-size: large;
        }
        .options a{
            text-decoration: none;
            color: black;
        }
        .cont-3{
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
        .cont-3 a{
            background-color:lightgrey;
            padding: 1rem;
            border-radius: 1rem;
        }


    </style>

</head>
<body>
    <main>
        <div class="cont-1">
            <h2>Login here</h2>
            <p>Welcome back you’ve been missed!</p>
        </div>
        <form action="dashboardList.php" method="POST" class="cont-2">
            <input class="barra1" type="email" name="email" placeholder="Email" required>
            <input class="barra1" type="password" name="contraseña" placeholder="Contraseña" required>
            <p class="p">Forgot your password?</p>
            <div class="options">
                <button type="submit" class="boton1">Sign in</button>
                <a href="form2.php">Create new account</a>
            </div>
            <p class="p2">-OR-</p>
            <div class="cont-3">
                <a href="#"><img src="Frame 1.png" alt="google"></a>
                <a href="#"><img src="ic_sharp-facebook.png" alt="facebook"></a>
                <a href=""><img src="Frame 1 (1).png" alt="apple"></a>
            </div>
        </form>
    </main>
</body>
</html>