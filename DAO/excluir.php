<?php

namespace Projeto\DAO;

use Exception;

require_once('Conexao.php');

class Excluir
{
  function ExcluirCliente(
    Conexao $conexao,
    int $codigo
  ) {
    try {
      $conn = $conexao->conectar(); //Abrir o acesso ao BD
      $sql = "DELETE FROM cliente WHERE codigo = $codigo";
      $result = mysqli_query($conn, $sql); // executando o comando
      // fechar a conexao com o banco
      mysqli_close($conn);
      // aviso para o usuario se o dado foi colocado na tabela
      if ($result) {
        return "<br><br> Excluído com sucesso";
      }
      return "<br><br> Não Excluído";
    } catch (Exception $erro) {
      echo "Algo deu errado! <br><br> $erro";
    }
  }
}
