<!DOCTYPE html>
<html lang="PT">

  <head>

    <?php
      //ligar à bd
      include_once 'webservices/config/database.php';
      //iniciar classe products
      include_once 'webservices/objects/utilizador.php';
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  </head>

  <body>
    <?php
      if($_POST["user"] == "admin" && $_POST["pass"] == "admin")
      {
        header("Location: admin.php");
        exit;
      }
      else
      {
        //iniciar a basededados
        $database = new Database();
        $db = $database->getConnection();
        //inicializar objeto
        $utilizador = new Utilizador($db);
        $user = $_POST["user"];
        //query products
        $stmt = $utilizador->readAt($user, $_POST["pass"]);
        $num = $stmt->rowCount();
        //verificar se existem produtos na BD
        if($num > 0)
        {
          if(!isset($_COOKIE["Utilizador1"]))
          {
            setcookie("Utilizador1", $user);
            echo "Login realizado.";
          }
          else
            if(!isset($_COOKIE["Utilizador2"]))
            {
              if($_COOKIE["Utilizador1"] != $user)
              {
                setcookie("Utilizador2", $user);
                echo "Login realizado.";
              }
              else
              {
                echo "Este utilizador já está logado.";
              }
            }
            else
              if(!isset($_COOKIE["Utilizador3"]))
              {
                if($_COOKIE["Utilizador1"] != $user && $_COOKIE["Utilizador2"] != $user)
                {
                  setcookie("Utilizador3", $user);
                  echo "Login realizado.";
                }
                else
                {
                  echo "Este utilizador já está logado.";
                }
              }
              else
                if(!isset($_COOKIE["Utilizador4"]))
                {
                  if($_COOKIE["Utilizador1"] != $user && $_COOKIE["Utilizador2"] != $user && $_COOKIE["Utilizador3"] != $user)
                  {
                    setcookie("Utilizador4", $user);
                    echo "Login realizado.";
                  }
                  else
                  {
                    echo "Este utilizador já está logado.";
                  }
                }
                else
                {
                  echo "Não pode realizar mais Logins!";
                }
        }
        else
        {
          echo "Login incorreto, certifique-se de que o nickname e/ou password estão corretos.";
        }
        echo "<br>";
        echo "<a href='play.php' class='btn btn-default'>Voltar</a>";
      }
    ?>
  </body>
</html>