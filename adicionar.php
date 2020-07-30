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

    <style>

</style>
  </head>

  <body class="pt-5" bgcolor="#CCCCCC">
    <form action="criarPergunta.php" method="post">
      <div class="container">
        <label for="pergunta"><b>Pergunta:</b></label>
        <input type="text" placeholder="Coloque a Pergunta" name="pergunta" required>

        <label for="categoria"><b>Categoria:</b></label>
        <select name="categoria" id="categoria">
          <option value="2">História</option>
          <option value="3">Cinema</option>
          <option value="4">Música</option>
          <option value="5">Geografia</option>
          <option value="6">Literatura</option>
          <option value="7">Biologia</option>
          <option value="8">Matemática</option>
          <option value="9">Informática</option>
          <option value="10">Política</option>
          <option value="11">Futebol</option>
          <option value="12">Cultura Geral</option>
        </select>

        <label for="tipo"><b>Tipo:</b></label>
        <select name="tipo" id="tipo">
          <option value="1">Direta</option>
          <option value="2">Múltipla</option>
          <option value="3">Booleana</option>
        </select>
        <br>
        <label for="respostaD"><b>Resposta:</b></label>
        <input type="text" placeholder="Coloque a Resposta" name="respostaD">

        <label for="respostaB"><b>Resposta:</b></label>
        <select name="respostaB" id="respostaB">
          <option value="1">True</option>
          <option value="2">False</option>
        </select>
        <br>
        <label><b>Respostas:</b></label>
        <input type="text" placeholder="Resposta 1" name="respostaM1">
        <input type="text" placeholder="Resposta 2" name="respostaM2">
        <br>
        <input type="text" placeholder="Resposta 3" name="respostaM3">
        <input type="text" placeholder="Resposta 4" name="respostaM4">

        <button type="submit">Adicionar</button>
        <a href="admin.php"><p align="center">Voltar</p></a>
        <br><br>
      </div>
    </form>
  </body>
  <footer class="py-2 bg-dark fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; DiogoCoelho Nº19948 & GonçaloGuimarães Nº20456 2020 ESTG IPVC</p>
    </div>
  </footer>
</html>
