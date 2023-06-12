<?php

    include('protecao.php');

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste PHP</title>

    <style type="text/css" media="all">
        @import url("../_css/index.css");
        </style>



</head>
<body>
  

  <div class="divisao">


  <?php 

    

    require_once "conexao01.php";

// Recebe os dados do formul�rio com a vari�vel $_POST 
$nome = $_POST['nome']; 
$endereco = $_POST['endereco']; 
$cidade = $_POST['cidade']; 
$faixa = $_POST['faixa']; 
$sexo = $_POST['sexo'];
  
  //conexão e sele��o do banco de dados 
  $con = novaConexao();

   
  //executa a consulta 
  
  $query  =  "INSERT  INTO  cliente  (nome,  endereco,  cidade,  faixa, 
sexo) VALUES ('$nome','$endereco','$cidade','$faixa','$sexo')"; 
  
  $insert = mysqli_query($con,$query); 
   
  if($insert){ 
          echo "Cliente cadastrado com sucesso <p>"; 
        }else{ 
          echo"Erro"; 
    } 
//Exibe os dados na p�gina de resposta: RespForm1.php 
echo utf8_encode("Os dados recebidos do formul�rio s�o: <p>"); 



echo (    " 

<table width = '400' border='1' cellspacing='0' cellpadding='0'> 
  <tr> 
  <td width = '100'>Nome: <td> 
  <td width = '300'>$nome</td> 
  </tr> 
  <tr> 
  <td width = '100'>Endere�o :<td>
  <td width = '300'>$endereco</td> 
  </tr> 
  <tr> 
  <td width = '100'>Cidade :<td> 
  <td width = '300'>$cidade</td> 
  </tr> 
  <tr> 
  <td width = '100'>Faixa et�ria :<td> 
  <td width = '300'>$faixa</td> 
  </tr> 
  <tr> 
  <td width = '100'>Sexo :<td> 
  <td width = '300'>$sexo</td> 
  </tr> 
  </table> 
 "); 

$con->close();

    

  ?> 


  </div>

<a href='home.php'><button>Home</button></a>

                    <form action="logout.php">
                    <button>Sair</button></a>
                    </form>    



  </body> 
</html>




