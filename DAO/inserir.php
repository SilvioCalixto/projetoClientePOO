<?php
  namespace projeto\DAO;
  require_once('Conexao.php');

use Projeto\DAO\Conexao;

  class Inserir{
    public function cadastrarCliente(Conexao $conexao,
                                      string $nome,
                                      string $telefone,
                                      string $dtNascimento,
                                      string $endereco)
    {
      try{
        $conn = $conexao->conectar();// abrir o acesso ao BD
        $sql = "insert into cliente(codigo, nome, telefone, dtNascimento, endereco) values('','$nome','$telefone','$dtNascimento','$endereco')";
        $result = mysqli_query($conn, $sql);// executando o comando

        // fechar conexão com o Banco de Dados(BD)
        mysqli_close($conn);
        // aviso para o usuario se o dado foi colocado na tabela
        if($conn){
          return "<br><br> Inserido com sucesso!";
        }
        return "<br><br> Não inserido!";
      }
      catch(Exception $erro)
      {
        return "<br><br>Algo deu errado!!!<br><br> $erro";
      }//fim do catch
    }//fim do metodo
  }
?>