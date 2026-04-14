<?php
  namespace Projeto\DAO;
  require_once('Conexao.php');

use Exception;
use Projeto\DAO\Conexao;

  class Consultar{
    function consultarCliente(Conexao $conexao, int $codigo){
      try{
        $conn = $conexao->conectar();
        $sql = "SELECT * FROM cliente WHERE codigo=$codigo";
        $result = mysqli_query($conn, $sql);

        while($dados = mysqli_fetch_Array($result)){
          if($dados['codigo'] == $codigo){
            return "<br>Código: ".$dados['codigo'].
                   "<br>Nome: ".$dados['nome'].
                   "<br>Telefone: ".$dados['telefone'].
                   "<br>Data de Nascimento: ".$dados['dtNascimento'].
                   "<br>Endereço: ".$dados['endereco'];
          }
        }// fim do while
      }catch(Exception $erro){
          echo "Algo deu errado~! <br><br> $erro";
      }
    }// fim do consultarCliente

  }/// fim da classe 


?>