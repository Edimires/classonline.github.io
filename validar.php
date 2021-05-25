<!DOCTYPE html>
<html lang="es">
 <head>
    <title> VALIDACION Curso Virtual </title>
    <meta charset="UTF-8">
 </head>
 <body>  
    <h1>Redireccionando, espere por favor...</h1>
    <script>
        function r() {
            location.href="loginuser.php"
        }
        setTimeout("r()",3000);
    </script>
 </body>
</html>

<?php
$user = $_POST["username"];
$correo =$_POST["email"];
$passw = $_POST["password"];
$edad = $_POST["edad"];

$conex=mysqli_connect("sql3.freesqldatabase.com","sql3414195","sqba62dQPb","sql3414195",3306) or die("Error");
$conex->set_charset("utf8");
$insertar = "INSERT INTO usuarios(usuario,correo,contraseña,edad) VALUES
('$user','$correo','$passw','$edad')";

$verificar_correo = mysqli_query($conex, "SELECT * FROM usuarios WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo)>0){
    echo 'echo <script>
        alert("El Correo Ya Está Registrado");
        windows.history.go(-1);
        </script>';
        exit;
}

$resultado = mysqli_query($conex,$insertar);
if(!$resultado) {
    echo 'echo <script>
        alert("Error al Conectar");
        windows.history.go(-1);
        </script>';
}else {
    echo 'echo <script>
        alert("Usuario Registrado Exitosamente");
        windows.history.go(-1);
        </script>';
}

mysqli_close($conex);
?>