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
      $database = new Database();
      $db = $database->getConnection();
      $utilizador = new Utilizador($db);

      $stmt = $utilizador->readUser($_POST["user"]);
      $num = $stmt->rowCount();
      //verificar se existem produtos na BD
      if($num > 0)
      {
        echo "Username já em uso.";
      }
      else
      {
        //obter os valores passados no formulário
        $data=json_decode(file_get_contents("php://input"));

        //atribuir os valores às propriedades da classe
        $utilizador->nickname = $_POST["user"];
        $utilizador->password = $_POST["pass"];
        $utilizador->nome = $_POST["nome"];
        $utilizador->pais = $_POST["pais"];
        $utilizador->idade = $_POST["idade"];


        // criar o ~utilizador
        if($utilizador->create())
        {
            echo "Utilizador Criado.";
        }
        else
        {
            echo "Impossível criar utilizador.";
        }
      }
    ?>
    <br>
    <a href="index.php" class="btn btn-default">Voltar</a>
  </body>
</html>