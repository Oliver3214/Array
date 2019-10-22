<?php
$servidor="localhost";
$usuario="root";
$contra="";
$db="veterinaria1";
$conexion=mysqli_connect($servidor, $usuario, $contra, $db);
if ($conexion) {
    $nombre=$_POST['t1'];
    $email=$_POST['t2'];
    $edad=$_POST['t3'];
    $sexo=$_POST['t4'];
    if (isset($_POST['bt1'])) {
        $a="INSERT INTO DATOS (nombre, email, edad, sexo) VALUES('".$nombre."','".$email."','".$edad."','".$sexo."')";
        $ba=mysqli_query($conexion,$a);
    }
}
?>