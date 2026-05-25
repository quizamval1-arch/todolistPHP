<?php
include "conexip.php";

$tarea=$_POST['tarea'];
$detalles=$_POST['detalles'];

$sql="INSERT INTO tareas(nombre,detalles) VALUES ('$tarea', '$detalles')";

if($conn->query($sql) == true){
    echo "<script> alert ('Tarea guardada'); window.location.href='dashboardList.php'</script>";
}else{
    echo "<script> alert ('Tarea no guardada'); window.location.href='dashboardList.php'</script>";
}

?>