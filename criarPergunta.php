<!DOCTYPE html>
<html lang="PT">

  <head>

    <?php
      //ligar à bd
      include_once 'webservices/config/database.php';
      //iniciar classe products
      include_once 'webservices/objects/pergunta.php';
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
      $pergunta = new Pergunta($db);

      $stmt = $pergunta->readPergunta($_POST["pergunta"]);
      $num = $stmt->rowCount();
      //verificar se existem produtos na BD
      if($num > 0)
      {
        echo "Pergunta já está em uso.";
      }
      else
      {
        //obter os valores passados no formulário
        $data=json_decode(file_get_contents("php://input"));

        if($_POST["tipo"] == "1")
        {
          //atribuir os valores às propriedades da classe
          $pergunta->pergunta = $_POST["pergunta"];
          $pergunta->tipo = $_POST["tipo"];
          $pergunta->idCategoria = $_POST["categoria"];
          $pergunta->resposta1 = $_POST["respostaD"];
          $pergunta->resposta2 = "";
          $pergunta->resposta3 = "";
          $pergunta->resposta4 = "";
        }
        else
          if($_POST["tipo"] == "2")
          {
            //atribuir os valores às propriedades da classe
            $pergunta->pergunta = $_POST["pergunta"];
            $pergunta->tipo = $_POST["tipo"];
            $pergunta->idCategoria = $_POST["categoria"];
            $pergunta->resposta1 = $_POST["respostaM1"];
            $pergunta->resposta2 = $_POST["respostaM2"];
            $pergunta->resposta3 = $_POST["respostaM3"];
            $pergunta->resposta4 = $_POST["respostaM4"];
          }
          else
          {
            //atribuir os valores às propriedades da classe
            $pergunta->pergunta = $_POST["pergunta"];
            $pergunta->tipo = $_POST["tipo"];
            $pergunta->idCategoria = $_POST["categoria"];
            $pergunta->resposta1 = $_POST["respostaB"];
            $pergunta->resposta2 = "";
            $pergunta->resposta3 = "";
            $pergunta->resposta4 = "";
          }
        
        // criar o pergunta
        if($pergunta->create())
        {
            echo "Pergunta criada.";
        }
        else
        {
            echo "Impossível criar pergunta.";
        }
      }
    ?>
    <br>
    <a href="admin.php" class="btn btn-default">Voltar</a>
  </body>
</html>