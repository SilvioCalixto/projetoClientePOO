<?php 
    namespace Projeto\Telas;
    require_once('../DAO/Conexao.php');
    require_once('../DAO/Atualizar.php');
    use Projeto\DAO\Conexao;
    use Projeto\DAO\Atualizar;

    $conexao = new Conexao();
    $atualizar = new Atualizar();
    $resultado = "";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Atualizar</title>
</head>
<body>
<h1>Atualizar Cliente</h1><br>
    <form action="" method="POST">
        <label for="">Código: </label>
        <input type="number" name="cod" id="cod">
        <br><br>
        <label for="">Escolha o campo que deseja atualizar: </label>
        <select name="campo" id="campo">
            <option value="nome">Nome</option>
            <option value="telefone">Telefone</option>
            <option value="endereco">Endereço</option>
        </select>
        <br><br>
        <label for="">Informe o novo dado: </label>
        <input type="text" name="novoDado" id="novoDado">
        <br><br>
        <button type="submit" class="btn btn-outline-primary" data-bs-toggle="modal">Atualizar
            <?php 
                $codigo = $_POST['codigo'];
                $campo = $_POST['campo'];
                $novoDado = $_POST['novoDado'];

                $resultado = $atualizar->atualizarCliente($conexao, $codigo, $campo, $novoDado);

            ?>
        </button>
    </form>
    <div><?php echo $resultado; ?></div>
    <a href="../index.php" type="submit" class="btn btn-outline-secondary">Voltar</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>