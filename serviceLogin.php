<?php
include "conexip.php";

$email=$_POST['email'];
$detalles=$_POST['detalles'];

$sql="SELECT * FROM user WHERE email= '$email' AND contraseña= '$contraseña'";

$result = $conn->query($sql);

if($result->num_rows < 1){
    echo "<script> alert ('usuario no encontado') window.location.href='form.php'</script>";
}else[
    header('location: dasboardList.php');
]

?>