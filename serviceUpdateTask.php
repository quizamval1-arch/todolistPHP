<?php
include "conexip.php";

$id= $_GET['id'];

$sql="SELECT * FROM tareas WHERE id=$id";

$result =$conn->query($sql);
$row= $result-> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" placeholder="Ingresar tarea" value=" <?php echo $row['nombre'] ?>" name="nombreActulizar">
        <input type="text" placeholder="Ingresar detalles" value=" <?php echo $row['detalles'] ?>" name="detallesActualizar">
        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
        <button>Actualizar</button>
    </form>
</body>
</html>