<!DOCTYPE html>
<?php
    $username_normal="user";
    $password_normal="password";
    $username_admin="admin";
    $password_admin="admin";

    session_start();
?>
<html lang="en">
<head>
        <title>Página de Login

        </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <link rel="stylesheet" href="loginfundo.css">

        <style>
            body {
                  background-image: url("/images/armazem_login.jpeg");
                  background-repeat: no-repeat;
                  background-position: right top;
                  background-attachment: fixed;
                  background-attachment: scroll;
                  background-size: cover;
                  min-height: 1000px;
                  background-position: center;

                 }
        </style>

    </head>
    <body>

        <div>
          <?php
               if(isset($_POST['username']) && isset($_POST['password'])){
                   if(($_POST['username'] == $username_normal || $_POST['username']==$username_admin) && ($_POST['password']==$password_normal || $_POST['password']==$password_admin)){
                       $_SESSION["username"]=$_POST['username'];
                       echo '
                   <div class="alert alert-success">
                       <button type="button" class="close" data-dismiss="alert">&times;</button>
                       Autenticação bem sucedida! Redirecionando...
                   </div>';
                   header("refresh:2;url=dashboard.php");
                   }
                   else{
                       echo '
                       <div class="alert alert-danger">
                           <button type="button" class="close" data-dismiss="alert">&times;</button>
                           Autenticação falhada!
                       </div>';
                   }

               }
           ?>
            <div class="row">

                    <form  method="POST" class="container">

                        <div>
                        <label for="usr"><b>Username</b></label>
                        <input type="text" class="form-control" id="usr" name="username" placeholder="Escreva o utilizador" required>
                        </div>
                        <div>
                        <label for="pwd"><b>Password</b></label>
                        <input type="password" class="form-control" id="pwd" name="password" placeholder="Escreva uma password" required>
                        </div>
                        <button type="submit" class="btn">Login</button>
                    </form>

            </div>


        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!--SCRIPTS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>
