<?php
function conectarBD()
{
$host="ec2-54-243-213-188.compute-1.amazonaws.com";
$port="5432";
$dbname="de82lj354bvov";
$user="fwjeedcrgwrewn";
$password="99d7304445daf40e77aa0081ca823e3e962a6599e3ae372d9eb12fb1c58605e5";
$db=pg_connect("$host $port $dbname $user $password");

if(!$db)
{
  echo 'Error:'.pg_last_error;
}
else
{
 echo '<h3>Conexion exitosa </h3>';
 return $bd; 
}
}
?>
<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link rel="icon" href="img/manzana.ico">

    <title>La huerta verde</title>
    
</head>
<body>
    <style type="text/css">
    body{
        background-image: url(img/fondo.jpg);
        background-size:cover;
        background-attachment: fixed; 
    }
    </style>
      <div class="section">
  <main>
    <center> 
      <br>

      <div  class="container">
        <div class="z-depth-1 white row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid rgb(255, 255, 255);">
               <b><h3 class="black-text">LA HUERTA VERDE</h3></b> 
            <div class="center">
                    <i class="large material-icons">person_outline</i>
                    
            </div>
            <div class="row">
                <h5>Inicia sesión con tu ddddd cuenta</h5>
            </div>
          <form class="col s12" method="post">
            <div class="row">
              <div class="col s12">
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input class="validate" type="email" name="email" id="email" />
                <label for="email"><i class="material-icons">person</i>Ingresa tu e-mail</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input class="validate" type="password" name="password" id="password" />
                <label for="password"><i class="material-icons">https</i>Ingresa tu contraseña</label>
              </div>
              <label style="float: left;">
                <a class="blue-text" href="admin.html"><b>Inicia sesión como administrador</b></a>
              </label>
              <br>
              <label style="float: right;">
                <a class="pink-text" href="#!"><b>¿Olvidaste tu contraseña?</b></a>
              </label>
              
              
              
            </div>

            

           
                <div class=""align="center">
                        <a href="home.html" class="waves-effect waves-light btn">ACCEDER</a>
                </div>
                <br>
                          
            
            
          </form>
        </div>
      </div>
      <a class="white-text" href="form.html">Crea una cuenta</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
</div>
<br>
<br>
<br>
<br>

<footer class="page-footer green accent-2">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="black-text">La huerta verde</h5>
              <p class="black-text text-lighten-4">Del campo a la mesa.</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="black-text">¿Quiénes somos?</h5>
              <ul>
                <li><a href="home.html" class="black-text text-lighten-3" href="#!">Acerca de La huerta verde</a></li>
                <li><a class="black-text text-lighten-3" href="faq.html">Preguntas frecuentes</a></li>
                <li><a class="black-text text-lighten-3" href="#!">Llámanos</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="black-text container">
          © 2018 Copyright La huerta verde
          
          </div>
        </div>
      </footer>
                
      <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/bin/materialize.js"></script>
     
</body>
</html> 

        