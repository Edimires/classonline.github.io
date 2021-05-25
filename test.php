<!DOCTYPE html>
<html lang="es">

<?php
         $name = $_GET["nombre"];
         
    ?>

<head>
    <link href="css/stilos.css" rel="stylesheet" type="text/css">
    <title>Test Evaluado - Hardware</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-with, initial-scale1">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<h2><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
</svg>Test dispositivos de almacenamiento</h2>

<nav class="nav">
  <a class="nav-link active" aria-current="page" href="loginuser.php">Cambiar de Usuario</a>
  <a class="nav-link" href="index.php">Salir</a>
</nav>

<hr>
<iframe name="content" style="display:none"></iframe>

<form method="POST" action="insertarNota.php" name="formulario" target="content">

<p>1. ¿ Qué tipo de almacenamiento nos provee un disco duro?</p>
<p></p><input type="radio" name="pregunta1" id="p11"> Almacenamiento permanente</p>
<p ><input type="radio" name="pregunta1" id="p12"> Almacenamiento temporal</p>
<p ><input type="radio" name="pregunta1" id="p13"> Almacenamiento por momentos</p>
<p ><input type="radio" name="pregunta1" id="p14"> Almacenamiento en linea</p>
 <hr>
<p>2.¿Cuál disco es  mas rapido para una computadora de escritorio?.</p>
<p ><input type="radio" name="pregunta2" id="p21"> Disco mecánico de 2.5 in.</p>
<p ><input type="radio" name="pregunta2" id="p22"> Disco mecánico de 3.5 in.</p>
<p ><input type="radio" name="pregunta2" id="p23"> Disco flexible de 3.5 in</p>
<p ><input type="radio" name="pregunta2" id="p24"> Disco flexible de 5 in.</p>
 <hr>
<p>3.¿Que tipo de conector tienen los discos de estado solido?</p>
<p ><input type="radio" name="pregunta3" id="p31"> Ide</p>
<p ><input type="radio" name="pregunta3" id="p32"> USB 1.0</p>
<p ><input type="radio" name="pregunta3" id="p33"> Sata </p>
<p ><input type="radio" name="pregunta3" id="p34"> Fireware</p>
 <hr>
<p>4.¿Cuál es la ventaja de un SSD a un HD?.</p>
<p ><input type="radio" name="pregunta4" id="p41"> Mayor rapidez en transferencia de datos.</p>
<p ><input type="radio" name="pregunta4" id="p42"> Resistencia a golpes</p>
<p ><input type="radio" name="pregunta4" id="p43"> Menor tamaño</p>
<p ><input type="radio" name="pregunta4" id="p44"> Todas las anteriores</p>
<hr>
<p>5.¿Cuál es el mejor Disco en la actualidad?.</p>
<p ><input type="radio" name="pregunta5" id="p51"> HD.</p>
<p ><input type="radio" name="pregunta5" id="p52"> SSD</p>
<p ><input type="radio" name="pregunta5" id="p53"> M2</p>
<p ><input type="radio" name="pregunta5" id="p54"> Todas las anteriores</p>
<hr>

<p id="resultado"><input name="results" id="results" type="submit" value=" R E S U L T A D O " href="javascript:validar()" onclick="validar(event);"/></p>

<label id="notaLabel"></label>

<input type="text" id="nota"  name="nota" style="visibility:hidden"/> 
<input type="text" id="nombre" name="nombre" value="<?php echo $name?>" style="display:none;" /> 
</form>

<div>
<button id="resetear" type="button" onclick="resetear()">Resetear</button> 
<button id="intento" type="button" onclick="intentos()" style="visibility:hidden;">Intentar de nuevo</button> 
<h5>Maximo de intentos 2</h5>
</div>
<!--JAVASCRIPT-->
<script>
    ///Accediendo al DOM
    let labelNota= document.getElementById('nota');
    let mostrarLabel=document.getElementById('notaLabel');
    let buttonReset= document.getElementById('resetear');
    let boton = document.getElementById('resultado');
    let intento = document.getElementById('intento');  
    let formulario = document.formulario;

     

    let contador = 0;
   
    labelNota.style.visibility = "hidden";
    
    //Funciona para resultado
    function resultado() {
        event.preventDefault();
       
        let p1, p2, p3, p4, p5, nota;
        
        //<!-- 1ª pregunta -->
        if (document.getElementById('p11').checked==true) {p1=2}
        else {p1=0}
        //<!-- 2ª pregunta -->
        if (document.getElementById('p22').checked==true) {p2=2}
        else {p2=0}
        //<!-- 3ª pregunta -->
        if (document.getElementById('p33').checked==true) {p3=2}
        else {p3=0}
        //<!-- 4ª pregunta -->
        if (document.getElementById('p44').checked==true) {p4=2}
        else {p4=0}
        //<!-- 5ª pregunta -->
        if (document.getElementById('p53').checked==true) {p5=2}
        else {p5=0}
        
             nota=p1+p2+p3+p4+p5; //Calculo de puntos
        
        if(contador==1){
            intento.style.visibility = "hidden";
        }else{intento.style.visibility = "visible";}
        
        

        labelNota.setAttribute("value",nota);        
        labelNota.style.display="none";
        
        
        boton.style.display = "none";
        

        buttonReset.style.display = "none";

          
        
                     
          

          let r = confirm("<?php echo $name?>"+" usted obtuvo " + nota/2 + " aciertos. Desea guardar su nota?");
          if (r == true || contador==1) {
            intento.style.visibility = "hidden";
            formulario.submit();//Enviando datos al POST de php

            } else {
                alert("Su calificacion no se guardó");    
            } 
         mostrarLabel.style.visibility = "visible";   
         mostrarLabel.innerHTML = "<?php echo $name ?> tu nota es " +  nota;
         
   }

   
   



    //Funcion para resetear test
    function resetear(){
        labelNota.innerHTML = "";
        //location.reload();
        let nombres = [p11,p12,p13,p14,p21]

        for(i=1;i<=5;i++) {
            for(j=1;j<5;j++){
                num1 = i.toString();
                num2 = j.toString();

                letra = num1+num2;
                console.log('p'+letra);               
                let radio = document.getElementById('p'+ letra);
                radio.checked = false;            
            }
            
        }
        window.scrollTo(0,0)
  
    }

    function validar(event){
        event.preventDefault();

        let cuestion1=document.querySelector('input[name="pregunta1"]:checked');
        let cuestion2=document.querySelector('input[name="pregunta2"]:checked');
        let cuestion3=document.querySelector('input[name="pregunta3"]:checked');
        let cuestion4=document.querySelector('input[name="pregunta4"]:checked');
        let cuestion5=document.querySelector('input[name="pregunta5"]:checked');

        if(cuestion1&&cuestion2&&cuestion3&&cuestion4&&cuestion5){
            
            resultado();//ejecutando resultado que calcula datos
        }
        else {alert("Usted debe seleccionar todos los elementos");}
    }


    function intentos(){
        contador = 1;
        boton.style.display = "block";
        intento.style.visibility = "hidden";
        labelNota.style.visibility = "hidden";
        resetear();

    }

    

    </script>
    
        
    
    
</body>
</html>