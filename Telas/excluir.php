<?php

namespace Projeto\Telas;

require_once("../DAO/Conexao.php");
require_once("../DAO/Excluir.php");

use Projeto\DAO\Conexao;
use Projeto\DAO\Excluir;

$conexao = new Conexao();
$excluir = new Excluir();
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
  if (!empty($_POST['codigo']) && is_numeric($_POST['codigo'])) {
      
      $codigo = (int) $_POST['codigo'];
      
      $resultado = $excluir->ExcluirCliente($conexao, $codigo);

  } else {
      $resultado = "Código inválido!";
  }
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Excluir</title>
 
</head>

<body>
  <div class="container">
    <h1>Excluir Cliente</h1>
    <form method="POST">
      <label>Código: </label>
      <input type="number" name="codigo" id="codigo">
      <br><br>
      <button>Excluir
      </button>
    </form>
  </div>
  <br>
  <div>
    <?php echo $resultado; ?>
  </div>
  <a href="../index.php" type="submit" class="btn btn-outline-secondary">Voltar</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>