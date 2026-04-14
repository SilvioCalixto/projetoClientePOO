<?php
  namespace Projeto\DAO;

use Exception;

  class Conexao{
      function conectar(){
        try{
          $conn = mysqli_connect('localhost',
                                  'root',
                                  '',
                                  'projetoCliente');

          //validação
          if($conn){
            echo "<br> Conectado com sucesso!";
            return $conn;
          }
          echo "Algo deu errrado!";
        }
        catch(Exception $erro)
        {
          return "Algo deu errado!<br><br> $erro";
        }
      }// fim do método conectar
  }// fim da classe
?>