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
            <li class="nav-item active">
              <a class="nav-link" href="play.php">Jogar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="scoreboard.php">Scoreboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registar.php">Registar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card w-100">
            <div class="card-body">
              <?php
                if(isset($_COOKIE["Utilizador1"]))
                {
                  echo "<h5 class='card-title'>Utilizador 1:</h5>";
                  echo "<h5 class='card-title'>".$_COOKIE["Utilizador1"]."</h5>";
                  echo "<button onclick='Logout('Utilizador1')'>Logout</button>";
                }
                else
                {
                  echo "<h5 class='card-title'>Utilizador 1</h5>";
                  echo "<button id='login1' onclick='document.getElementById('id01').style.display='block''>Login</button>";
                }
              ?>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card w-100">
            <div class="card-body">
              <?php
                if(isset($_COOKIE["Utilizador2"]))
                {
                  echo "<h5 class='card-title'>Utilizador 2:</h5>";
                  echo "<h5 class='card-title'>".$_COOKIE["Utilizador2"]."</h5>";
                  echo "<button onclick='Logout('Utilizador2')'>Logout</button>";
                }
                else
                {
                  echo "<h5 class='card-title'>Utilizador 2</h5>";
                  if(isset($_COOKIE["Utilizador1"]))
                  {
                    echo "<button id='login2' onclick='document.getElementById('id01').style.display='block''>Login</button>";
                  }
                  else
                  {
                    echo "<button id='login2' onclick='document.getElementById('id01').style.display='block'' disabled='true'>Login</button>";
                  }
                }
              ?>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col">
          <div class="card w-100">
            <div class="card-body">
              <?php
                if(isset($_COOKIE["Utilizador3"]))
                {
                  echo "<h5 class='card-title'>Utilizador 3:</h5>";
                  echo "<h5 class='card-title'>".$_COOKIE["Utilizador3"]."</h5>";
                  echo "<button onclick='Logout('Utilizador3')'>Logout</button>";
                }
                else
                {
                  echo "<h5 class='card-title'>Utilizador 3</h5>";
                  if(isset($_COOKIE["Utilizador2"]))
                  {
                    echo "<button id='login3' onclick='document.getElementById('id01').style.display='block''>Login</button>";
                  }
                  else
                  {
                    echo "<button id='login3' onclick='document.getElementById('id01').style.display='block'' disabled='true'>Login</button>";
                  }
                }
              ?>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card w-100">
            <div class="card-body">
              <?php
                if(isset($_COOKIE["Utilizador4"]))
                {
                  echo "<h5 class='card-title'>Utilizador 4:</h5>";
                  echo "<h5 class='card-title'>".$_COOKIE["Utilizador4"]."</h5>";
                  echo "<button onclick='Logout('Utilizador4')'>Logout</button>";
                }
                else
                {
                  echo "<h5 class='card-title'>Utilizador 4</h5>";
                  if(isset($_COOKIE["Utilizador3"]))
                  {
                    echo "<button id='login4' onclick='document.getElementById('id01').style.display='block''>Login</button>";
                  }
                  else
                  {
                    echo "<button id='login4' onclick='document.getElementById('id01').style.display='block'' disabled='true'>Login</button>";
                  }
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <?php
      if(isset($_COOKIE["Utilizador1"]))
      {
        echo "<a href='gameplay.php'><button id='start'>Começar</button></a>";
      }
      else
      {
        echo "<a href='gameplay.php'><button id='start' disabled='true'>Começar</button></a>";
      }      
    ?>

    <!-- The Modal -->
    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

      <!-- Modal Content -->
      <form class="modal-content animate" action="acederConta.php" method="post">
          <div class="container">
          <label for="user"><b>Username:</b></label>
          <input type="text" placeholder="Enter Username" name="user" required>

          <label for="pass"><b>Password:</b></label>
          <input type="password" placeholder="Enter Password" name="pass" required>

          <button type="submit">Login</button>
        </div>
      </form>
    </div>

    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event)
    {
        if (event.target == modal)
        {
            modal.style.display = "none";
        }
    }
    </script>

  </body>

  <?php
    function Logout($utilizador)
    {
      if($utilizador == "Utilizador1")
      {
        if(isset($_COOKIE["Utilizador2"]) && isset($_COOKIE["Utilizador3"]) && isset($_COOKIE["Utilizador4"]))
        {
          setcookie("Utilizador1", $_COOKIE("Utilizador2"));
          setcookie("Utilizador2", $_COOKIE("Utilizador3"));
          setcookie("Utilizador3", $_COOKIE("Utilizador4"));
        }
        else
          if(isset($_COOKIE["Utilizador2"]) && isset($_COOKIE["Utilizador3"]))
          {
            setcookie("Utilizador1", $_COOKIE("Utilizador2"));
            setcookie("Utilizador2", $_COOKIE("Utilizador3"));
          }
          else
            if(isset($_COOKIE["Utilizador2"]))
            {
              setcookie("Utilizador1", $_COOKIE("Utilizador2"));
            }
      }

      if($utilizador == "Utilizador2")
      {
        if(isset($_COOKIE["Utilizador3"]) && isset($_COOKIE["Utilizador4"]))
        {
          setcookie("Utilizador2", $_COOKIE("Utilizador3"));
          setcookie("Utilizador3", $_COOKIE("Utilizador4"));
        }
        else
          if(isset($_COOKIE["Utilizador3"]))
          {
            setcookie("Utilizador2", $_COOKIE("Utilizador3"));
          }
      }

      if($utilizador == "Utilizador3")
      {
        if(isset($_COOKIE["Utilizador4"]))
        {
          setcookie("Utilizador3", $_COOKIE("Utilizador4"));
        }
      }

      if($utilizador == "Utilizador4")
      {
        setcookie("Utilizador4", "", time()-3600);
      }
    }
  ?>

  <footer class="py-2 bg-dark fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; DiogoCoelho Nº19948 & GonçaloGuimarães Nº20456 2020 ESTG IPVC</p>
    </div>
  </footer>
</html>
