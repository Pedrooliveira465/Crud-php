<?php
    include_once "conect.php";

    $id = filter_var($_GET ["id"], FILTER_SANITIZE_NUMBER_INT);
    $consulta = $conexao -> query("SELECT * FROM cadastro WHERE id = '$id' ");
    $linha = $consulta -> fetch(PDO:: FETCH_ASSOC);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.css">
    <title>Editar</title>
</head>
<body id = "corpoEditar">

    <form action="editar.php" method="POST" id="form">
    <div class="formEditar">
            <h2>PS5 DE GRAÇA</h2>
            <P>NÃO PERCA A OPORTUNIDADE DE GANHAR UM PS5 POR CONTA DE DADOS ERRADOS, COLOQUE CERTO DESSA VEZ!!!</P>
            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
            Nome completo:
            <input type="text" name="nome" id= "nome" placeholder="Pedro Neto Marques" value="<?php echo $linha['nome'] ?>">
            <br>
            Digite um número de 1 a 4:
            <input type="text" name="numero" id="numero" placeholder="4" value="<?php echo $linha['numero'] ?>">
            <br>
            <input type="submit" value="Salvar" onclick ="" id ="salvar">
        </div>
    </form>
    <script>
        document.getElementById("salvar").onclick = function clicar(){
    alert("Editado com sucesso!")
}
    </script>
</body>
</html>


