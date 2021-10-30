<?php
//Chamando o arquivo "conect"
include_once "conect.php";

try{
    $consulta = $conexao->query("SELECT * FROM cadastro");
    echo "NÃO PERCA ESSA GRANDE OPORTUNIDADE DE CONSEGUIR UM PS5 DE GRAÇA:  ";
    echo "<button><a href = 'form.php'>  CADASTRE-SE </a></button><br>";
    echo "<button><a href = 'sorteio.php'>SORTEIO<a/></button><br>";
}
catch(PDOException $erro){
    echo "Deu ruim" .$erro -> getMessage();
}

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.css">
    <title>PS5 DE GRAÇA</title>
</head>
<body id = "corpoIndex">
 

</body>
</html>
