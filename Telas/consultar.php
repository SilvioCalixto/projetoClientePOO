<?php
namespace Ptojeto\Telas;
require_once('../DAO/Conexao.php');
require_once('../DAO/Consultar.php');
use Projeto\DAO\Conexao;
use Projeto\DAO\Consultar;

$conexao   = new Conexao();
$consultar = new Consultar();
$resultado = "";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Consultar</title>
</head>
<body>
    <div class="container">
      <h1>Tela Consultar</h1>
      <form method="POST">
        <label>Código</label>
        <input type="number" name="codigo" id="codigo">
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Consultar
          <?php
            $resultado = $consultar->consultarCliente($conexao, $_POST['codigo']);
          ?>
        </button>
      </form>
    </div>
    <div>
        <?php echo $resultado; ?>
    </div>
    <a href="../index.php" type="submit" class="btn btn-outline-secondary">Voltar</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>