<!DOCTYPE html>
<html lang="es">
 <head>
    <title> REGISTRO Curso Virtual </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximuscale=1.0, user-scalable=no"/>

    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="#"/>
 </head>
 <body>  

<form action="validar.php" method="POST">   
<div class="container col s8">
  <div class="row">
    <nav>
      <div class="nav-wrapper">
        <div class="col s8">
          <h3 class="brand-logo col s8">Registro de Datos</h3>
        </div>
      </div>
    </nav>

  </div>
  <form class="col s14">
    <div class="row">
      <div class="input-field hoverable col s6">
        <i class="material-icons prefix">account_circle</i>
        <input id="username" type="text" name="username" class="validate">
        <label for="username">Nombre</label>
      </div>
      <div class="input-field hoverable col s6">
        <i class="material-icons prefix">vpn_key</i>
        <input id="password" type="password" name="password" class="validate">
        <label for="password">Contraseña</label>
      </div>
    </div>
    <div class="row">
    <div class="input-field hoverable col s6">
        <i class="material-icons prefix">email</i>
        <input id="email" type="email" name="email" class="validate">
        <label for="email">Correo Electrónico</label>
      </div>
      <div class="input-field hoverable col s6">
        <i class="material-icons prefix">event_available</i>
        <input id="edad" type="text" name="edad" class="validate">
        <label for="edad">Edad</label>
      </div>
    </div>
    <button class="waves-effect waves-light btn right hoverable" type="submit" name="action">
    <i class="large material-icons right">done</i>Registrarse</button>
  </form>
</div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>