<?php
include "conexip.php";
$id = $_POST;
$nombre =$_POST;
$detalles =$_POST;

$sql="UPDATE tareas SET nombre='$nombre', detalles='$detalles' WHERE id=$id";

if($conn->query($sql) == true){
    echo"<script> alert (Se ha podido actualizar el dato)</script>";
    header('location:dashboardList.php');
}else{
    echo"<script> alert (No se ha podido actualizar el dato)</script>";
    header('location:dashboardList.php');
}

?>