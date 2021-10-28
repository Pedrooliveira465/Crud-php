<?php
    include_once "conect.php";

        try{
            $id = filter_var($_GET ['id'], FILTER_SANITIZE_NUMBER_INT);

            $insert = $conexao-> prepare("DELETE FROM cadastro WHERE id = :id ");
            $insert -> bindParam(':id', $id);
            $insert -> execute();

            header("location:lista.php");
        }
        catch(PDOException $erro){
            echo "Deu erro" .$erro->getMessage();
        }
?>