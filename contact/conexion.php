<?php
$conexion = mysqli_connect("sql3.freesqldatabase.com","sql3414195","sqba62dQPb","sql3414195",3306); //variable que guarda los valores para conectarse

if(!$conexion){
    echo 'echo <sript>
            alert("Error al conectar a la base de datos");
            windows.history.go(-1);
            </script>' ;
        } 
else {
    echo 'echo <script>
        alert("Enviando Solicitud");
        window.history.go(-1);
        </script>' ;
          
}
?>