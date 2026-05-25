<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenidos</h1>
    <form action="serviceCreateTask.php" method="POST">
        <input type="text" name="tarea" placeholder="Ingresar tarea">
        <textarea name="detalles" placeholder="Ingresar detalles" rows='3'cols='50'></textarea>
        <button>Agregar</button>
    </form>
    <div>
        <ul>
            <?php
                include "conexip.php";

                $sql= "SELECT * FROM tareas";

                $result= $conn->query($sql);

                while ($row = $result->fetch_assoc()){
                    echo "<li>".$row['nombre'].": ".$row['detalles']."<a href='serviceDeleteTask.php?id=".$row['id']."'>Eliminar</a>" ." ". "<a href='serviceUpdateTask.php?id=".$row['id']."'>Editar</a>" ."</li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>