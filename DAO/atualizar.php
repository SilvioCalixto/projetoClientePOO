<?php 
  namespace Projeto\DAO;
  require_once('Conexao.php');

use Exception;
use Projeto\DAO\Conexao;

  class Atualizar{
    function AtualizarCliente(Conexao $conexao,
                              int $codigo,
                              String $campo,
                              String $novoDado)
       {
            try{
                $conn = $conexao->conectar();//abrir acsso bd
                $sql  = "UPDATE cliente SET $campo = '$novoDado' WHERE codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);//Executando o comando
                //fechar a conexao com o banco
                mysqli_close($conn);
                //aviso para o usuario se o dade foi colocado na tabela
                if($result){
                    return "<br><br>Atualizado com sucesso";
                }
                return "<br><br>Não Atualizado!";
            }catch(Exception $erro){
                return $erro;
            }

        }                       
  }//fim da classe
?>