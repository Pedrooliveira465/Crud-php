<?php
include_once "conect.php";

    try{
        $nome = filter_var($_POST ['nome']);
        $email = filter_var($_POST ['email']);
    
        $insert = $conexao-> prepare("INSERT INTO cadastro(nome, email) VALUES(:nome,:email)");
        $insert -> bindParam(':nome', $nome);
        $insert -> bindParam(':email', $email);
        $insert -> execute();

        header("location:index.php");
    }
    catch(PDOException $erro){
        echo "Deu erro" .$erro->getMessage();
    }
?>