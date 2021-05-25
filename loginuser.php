<!DOCTYPE html>
<html lang="es">
 <head>
    <title> Login: Enseñanza Hardware </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximuscale=1.0, user-scalable=no"/>

    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/stylelogin3.css"/>
 </head>
 <body>
 
      <form action="home.php" method="POST">   
      <div class="container">
	    <div class="row">
	    <div class="section"></div>
    <main>
    <center>
     <div class="container">
        <div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 10px 20px 0px 20px; border: 1px; margin-top: 100px; solid #EEE;">
        <div class="section"></div>
        <img src="img/usercheck.png" alt="" height="30%" width="30%">
        <div class="section"></div>

        <h3> Acceso Estudiantes </h3>
        <div class="section"><i class="mdi-alert-error red-text"></i></div>
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='username' id='username' required />
                <label for='username'> <i class="material-icons">sentiment_very_satisfied</i> Usuario</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col m12'>
                <input class='validate' type='password' name='password' id='password' required />
                <label for='password'> <i class="material-icons">lock</i> Contraseña</label>
              </div>
              <label style='float: right;'>
              <a><b style="color: #F5F5F5;">¿Olvido Su Contraseña?</b></a>
              </label>
            </div>
            <br/>
            <center>
              <div class='row'>
              <button class="btn waves-effect waves-light" type="submit" name="action">
              <i class="material-icons right"> <i class="material-icons">verified_user</i> ACCEDER</i>
              </button>
              <br>
              <br>
              <a href="registro.php">¿No tiene Cuenta? Registrese Aquí</a>
              </div>
            </center>
        </div>
       </div>
    </center>
    </main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
