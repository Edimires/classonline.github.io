<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Plataforma Educativa</title>
    <link rel="stylesheet" href="css/stylehome1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-with, initial-scale1">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
  <body>

  <?php
$usu = $_POST["username"];
$psw = $_POST["password"];
$conex=mysqli_connect("sql3.freesqldatabase.com","sql3414195","sqba62dQPb","sql3414195",3306) or die("Error");
$conex->set_charset("utf8");
$consulta="SELECT * FROM usuarios WHERE usuario='$usu' and contraseña='$psw'";
$sesion=mysqli_query($conex,$consulta);

$filas=mysqli_fetch_array($sesion);
if ($filas['id_cargo']==1)
    {
        header("location:homeadmin.php");
    }else
    if ($filas>0)
    {
    echo "¡INICIO DE SESIÓN CORRECTO! BIENVENIDO A SU SISTEMA!";
    }    
    else{
        header("location:fallido.php");
    }
mysqli_close($conex);
?>

  <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16"><path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/></svg>
          <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm6 4a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 7a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7z"/>
            </svg> <a class="navbar-brand" target="_blank" href="index.php">Inicio de Curso Virtual - Dispositivos de Almacenamiento</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" target="_blank" href="./#about"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                  </svg>  Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" target="_blank" href="./#services"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-share-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
                  </svg> Enlaces de Interés </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                    </svg> Bienvenid@:
                    <?php 
                    $usu = $_POST["username"];
                    echo $usu; ?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="#">INFORMACIÓN</a>
                    <a class="dropdown-item"  href="#">OTROS</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php">CERRAR SESIÓN</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">*</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>  
        
          
    <center>
        <div class="card" style="width: 45rem;">
        <iframe id="video" width="635" height="400" 
        src="https://www.youtube.com/embed/3VNIltD_V1w" 
        title="HDD vs SSD vs M2" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
        </iframe>
            <div class="card-body">
              <h5 class="card-title">Comparativa</h5>
              <p class="card-text">Vamos a explicarte cuales son las diferencias entre discos duros HDD o SSD. Para eso, vamos a empezar describiéndote de una manera sencilla y fácil de entender cuáles son los rasgos generales de los discos duros, tanto los mecánicos o HDD como de los de estado sólido o SSD. Así, podrás aprender a reconocerlos y diferenciarlos sin problemas.</p>
              <p class="card-text">Una vez leída y comprendida la información de este sitio, si te consideras preparado para realizar el test, haz click en el boton de aquí abajo.</p>
                <div id="makeTest">
                  <a target="_blank" href="./test.php?nombre=<?php echo $usu; ?>"><button id="botoncillo" > <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                    <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg>Realizar Prueba </button></a></div>
                </div>  
            </div>
          </div>

        <div class="card mb-3">
          <img src="assets/img/almacenamiento.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Breve Reseña de los Discos Duros</h5>
             <p class="card-text"> Disco duro o HDD (Hard Drive Disk)
            Los discos duros, también conocidos como HDD, son un componente informático que sirve para almacenar de forma permanente tus datos. Esto quiere decir, que los datos no se borran cuando se apaga la unidad como pasa en los almacenados por la memoria RAM. La primera empresa en comercializarlos fue IBM en 1956.
            Están compuestos de piezas mecánicas, de ahí que a veces se le llame discos duros mecánicos, y utilizan el magnetismo para grabar tus datos y archivos. Se compone de uno o varios discos rígidos unidos por un mismo eje y que giran a gran velocidad dentro de una caja metálica. En cada plato y en cada una de sus caras, un cabezal de lectura/escritura lee o graba tus datos sobre los discos.
            Cuanto más finos sean los discos mejor será la grabación, y cuanto más rápido giran a mayor velocidad se transmiten los datos, tanto a la hora de leerlos como al escribirlos. Por lo general, la velocidad de los discos duros suele ser de 5400 o 7200 RPM (revoluciones por minuto), aunque en algunos discos basados en servidores pueden llegar a hasta 15.000 RPM.
             </p>
             <p>Un disco duro es un dispositivo de almacenamiento necesario para conservar tus archivos y datos en el largo plazo. Siempre que guardas un archivo en la computadora, lo guardas en el disco duro de la computadora. Un disco duro se parece a un archivador para tus archivos digitales. </p>
              <p class="card-text"><small class="text-muted">Última actualización hace 1 hora</small></p>
          </div>
        </div>


        <div class="card">
          <h5 class="card-header">¿Qué disco duro elegir?</h5>
          <div class="card-body">
          <h5 class="card-title">fuente: Nate Gentile</h5>
          <iframe id="video2" width="500" height="400" 
          src="https://youtube.com/embed/ANVvxlv6DV4" 
          title="DISCOS DUROS" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen>
          </iframe>
          <p class="card-text">Si sueles descargar muchos contenidos de Internet y necesitas grandes cantidades de almacenamiento, o si cuentas con un presupuesto bajo, lo recomendado es que sigas recurriendo a los HDD. También son un buen recurso para los discos duros externos, donde suele primar la capacidad de almacenamiento por encima de la velocidad.
          En cambio los SSD son recomendables si quieres tener un ordenador mucho más rápido. De hecho, su velocidad puede hacer que un PC con algunos años vaya mucho más rápido sin tener que invertir en otros componentes. También es recomendado si sueles trabajar en la edición de contenidos multimedia o eres un amante de los videojuegos, ya que los procesos de carga se acelerarán gracias a ellos.
          </p>
          <p> En la mayoría de los casos sin embargo lo recomendable es combinar ambos tipos de disco duro. En una torre doméstica, por ejemplo, puedes utilizar un SSD en el disco C: para instalar allí el sistema operativo y que vaya todo más rápido. Lo acompañas de un HDD como disco secundario y tendrás una unidad perfecta en la que almacenar todos los archivos pesados que tengas en el ordenador. </p>
        </div>
    </div>
    </center>     
        
  <footer>      
    <div class="footer-copyright text-center py-3">©Administradores: Francisco Hernández - Orlando Herrera | 
      <a href= "#"> hg201802@upes.edu.sv</a>
    </div>
  </footer>
  </body>
</html>