<?php

include "conexip.php";

$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$confirmcontraseña = $_POST['confirmContraseña'];

if($contraseña != $confirmcontraseña){
    echo "<script> alert ('las contraseñas no coinciden'); window.location='form2.php' </script>";
}else{
    echo "<script> alert ('las contraseñas coinciden'); window.location='form.php'; </script>";
}

$sql = "INSERT INTO user (email,contraseña) VALUES ('$email','$contraseña')";

if($conn->query($sql)==true){
    echo "se agrego el usuario";
}else{
    echo "error al registrar";
}


?>