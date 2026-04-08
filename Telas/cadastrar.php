<?php
  namespace Projeto\Telas;
  require_once('../DAO/conexao.php');
  require_once('../DAO/inserir.php');
  use Projeto\DAO\Conexao;
  use Projeto\DAO\Inserir;

  // chamar as classes que vou utilizar
  $conexao = new Conexao();// acessar a classe Conexao
  $inserir = new Inserir();// acessar a classe Inserir
  $mensagem = "";

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <title>Cadastrar</title>
</head>
<body>
  <main>
    <div class="container">
      <h1>Tela de Cadastro</h1>
      <form class="form-control" method="POST">
        <br>
        <div class="mb-3">
          <label for="nome" class="form-label">Nome: </label>
          <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <br>
        <div class="mb-3">
          <label for="telefone" class="form-label">Telefone: </label>
          <input type="text" class="form-control" id="telefone" name="telefone">
        </div>
        <br>
        <div class="mb-3">
          <label for="dtNascimento" class="form-label">Data de Nascimento: </label>
          <input type="date" class="form-control" id="dtNascimnento" name="dtNascimento">
        </div>
        <br>
        <div class="mb-3">
          <label for="endereco" class="form-label">Endereço: </label>
          <input type="text" class="form-control" id="endereco" name="endereco">
        </div>
        <br>
        <button type="submit" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar
          <?php
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $dtNascimento = $_POST['dtNascimento'];
            $endereco = $_POST['endereco'];

            $mensagem = $inserir -> cadastrarCliente($conexao,
                                              $nome,
                                              $telefone,
                                              $dtNascimento,
                                              $endereco);
          ?>
        </button>
      </form>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <?php
               echo $mensagem;
              ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>



      <a href="../index.php" type="submit" class="btn btn-outline-secondary">Voltar</a>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>