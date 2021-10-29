<?php
   //Chamando o arquivo "conect"
   include_once "conect.php";

   try{
       $consulta = $conexao -> query("SELECT * FROM cadastro");
       echo "<button><a href = 'index.php'> PÁGINA INICIAL</a></button>";
   }
   catch(PDOException $erro){
       echo "Deu ruim" .$erro -> getMessage();
   }
   try {
       $stmt = $conexao -> query("SELECT * FROM cadastro");
           echo "<div id = 'tabela'><table border='1'><tr><td>Nome</td><td>Número</td></tr>";


               while ($linha = $consulta ->fetch(PDO::FETCH_ASSOC)) {
                   echo "<tr><td>$linha[nome]</td><td>$linha[email]</td>";
                    
               }
               echo "</table>";
    }               catch (PDOException $erro) {
                       echo "Erro: " .$erro->getMessage();
                   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.css">
    <title>LISTA DO CADASTRO</title>
</head>
<body id = "corpoLista">


</body>
</html>