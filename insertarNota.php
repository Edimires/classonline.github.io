<?php
       
        $nota = $_POST['nota'];        
        $nombre = $_POST['nombre'];           
        
        


        

        $conex=mysqli_connect("sql3.freesqldatabase.com","sql3414195","sqba62dQPb","sql3414195",3306) or die("Error");
        $conex->set_charset("utf8");
        $insertar = "INSERT INTO notas(usuario,nota) VALUES
        ('$nombre','$nota')";


$verificar_nota = mysqli_query($conex, "SELECT * FROM notas WHERE usuario = '$nombre'");
if (mysqli_num_rows($verificar_nota)>0){
    echo 'echo <script>
        alert("La nota ya está registrada");
        //windows.history.go(-1);
        </script>';
        exit;
}
       
        $resultado = mysqli_query($conex,$insertar);
        if(!$resultado) {
            echo 'echo <script>
                alert("Error al Conectar");
                //window.history.go(-1);
                </script>';
        }else {
            echo 'echo <script>
                alert("Nota agregada Exitosamente");
                //window.history.go(-1);
                </script>';
        }

        mysqli_close($conex);
        ?>
      