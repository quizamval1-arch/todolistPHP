<?php
$host="localhost";
$user="root";
$password="";
$db="todolist";

$conn = new mysqli($host,$user,$password,$db);

if($conn->connect_error){
    die("error en la conexion". $connect_error);
}


?>