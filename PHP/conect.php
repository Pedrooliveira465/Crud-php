<?php
//Criando a conexão com o banco de dados
    try{
        $conexao = new PDO("mysql: host=localhost; dbname=crud2", "root");
        $conexao->exec("set names uft8");
    }
    catch(PDOException $erro){
        echo "Deu ruim" .$erro -> getMessage();
    }

    
        
?>