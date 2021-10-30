<?php
include_once "conect.php";

    $id = filter_var($_GET ["id"], FILTER_SANITIZE_NUMBER_INT);
    $consulta = $conexao -> query("SELECT * FROM cadastro WHERE id = '$id' ");
    $linha = $consulta -> fetch(PDO:: FETCH_ASSOC);
    
    echo "Quer mesmo excluir esse cadastro?";
    echo "<a href = 'delete.php ?id=$linha[id]'>Sim</a>";
    echo "<a href = 'index.php'>Não<a/>";
?>