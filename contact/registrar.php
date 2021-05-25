<?php

include 'conexion.php'; //incluimos el php para la conexion

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$telefono = $_POST["telefono"];
$edad = $_POST["edad"];
$correo = $_POST["correo"];
$opcion = $_POST["opcion"];

 
//variable que contiene el sql
$insertar = "INSERT into contacto(nombres, apellidos, telefono, edad, correo, opcion)
            VALUES ('$nombres', '$apellidos','$telefono','$edad','$correo','$opcion')";

//variable para verificar 
$verificar_carnet = mysqli_query($conexion, "Select * from contacto WHERE telefono = '$telefono'");

if(mysqli_num_rows($verificar_carnet)>0){

    echo ' <script>
            alert("El telefono ya está registrado");
            windows.history.go(-1);
            </script>' ;
    exit;        
        } 

//variable para verificar correo
$verificar_correo = mysqli_query($conexion, "Select * from contacto WHERE correo = '$correo'");

if(mysqli_num_rows($verificar_correo)>0){
    echo ' <script>
            alert("El correo ya está registrado");
            windows.history.go(-1);
            </script>' ;
    exit;        
        } 
 
        
 //Resultados
 $resultado = mysqli_query($conexion,$insertar);

    if(!$resultado) {
       
        echo 'echo <script>
                alert("Error al conectar");
                windows.history.go(-1);
                </script>' ;
            } 
    else {
        echo 'echo <script>
            alert("Información registrada exitosamente");
            window.history.go(-1);
            </script>' ;
              
        }

    mysqli_close($conexion);
       

?>