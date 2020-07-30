<!DOCTYPE html>
<html lang="PT">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sorte e Conhecimento</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/styles.css"/>
  </head>

  <body class="pt-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Sorte e Conhecimentooooooo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="play.php">Jogar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="scoreboard.php">Scoreboard</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="registar.php">Registar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br>
    <form action="criarUtilizador.php" method="post">
      <div class="container">
        <label for="user"><b>Nickname:</b></label>
        <input type="text" placeholder="Coloque o Nickname" name="user" required>

        <label for="pass"><b>Password:</b></label>
        <input type="password" placeholder="Coloque a Password" name="pass" required>

        <label for="nome"><b>Nome:</b></label>
        <input type="text" placeholder="Coloque o Nome" name="nome" required>

        <label for="pais"><b>País:</b></label>
        <input type="text" placeholder="Coloque o País" name="pais" required>

        <label for="idade"><b>Idade:</b></label>
        <input type="number" placeholder="Coloque a Idade" name="idade" required>

        <button type="submit">Registo</button>
      </div>
    </form>
  </body>
  <footer class="py-2 bg-dark fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; DiogoCoelho Nº19948 & GonçaloGuimarães Nº20456 2020 ESTG IPVC</p>
    </div>
  </footer>
</html>
