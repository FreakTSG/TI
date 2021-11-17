<!DOCTYPE html>
<?php

  $valor_temperatura = file_get_contents("api/files/temperatura/valor.txt");
  $hora_temperatura = file_get_contents("api/files/temperatura/hora.txt");
  $nome_temperatura = file_get_contents("api/files/temperatura/nome.txt");
  $valor_portao = file_get_contents("api/files/portao/valor.txt");
  $hora_portao = file_get_contents("api/files/portao/hora.txt");
  $nome_portao = file_get_contents("api/files/portao/nome.txt");
  $valor_humidade = file_get_contents("api/files/humidade/valor.txt");
  $hora_humidade = file_get_contents("api/files/humidade/hora.txt");
  $nome_humidade = file_get_contents("api/files/humidade/nome.txt");

  ?>

<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("refresh:5;url=index.php");
    die("Acesso restrito.");
  }
?>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@900&display=swap" rel="stylesheet">
    <title>Armazém</title>

    <meta http-equiv="refresh" content="5">
    <style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;

}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}


    * {
      box-sizing: border-box;
    }

    .bg-image {
      background-image: url("/images/bob.jpg");

      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      min-height: 1000px;
      max-width: 2000px;
      position: relative;
      z-index: -1;
    }






    .table-text {
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0, 0.4);
      z-index: 2;
      position: relative;
      color: Black;
      top: 70%;
      right: 25%;
      font-weight: bold;
      border: 3px solid #f1f1f1;
      position: absolute;
      width: 50%;
      padding: 20px;
      text-align: center;
    }
    .card {
  box-shadow: 0 16px 32px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  z-index: 3;



}
.card:last-child{
font-family: arial;
max-width: 3000px;
}
</style>
</head>
<body>


        <ul>
          <li><a class="active" href="dashboard.php">Home</a></li>
          <li style="float:right"><a href="logout.php">Logout</a></li>
        </ul>

      <div style="font-family: 'Noto Sans JP', sans-serif;text-align: center;">
        <h1>Armazém inteligente</h1>
        <p>Tecnologias de Internet - Engenharia Informática</p>
      </div>



<div class="bg-image">
  <div class="container">
    <div class="row">
        <div class="col-sm-4 ">
          <div class="card border-dark mb-3">
            <div class="card-header"><b><?php echo $nome_humidade ?>: <?php echo $valor_humidade ?>º</b></div>
            <div class="card-body"><img src="/images/humidity.png "height=100 class="img-responsive"></div>
            <div class="card-footer">Atualização: <?php echo $hora_humidade ?> - <a href="api/files/humidade/log.txt">Histórico</a></div>
          </div>
        </div>

        <div class="col-sm-4">
                <div class="card border-dark mb-3">
                    <div class="card-header"><b><?php echo $nome_temperatura ?>: <?php echo $valor_temperatura ?>º</b></div>
                    <div class="card-body"><img src="/images/celsius.png" height=100 class="img-responsive"></div>
                    <div class="card-footer">Atualização: <?php echo $hora_temperatura ?> - <a href="api/files/temperatura/log.txt">Histórico</a></div>
                </div>
            </div>

        <div class="col-sm-4 ">
            <div class="card border-dark mb-3">
                <div class="card-header"><b>Porta: Fechada</b></div>
                <div class="card-body"><img src="/images/gate.png" height=100 class="img-responsive"></div>
                <div class="card-footer">Atualização: 2020/03/01 14:31 - <a href="api/files/porta/log.txt">Histórico</a>  </div>
            </div>
        </div>
    </div>
  </div>




<div class="container">
    <div class="row">

     <div class="col-sm-6">
        <div class="card border-dark mb-3">
            <div class="card-header"><b>Humidade: 80%</b></div>
            <div class="card-body"><img src="/images/humidity.png" height=100 alt="Humidade imagem"></div>
            <div class="card-footer">Atualização: 2020/03/01 14:31 - <a href="api/files/Humidade/log.txt">Histórico</a></div>
        </div>
     </div>


     <div class="col-sm-6 ">
        <div class="card border-dark mb-3">
            <div class="card-header"><b>Humidade: 80%</b></div>
            <div class="card-body"><img src="/images/humidity.png" height=100 alt="Humidade imagem"></div>
            <div class="card-footer">Atualização: 2020/03/01 14:31 - <a href="api/files/Humidade/log.txt">Histórico</a></div>
        </div>
     </div>
    </div>
    </div>

      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>

      <div class="row">
          <div class="table-text col-sm-12">
              <div class="card">
                  <div class="card-header"><b>Tabela de Sensores</b></div>
                  <div class="card-body">
                      <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col">Tipo de Dispositivo IoT</th>
                              <th scope="col">Valor</th>
                              <th scope="col">Data de Atualização</th>
                              <th scope="col">Estado Alertas</th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td>upper text</td>
                                <td>template</td>
                                <td>texto de baixo</td>
                                <td><span class="badge badge-pill badge-success">sim</span></td>
                              </tr>
                              <tr>
                                <td><?php echo $nome_temperatura ?></td>
                                <td><?php echo $valor_temperatura ?>º</td>
                                <td><?php echo $hora_temperatura ?></td>
                                <td><span class="badge badge-pill badge-danger">Desativo</span></td>
                              </tr>
                              <tr>
                                <td><?php echo $nome_humidade ?></td>
                                <td><?php echo $valor_humidade ?>%</td>
                                <td><?php echo $hora_humidade ?></td>
                                <td><span class="badge badge-pill badge-warning">Warning! dn!</span></td>
                              </tr>
                              <tr>
                                <td><?php echo $nome_portao ?></td>
                                <td><?php echo $valor_portao ?></td>
                                <td><?php echo $hora_portao ?></td>
                                <td><span class="badge badge-pill badge-danger">ladrão detetado</span></td>
                              </tr>
                            </tbody>
                        </table>
                  </div>
              </div>

          </div>
      </div>
</div>






    <!--SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
