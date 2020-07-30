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

    <title>Sorte e Conhecimento</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/styles.css"/>

    <style>

</style>
  </head>

  <body class="pt-5" bgcolor="#CCCCCC">
    <?php
      //iniciar a basededados
      $database=new Database();
      $db=$database->getConnection();
      //inicializar objeto
      $pergunta = new Pergunta($db);

      //query products
      $stmt=$pergunta->read();
      $num=$stmt->rowCount();

      //verificar se existem produtos na BD
      if($num > 0)
      {
          //colocar os produtos num vector
          $pergunta_arr=array();
          //percorrer a lista de valores e coloca-los no vetor
          while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            //extrair linha
            extract($row);
            $pergunta_item= $pergunta;
            array_push($pergunta_arr, $pergunta_item);
          }
      }
    ?>

    <br><br><br><br><br><br><br>
    <form action="/action_page.php" method="post">
      <div class="container">
        <label>Selecione a pergunta a remover:</label>
        <br>
        <label for="pergunta">Escolha uma pergunta:</label>
        <select name="pergunta" id="pergunta">
        <?php
            foreach ($pergunta_arr as &$value)
            {
              echo "<option >".$value."</option>";
            }
          ?>
        </select>
        <button type="submit">Remover</button>
        <a href="admin.php"><p align="center">Voltar</p></a>
      </div>
    </form>
  </body>
  <footer class="py-2 bg-dark fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; DiogoCoelho Nº19948 & GonçaloGuimarães Nº20456 2020 ESTG IPVC</p>
    </div>
  </footer>
</html>
